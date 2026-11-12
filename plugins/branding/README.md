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

Open **Entity login page** in the Branding tab to use that entity's login background and logo. Share this URL with its users, for example `/index.php?branding_entity=1` for entity `1` (include your GLPI installation's URL prefix). The general login without this parameter uses the root entity (ID `0`). The link controls appearance only: authentication, permissions and the user's active entity are still managed by GLPI. Invalid or unknown entity IDs fall back to the root.

Login images and menu images inherit from the nearest configured parent, up to the root. Menu images use the authenticated user's active entity. Missing files are skipped. Removing an image restores this inheritance. The entity context is included in image URLs, so different entity login pages can be open in separate browser tabs. With JavaScript enabled, failed login and retry preserve the entity link.

PNG, JPEG, GIF, BMP and WebP are supported. File contents determine the stored extension; SVG and other formats are rejected. PHP's `upload_max_filesize` and `post_max_size` limits still apply. A failed replacement keeps the previous image and displays an error. Images and styles are refreshed after saving or changing the active entity.

Configured Branding login images take priority over ST-Custom Login's background and logo. Other ST-Custom Login settings remain available. Menu logos configured in both plugins may conflict; configure those in a single plugin.

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
├── public/
│   └── js/login.js
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

For browser coverage, with `agent-browser` and Chromium installed, run against the same testing server after the PHP tests finish:

```sh
BRANDING_TEST_URL=http://127.0.0.1:18811 python3 plugins/branding/tests/run_browser_tests.py
```

This creates disposable entities in the testing database, uploads through the real form, checks menu logos, entity login images, inheritance, isolation, mobile rendering, ST-Custom Login CSS conflicts, failed-login retry and successful authentication. The script removes its entities and uploads in `finally` and prints the screenshot directory. Do not run database suites concurrently.
