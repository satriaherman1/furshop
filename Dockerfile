# Gunakan image PHP dengan Apache
FROM php:8.1-apache

# Aktifkan mod_rewrite
RUN a2enmod rewrite

# Install ekstensi yang diperlukan
RUN docker-php-ext-install pdo pdo_mysql

# Salin semua file ke dalam kontainer
COPY . /var/www/html/

# Set hak akses
RUN chown -R www-data:www-data /var/www/html

# Salin konfigurasi Apache
COPY ./apache.conf /etc/apache2/sites-available/000-default.conf
