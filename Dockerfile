# Simple Dockerfile to run this PHP site using Apache
FROM php:8.1-apache

# Copy project files into the web root
COPY . /var/www/html/

# Ensure ownership
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
