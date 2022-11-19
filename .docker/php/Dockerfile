FROM php:8.1-apache

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install libpq-dev -y

# I didn't delete composer and git because they will come in handy later on for sure

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install -j$(nproc) pdo_pgsql