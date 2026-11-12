<?php

use Glpi\Tests\DbTestCase;

require_once dirname(__DIR__) . '/inc/config.class.php';

final class BrandingTest extends DbTestCase
{
    private array $images = [];

    public static function setUpBeforeClass(): void
    {
        PluginBrandingConfig::install();
    }

    public function tearDown(): void
    {
        foreach ($this->images as $path) {
            if (is_file($path) || is_link($path)) {
                unlink($path);
            }
        }
        parent::tearDown();
    }

    private function image(int $entity, string $field): string
    {
        $name = 'test_' . bin2hex(random_bytes(8)) . '.png';
        $path = PluginBrandingConfig::getImagePath($entity, $name);
        if (!is_dir(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }
        copy(GLPI_ROOT . '/public/pics/logos/logo-GLPI-100-black.png', $path);
        $this->images[] = $path;
        self::assertTrue(PluginBrandingConfig::upsertField($entity, $field, $name));
        return $name;
    }

    public function testInstalledSchemaIncludesLoginLogo(): void
    {
        // DDL must be outside the transaction managed by DbTestCase.
        global $DB;
        self::assertTrue($DB->fieldExists(PluginBrandingConfig::getTable(), 'login_logo'));
        self::assertCount(4, PluginBrandingConfig::getRowForEntity(-1));
    }

    public function testLoginContextRejectsInvalidEntitiesWithoutChangingActiveEntity(): void
    {
        $this->login();
        $entity = $this->createItem(Entity::class, ['name' => 'Branded login', 'entities_id' => 0]);
        $id = (int) $entity->getID();
        $active = Session::getActiveEntity();
        self::assertSame($id, PluginBrandingConfig::getLoginEntityId((string) $id));
        foreach ([null, '', -1, 'invalid', '1 OR 1=1', [], ['1'], PHP_INT_MAX] as $invalid) {
            self::assertSame(0, PluginBrandingConfig::getLoginEntityId($invalid));
        }
        self::assertSame($active, Session::getActiveEntity());
    }

    public function testPublicImageUrlsKeepEntityContextAndMenuUrlsDoNotSelectEntities(): void
    {
        $resolved = ['entities_id' => 42, 'filename' => 'logo.png'];
        foreach (PluginBrandingConfig::FIELDS as $field) {
            parse_str(parse_url(PluginBrandingConfig::getImageUrl($field, $resolved), PHP_URL_QUERY), $query);
            self::assertSame($field, $query['field']);
            if (str_starts_with($field, 'login_')) {
                self::assertSame('42', $query['branding_entity']);
            } else {
                self::assertArrayNotHasKey('branding_entity', $query);
            }
        }
    }

    public function testClosestAncestorWinsAndRemovalRestoresInheritance(): void
    {
        $this->login();
        $parent = $this->createItem(Entity::class, ['name' => 'Branding parent', 'entities_id' => 0]);
        $child = $this->createItem(Entity::class, ['name' => 'Branding child', 'entities_id' => $parent->getID()]);
        $pid = (int) $parent->getID();
        $cid = (int) $child->getID();
        // Populate GLPI's root-first ancestor cache as in real installations.
        getAncestorsOf('glpi_entities', $cid);
        $root = $this->image(0, 'logo_expanded');
        $parentImage = $this->image($pid, 'logo_expanded');
        self::assertSame(['entities_id' => $pid, 'filename' => $parentImage], PluginBrandingConfig::resolveFileForEntity($cid, 'logo_expanded'));
        $own = $this->image($cid, 'logo_expanded');
        self::assertSame($own, PluginBrandingConfig::resolveFileForEntity($cid, 'logo_expanded')['filename']);
        self::assertTrue(PluginBrandingConfig::removeField($cid, 'logo_expanded'));
        self::assertFileDoesNotExist(PluginBrandingConfig::getImagePath($cid, $own));
        self::assertSame($parentImage, PluginBrandingConfig::resolveFileForEntity($cid, 'logo_expanded')['filename']);
        self::assertTrue(PluginBrandingConfig::removeField($pid, 'logo_expanded'));
        self::assertSame($root, PluginBrandingConfig::resolveFileForEntity($cid, 'logo_expanded')['filename']);
    }

    public function testMissingImageFallsBackAndFieldsAreIndependent(): void
    {
        $this->login();
        $child = $this->createItem(Entity::class, ['name' => 'Branding missing file', 'entities_id' => 0]);
        $cid = (int) $child->getID();
        $root = $this->image(0, 'logo_expanded');
        self::assertTrue(PluginBrandingConfig::upsertField($cid, 'logo_expanded', 'missing.png'));
        self::assertSame($root, PluginBrandingConfig::resolveFileForEntity($cid, 'logo_expanded')['filename']);
        self::assertNull(PluginBrandingConfig::resolveFileForEntity($cid, 'logo_collapsed'));
    }

    public function testInvalidFieldsAndPathsAreRejected(): void
    {
        self::assertNull(PluginBrandingConfig::resolveFileForEntity(-1, 'login_logo'));
        self::assertNull(PluginBrandingConfig::resolveFileForEntity(0, 'unknown'));
        self::assertFalse(PluginBrandingConfig::upsertField(0, 'entities_id', '1'));
        self::assertFalse(PluginBrandingConfig::removeField(-1, 'login_logo'));
        self::assertNull(PluginBrandingConfig::getReadableImagePath(0, '../outside.png'));
        self::assertNull(PluginBrandingConfig::getReadableImagePath(0, '..\\outside.png'));
        self::assertNull(PluginBrandingConfig::getReadableImagePath(0, "invalid\0.png"));
    }

    public function testSymlinkCannotEscapeStorage(): void
    {
        $name = 'link_' . bin2hex(random_bytes(8)) . '.png';
        $this->image(0, 'login_logo');
        $path = PluginBrandingConfig::getImagePath(0, $name);
        symlink(GLPI_ROOT . '/public/pics/logos/logo-GLPI-100-black.png', $path);
        $this->images[] = $path;
        self::assertNull(PluginBrandingConfig::getReadableImagePath(0, $name));
    }

    public function testFailedUploadDoesNotDeleteExistingImageEvenWhenRemovalIsChecked(): void
    {
        $name = $this->image(0, 'login_logo');
        $entity = new Entity();
        self::assertTrue($entity->getFromDB(0));
        $_POST = ['_plugin_branding_remove_login_logo' => '1'];
        $_FILES = ['plugin_branding_login_logo' => ['name' => 'new.png', 'tmp_name' => '', 'error' => UPLOAD_ERR_INI_SIZE]];
        self::assertFalse(PluginBrandingConfig::processEntityFormPost($entity));
        $this->hasSessionMessages(ERROR, ['Could not save uploaded file.']);
        self::assertSame($name, PluginBrandingConfig::getRowForEntity(0)['login_logo']);
        self::assertFileExists(PluginBrandingConfig::getImagePath(0, $name));
    }

    public function testEmptyFileInputDoesNotChangeConfiguration(): void
    {
        $name = $this->image(0, 'login_logo');
        $entity = new Entity();
        $entity->getFromDB(0);
        $_POST = [];
        $_FILES = ['plugin_branding_login_logo' => ['name' => '', 'tmp_name' => '', 'error' => UPLOAD_ERR_NO_FILE]];
        self::assertTrue(PluginBrandingConfig::processEntityFormPost($entity));
        self::assertSame($name, PluginBrandingConfig::getRowForEntity(0)['login_logo']);
    }

    public function testRemovalFailurePreservesTheImage(): void
    {
        global $DB;
        $name = $this->image(0, 'login_logo');
        $realDB = $DB;
        $failedDB = $this->getMockBuilder(DB::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['request', 'update'])
            ->getMock();
        $failedDB->method('request')->willReturnCallback(static fn($query) => $realDB->request($query));
        $failedDB->method('update')->willReturn(false);
        try {
            $DB = $failedDB;
            self::assertFalse(PluginBrandingConfig::removeField(0, 'login_logo'));
        } finally {
            $DB = $realDB;
        }
        self::assertFileExists(PluginBrandingConfig::getImagePath(0, $name));
        self::assertSame($name, PluginBrandingConfig::getRowForEntity(0)['login_logo']);
    }

    public function testCyclicEntityHierarchyTerminates(): void
    {
        global $DB;
        $this->login();
        $entity = $this->createItem(Entity::class, ['name' => 'Branding cycle', 'entities_id' => 0]);
        $id = (int) $entity->getID();
        $DB->update('glpi_entities', ['entities_id' => $id], ['id' => $id]);
        self::assertNull(PluginBrandingConfig::resolveFileForEntity($id, 'logo_expanded'));
    }
}
