# Basis image met PHP en Apache
FROM php:8.4-apache

# Installeren van vereiste PHP-extensies
RUN docker-php-ext-install pdo pdo_mysql mbstring

# Kopieer de Laravel bestanden naar de container
COPY . /var/www/html

# Instellen van de juiste rechten
RUN chown -R www-data:www-data /var/www/html

# Expose de poort waarop de applicatie draait
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
