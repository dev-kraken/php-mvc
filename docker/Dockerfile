FROM php:8.2-fpm

# Update package lists and install necessary dependencies
RUN apt-get update && \
    apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    && apt-get clean

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PDO MySQL extension
RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www
