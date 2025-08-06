# Usamos PHP 8.3 con extensiones útiles
FROM php:8.3-fpm

# Instalamos dependencias necesarias y extensiones PHP
RUN apt-get update && apt-get install -y \
    curl libpng-dev libonig-dev libxml2-dev zip unzip git \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Permisos opcionales para Laravel
RUN chown -R www-data:www-data /var/www
