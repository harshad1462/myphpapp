# Base image with PHP and Apache
FROM php:8.2-apache

# Set the working directory
WORKDIR /var/www/html

# Copy application files to the container
COPY ./index.php /var/www/html/

# Enable Apache mod_rewrite (optional, for more complex apps)
RUN a2enmod rewrite

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
