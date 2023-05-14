FROM php:7.4-apache

# Install MySQL client and other dependencies
RUN apt-get update && apt-get install -y \
    default-mysql-client \
    && docker-php-ext-install pdo_mysql mysqli

# Copy your PHP application files to the container
COPY src/ /var/www/html/

# Expose port 80 for the web server
EXPOSE 80

# Start the Apache web server
CMD ["apache2-foreground"]
