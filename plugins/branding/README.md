# Branding

GLPI plugin for **per-entity visual branding**: login background, login logo, and main menu logos (expanded and collapsed).

> If you use the [GLPI plugins collection](../README.md) repository layout, copy **only** the `branding` folder into GLPI’s `plugins/` or `marketplace/` directory.

## Requirements

- GLPI 10.0.0 or higher
- PHP 8.1 or higher
- Writable `files/_plugins` (GLPI file storage for plugin uploads)

## Installation

1. Copy the `branding` directory to `plugins/branding` (or `marketplace/branding`) on your GLPI server.
2. In GLPI: **Setup** → **Plugins** → install and enable **Branding**.

### Upgrade from 1.0.x

After upgrading plugin files, open **Setup** → **Plugins** and run **Upgrade** on Branding, then enable it. Disabling and enabling alone does not run schema migrations (e.g. adding the `login_logo` column).

## Configuration

1. **Administration** → **Entities** → select an entity → tab **Branding**.
2. Upload or remove images, then **Save**.

The anonymous login page always uses the root entity (ID `0`), because no user entity is selected before authentication. Menu images use the active entity, then its nearest configured parent, up to the root. Missing files are skipped. Removing an image restores this inheritance.

PNG, JPEG, GIF, BMP and WebP are supported. File contents determine the stored extension; SVG and other formats are rejected. PHP's `upload_max_filesize` and `post_max_size` limits still apply. A failed replacement keeps the previous image and displays an error. Images and styles are refreshed after saving or changing the active entity.

If another appearance plugin (such as ST-Custom Login) configures the same images, its styles may override Branding. Configure those images in a single plugin.

## Usage

| Setting | Effect |
|---------|--------|
| **Login page background** | Full-page image behind the authentication screen. |
| **Login page logo** | Image above the login form, replacing the default GLPI mark. |
| **Main menu logo (expanded)** | Replaces the default GLPI logo when the sidebar is expanded. |
| **Main menu logo (collapsed)** | Replaces the compact logo when the menu is collapsed. |

Uploaded files are stored under:

```text
files/_plugins/branding/{entities_id}/
```

## Layout

```
branding/
├── setup.php
├── hook.php
├── README.md
├── inc/
│   ├── config.class.php
│   └── entity.class.php
└── front/
    ├── entity.form.php
    ├── image.php
    ├── login.css.php
    └── menu.css.php
```

## License

GPL v3+

## Tests

Run from the GLPI root, using GLPI's dedicated **testing** database (`tests/config/config_db.php`, as described in `tests/README.md`):

```sh
php vendor/bin/parallel-lint plugins/branding
php vendor/bin/phpunit plugins/branding/tests/BrandingTest.php
```

For real HTTP/multipart, CSRF and authentication tests, install and enable Branding in that testing database. The root entity must have no configured Branding images; the HTTP suite refuses to overwrite existing images and removes its own uploads afterward. Start the isolated test server:

```sh
php -S 127.0.0.1:18811 -t public plugins/branding/tests/router.php
```

In another terminal:

```sh
BRANDING_TEST_URL=http://127.0.0.1:18811 php vendor/bin/phpunit plugins/branding/tests
```

Use only that testing server URL, never a production URL. Without `BRANDING_TEST_URL`, the HTTP tests are explicitly skipped. The regression tests cover nearest-parent inheritance, removal, missing files, invalid paths, upload failure preservation, all five raster formats, replacement, public login images, restricted menu images and CSRF rejection.
