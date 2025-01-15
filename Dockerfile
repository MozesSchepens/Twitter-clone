# Gebruik de officiële PHP 8 image met Apache
FROM php:8.1-apache

# Installeer vereiste PHP-extensies
RUN docker-php-ext-install pdo pdo_mysql

# Zorg ervoor dat Composer geïnstalleerd wordt
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Kopieer alle bestanden van het project naar de container
COPY . /var/www/html

# Stel de werkdirectory in
WORKDIR /var/www/html

# Zorg ervoor dat de juiste rechten zijn ingesteld
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

# Exposeer poort 80
EXPOSE 80

# Start de Apache-server
CMD ["apache2-foreground"]
