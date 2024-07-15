FROM php:8.0-apache
# Install MySQL extension
RUN docker-php-ext-install mysqli

# Copy Apache configuration
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Copy project files
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Enable Apache mod_rewrite
RUN a2enmod rewrite
