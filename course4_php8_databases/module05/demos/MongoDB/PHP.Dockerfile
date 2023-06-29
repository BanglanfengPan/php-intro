FROM php:7-apache

# Install the MongoDB driver
RUN apt-get update && \
    apt-get install -y libcurl4-openssl-dev pkg-config libssl-dev && \
    pecl install mongodb && \
    docker-php-ext-enable mongodb

# Enable Apache mod_rewrite
RUN a2enmod rewrite
