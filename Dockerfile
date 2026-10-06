FROM composer:2 AS composer
FROM node:22-bookworm-slim AS node

FROM php:8.4-apache AS glpi-base

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libavif-dev \
        libcurl4-openssl-dev \
        libfreetype6-dev \
        libicu-dev \
        libjpeg62-turbo-dev \
        libldap2-dev \
        libsasl2-dev \
        libonig-dev \
        libpng-dev \
        libwebp-dev \
        libxml2-dev \
        libzip-dev \
    && docker-php-ext-configure gd --with-avif --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-configure ldap --with-ldap-sasl \
    && docker-php-ext-install -j"$(nproc)" bcmath curl exif gd intl ldap mbstring mysqli opcache zip \
    && a2enmod headers rewrite \
    && sed -ri 's!/var/www/html!/var/www/glpi/public!g' /etc/apache2/sites-available/000-default.conf \
    && printf '%s\n' '<Directory /var/www/glpi/public>' '    AllowOverride None' '    Require all granted' '    RewriteEngine On' '    RewriteCond %{REQUEST_FILENAME} !-f' '    RewriteRule ^ index.php [QSA,L]' '</Directory>' > /etc/apache2/conf-available/glpi.conf \
    && a2enconf glpi \
    && rm -rf /var/lib/apt/lists/*

FROM glpi-base AS build

RUN apt-get update \
    && apt-get install -y --no-install-recommends build-essential gettext git patch python3 unzip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer /usr/bin/composer /usr/local/bin/composer
COPY --from=node /usr/local/bin/node /usr/local/bin/node
COPY --from=node /usr/local/bin/npm /usr/local/bin/npm
COPY --from=node /usr/local/bin/npx /usr/local/bin/npx
COPY --from=node /usr/local/lib/node_modules/npm /usr/local/lib/node_modules/npm

WORKDIR /var/www/glpi
COPY . .

RUN mkdir -p config files marketplace plugins \
    && php bin/console dependencies install --allow-superuser \
    && composer install --no-dev --no-interaction --no-progress --prefer-dist --optimize-autoloader \
    && rm -rf node_modules

FROM glpi-base AS runtime

WORKDIR /var/www/glpi
COPY --from=build /var/www/glpi /var/www/glpi

RUN mkdir -p config files marketplace plugins \
    && chown -R www-data:www-data config files marketplace plugins

VOLUME ["/var/www/glpi/config", "/var/www/glpi/files", "/var/www/glpi/marketplace", "/var/www/glpi/plugins"]

EXPOSE 80
