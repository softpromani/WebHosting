# Use PHP 8 with Apache
FROM php:8.1-apache


# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the application files to the container
COPY . /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage
# Suppress the Apache server name warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
# Expose port 80
EXPOSE 80
