<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/inc/config.class.php';

/** Real multipart uploads, GLPI sessions, CSRF and public image delivery. */
final class BrandingHttpTest extends TestCase
{
    private CurlHandle $client;
    private string $base;
    private const FRONT = '/plugins/branding/front/';

    protected function setUp(): void
    {
        $this->base = rtrim(getenv('BRANDING_TEST_URL') ?: '', '/');
        if ($this->base === '') {
            self::markTestSkipped('Start tests/router.php and set BRANDING_TEST_URL (see README).');
        }
        self::assertSame('testing', GLPI_ENVIRONMENT_TYPE);
        $this->client = curl_init();
        curl_setopt_array($this->client, [CURLOPT_COOKIEFILE => '', CURLOPT_RETURNTRANSFER => true, CURLOPT_HEADER => true, CURLOPT_TIMEOUT => 15]);
    }

    private function request(string $path, ?array $post = null): array
    {
        curl_setopt($this->client, CURLOPT_URL, $this->base . $path);
        if ($post === null) {
            curl_setopt($this->client, CURLOPT_HTTPGET, true);
        } else {
            curl_setopt($this->client, CURLOPT_POSTFIELDS, $post);
        }
        $response = curl_exec($this->client);
        self::assertNotFalse($response, curl_error($this->client));
        $size = curl_getinfo($this->client, CURLINFO_HEADER_SIZE);
        self::assertStringContainsString('X-Branding-Test-Environment: testing', substr($response, 0, $size), 'Use only the dedicated Branding testing router.');
        return [
            'status' => curl_getinfo($this->client, CURLINFO_RESPONSE_CODE),
            'headers' => substr($response, 0, $size),
            'body' => substr($response, $size),
        ];
    }

    private function token(string $html): string
    {
        $crawler = new Symfony\Component\DomCrawler\Crawler($html);
        return $crawler->filter('input[name="_glpi_csrf_token"]')->first()->attr('value');
    }

    private function save(array $fields, int $entity = 0): array
    {
        $page = $this->request('/front/entity.form.php?id=' . $entity);
        self::assertSame(200, $page['status']);
        $crawler = new Symfony\Component\DomCrawler\Crawler($page['body']);
        return $this->request(self::FRONT . 'entity.form.php', $fields + [
            'entities_id' => (string) $entity, 'update' => '1',
            '_glpi_csrf_token' => $crawler->filter('meta[property="glpi:csrf_token"]')->attr('content'),
        ]);
    }

    private function login(): void
    {
        $page = $this->request('/');
        self::assertSame(302, $this->request('/front/login.php', [
            'login_name' => TU_USER, 'login_password' => TU_PASS, 'auth' => 'local',
            '_glpi_csrf_token' => $this->token($page['body']),
        ])['status']);
        $central = $this->request('/front/central.php');
        $crawler = new Symfony\Component\DomCrawler\Crawler($central['body']);
        self::assertSame(302, $this->request('/Session/ChangeEntity', [
            'id' => '0', 'is_recursive' => '1',
            '_glpi_csrf_token' => $crawler->filter('meta[property="glpi:csrf_token"]')->attr('content'),
        ])['status']);
    }

    public function testEntityLoginUploadInheritanceIsolationAndRemoval(): void
    {
        global $DB;
        self::assertSame(array_fill_keys(PluginBrandingConfig::FIELDS, null), PluginBrandingConfig::getRowForEntity(0));
        $entities = [];
        $fixture = tempnam(sys_get_temp_dir(), 'branding_entity_');
        $canvas = imagecreatetruecolor(3, 3);
        imagefill($canvas, 0, 0, imagecolorallocate($canvas, 90, 120, 200));
        imagepng($canvas, $fixture);
        try {
            foreach (['parent', 'child', 'sibling'] as $name) {
                self::assertTrue($DB->insert('glpi_entities', [
                    'name' => 'Branding HTTP ' . $name,
                    'entities_id' => $name === 'child' ? $entities['parent'] : 0,
                ]));
                $entities[$name] = (int) $DB->insertId();
            }
            $DB->update('glpi_entities', ['sons_cache' => null], ['id' => 0]);
            $cache = (new \Glpi\Cache\CacheManager())->getCoreCacheInstance();
            $cache->delete('sons_cache_glpi_entities_0');
            $this->login();
            $parent = $entities['parent'];
            $child = $entities['child'];
            self::assertSame(302, $this->save([
                'plugin_branding_login_background' => new CURLFile($fixture, 'image/png', 'background.png'),
                'plugin_branding_login_logo' => new CURLFile($fixture, 'image/png', 'logo.png'),
            ], $parent)['status']);
            foreach (['login_background', 'login_logo'] as $field) {
                self::assertNotNull(PluginBrandingConfig::getRowForEntity($parent)[$field]);
            }
            $this->request('/front/logout.php?noAUTO=1');
            $page = $this->request('/index.php?branding_entity=' . $child);
            $crawler = new Symfony\Component\DomCrawler\Crawler($page['body']);
            $href = $crawler->filter('link[href*="/branding/front/login.css.php"]')->attr('href');
            self::assertStringContainsString('branding_entity=' . $child, $href);
            self::assertStringContainsString('/branding/js/login.js', $page['body']);
            $css = $this->request($href);
            self::assertSame(200, $css['status']);
            foreach (['login_background', 'login_logo'] as $field) {
                $url = PluginBrandingConfig::getImageUrl($field, PluginBrandingConfig::resolveFileForEntity($child, $field));
                self::assertStringContainsString($url, $css['body']);
                self::assertSame(file_get_contents($fixture), $this->request($url)['body']);
                self::assertSame(404, $this->request(self::FRONT . 'image.php?field=' . $field)['status']);
                self::assertSame(404, $this->request(self::FRONT . 'image.php?field=' . $field . '&branding_entity=' . $entities['sibling'])['status']);
            }
            foreach (['-1', 'invalid', (string) PHP_INT_MAX, '%5B1%5D'] as $invalid) {
                self::assertSame('', $this->request(self::FRONT . 'login.css.php?branding_entity=' . $invalid)['body']);
            }
            self::assertSame('', $this->request(self::FRONT . 'login.css.php?branding_entity[]=1')['body']);
            // The public login parameter cannot bypass menu authentication.
            self::assertContains($this->request(self::FRONT . 'image.php?field=logo_expanded&branding_entity=' . $parent)['status'], [302, 403]);

            $this->login();
            $source = GLPI_ROOT . '/public/pics/logos/logo-GLPI-100-black.png';
            self::assertSame(302, $this->save(['plugin_branding_login_logo' => new CURLFile($source, 'image/png', 'child.png')], $child)['status']);
            self::assertSame(file_get_contents($source), $this->request(self::FRONT . 'image.php?field=login_logo&branding_entity=' . $child)['body']);
            self::assertSame(file_get_contents($fixture), $this->request(self::FRONT . 'image.php?field=login_logo&branding_entity=' . $parent)['body']);
            self::assertSame(302, $this->save(['_plugin_branding_remove_login_logo' => '1'], $child)['status']);
            self::assertSame(file_get_contents($fixture), $this->request(self::FRONT . 'image.php?field=login_logo&branding_entity=' . $child)['body']);
        } finally {
            foreach (array_reverse($entities) as $id) {
                foreach (PluginBrandingConfig::FIELDS as $field) {
                    PluginBrandingConfig::removeField($id, $field);
                }
                $DB->delete(PluginBrandingConfig::getTable(), ['entities_id' => $id]);
                $DB->delete('glpi_entities', ['id' => $id]);
            }
            $DB->update('glpi_entities', ['sons_cache' => null], ['id' => 0]);
            (new \Glpi\Cache\CacheManager())->getCoreCacheInstance()->delete('sons_cache_glpi_entities_0');
            unlink($fixture);
        }
    }

    public function testAnonymousEndpointsAndAccessRestrictions(): void
    {
        $css = $this->request(self::FRONT . 'login.css.php');
        self::assertSame(200, $css['status']);
        self::assertStringContainsString('text/css', $css['headers']);
        self::assertStringContainsString('no-store', $css['headers']);
        $script = $this->request('/plugins/branding/js/login.js');
        self::assertSame(200, $script['status']);
        self::assertStringContainsString('javascript', $script['headers']);
        self::assertStringContainsString('branding_entity', $script['body']);
        self::assertSame(404, $this->request(self::FRONT . 'image.php?field=invalid')['status']);
        self::assertContains($this->request(self::FRONT . 'menu.css.php')['status'], [302, 403]);
        self::assertContains($this->request(self::FRONT . 'image.php?field=logo_expanded')['status'], [302, 403]);
        self::assertContains($this->request(self::FRONT . 'entity.form.php', ['entities_id' => '0', 'update' => '1'])['status'], [302, 403]);
    }

    public function testMultipartUploadReplacementRemovalAndCsrf(): void
    {
        // Require an empty root branding fixture, so this suite can never
        // overwrite a tester's existing images. All created files are removed.
        self::assertSame(array_fill_keys(PluginBrandingConfig::FIELDS, null), PluginBrandingConfig::getRowForEntity(0));
        $page = $this->request('/');
        $login = $this->request('/front/login.php', [
            'login_name' => TU_USER, 'login_password' => TU_PASS, 'auth' => 'local',
            '_glpi_csrf_token' => $this->token($page['body']),
        ]);
        self::assertSame(302, $login['status']);
        $central = $this->request('/front/central.php');
        $crawler = new Symfony\Component\DomCrawler\Crawler($central['body']);
        self::assertSame(302, $this->request('/Session/ChangeEntity', [
            'id' => '0', 'is_recursive' => '1',
            '_glpi_csrf_token' => $crawler->filter('meta[property="glpi:csrf_token"]')->attr('content'),
        ])['status']);
        $source = GLPI_ROOT . '/public/pics/logos/logo-GLPI-100-black.png';
        $invalid = tempnam(sys_get_temp_dir(), 'branding_invalid_');
        file_put_contents($invalid, '<svg onload="alert(1)"></svg>');
        try {
            $csrf = $this->request(self::FRONT . 'entity.form.php', ['entities_id' => '0', 'update' => '1']);
            self::assertSame(403, $csrf['status']);
            $uploads = [];
            foreach (PluginBrandingConfig::FIELDS as $field) {
                // A misleading extension must never be retained in storage.
                $uploads['plugin_branding_' . $field] = new CURLFile($source, 'image/png', 'logo.php');
            }
            $saved = $this->save($uploads);
            self::assertSame(302, $saved['status']);
            self::assertStringContainsString('forcetab=PluginBrandingEntity%241', $saved['headers']);
            $row = PluginBrandingConfig::getRowForEntity(0);
            foreach (PluginBrandingConfig::FIELDS as $field) {
                self::assertStringEndsWith('.png', $row[$field]);
                $image = $this->request(self::FRONT . 'image.php?field=' . $field);
                self::assertSame(200, $image['status']);
                self::assertSame(file_get_contents($source), $image['body']);
                self::assertStringContainsString('image/png', $image['headers']);
                self::assertStringContainsString('no-store', $image['headers']);
            }
            $authenticated = $this->client;
            $this->client = curl_init();
            curl_setopt_array($this->client, [CURLOPT_RETURNTRANSFER => true, CURLOPT_HEADER => true, CURLOPT_TIMEOUT => 15]);
            foreach (['login_logo', 'login_background'] as $field) {
                $public = $this->request(self::FRONT . 'image.php?field=' . $field);
                self::assertSame(200, $public['status']);
                self::assertSame(file_get_contents($source), $public['body']);
            }
            $this->client = $authenticated;
            $css = $this->request(self::FRONT . 'menu.css.php');
            self::assertStringContainsString('@media (min-width: 992px)', $css['body']);
            self::assertStringContainsString('&v=', $css['body']);
            self::assertStringNotContainsString('&amp;', $css['body']);

            // Failed replacements (also checked Remove) keep the prior image.
            self::assertSame(302, $this->save([
                'plugin_branding_login_logo' => new CURLFile($invalid, 'image/png', 'fake.png'),
                '_plugin_branding_remove_login_logo' => '1',
            ])['status']);
            self::assertSame($row, PluginBrandingConfig::getRowForEntity(0));
            self::assertFileExists(PluginBrandingConfig::getImagePath(0, $row['login_logo']));

            self::assertSame(302, $this->save(['plugin_branding_login_logo' => new CURLFile($source, 'image/png', 'new.png')])['status']);
            $new = PluginBrandingConfig::getRowForEntity(0)['login_logo'];
            self::assertNotSame($row['login_logo'], $new);
            self::assertFileDoesNotExist(PluginBrandingConfig::getImagePath(0, $row['login_logo']));
            self::assertSame(302, $this->save(['_plugin_branding_remove_login_logo' => '1'])['status']);
            self::assertNull(PluginBrandingConfig::getRowForEntity(0)['login_logo']);
            self::assertFileDoesNotExist(PluginBrandingConfig::getImagePath(0, $new));
            self::assertSame(404, $this->request(self::FRONT . 'image.php?field=login_logo')['status']);

            // Exercise every supported raster format through actual PHP uploads.
            $canvas = imagecreatetruecolor(2, 2);
            foreach (['jpeg' => 'jpg', 'gif' => 'gif', 'bmp' => 'bmp', 'webp' => 'webp'] as $format => $ext) {
                $encode = 'image' . $format;
                $encode($canvas, $invalid);
                self::assertSame(302, $this->save(['plugin_branding_login_logo' => new CURLFile($invalid, 'application/octet-stream', 'no-extension')])['status']);
                self::assertStringEndsWith('.' . $ext, PluginBrandingConfig::getRowForEntity(0)['login_logo']);
                self::assertSame(file_get_contents($invalid), $this->request(self::FRONT . 'image.php?field=login_logo')['body']);
            }
            imagedestroy($canvas);
            $before = PluginBrandingConfig::getRowForEntity(0);
            self::assertSame(400, $this->save(['entities_id' => '-1'])['status']);
            self::assertSame($before, PluginBrandingConfig::getRowForEntity(0));
        } finally {
            foreach (PluginBrandingConfig::FIELDS as $field) {
                PluginBrandingConfig::removeField(0, $field);
            }
            unlink($invalid);
        }
    }
}
