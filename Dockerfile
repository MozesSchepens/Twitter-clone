FROM php:8.2-fpm

WORKDIR /var/www

# Installeer benodigde extensies
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql opcache

# Installeer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Kopieer projectbestanden
COPY . /var/www

# Rechten instellen
RUN chown -R www-data:www-data /var/www

EXPOSE 9000
CMD ["php-fpm"]
