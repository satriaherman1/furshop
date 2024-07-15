# Gunakan image PHP dengan Apache
FROM php:8.1-apache

# Install ekstensi yang diperlukan
RUN docker-php-ext-install pdo pdo_mysql

# Salin semua file ke dalam kontainer
COPY . /var/www/html/

# Set hak akses
RUN chown -R www-data:www-data /var/www/html
