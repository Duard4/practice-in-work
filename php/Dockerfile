FROM php:8-fpm

WORKDIR /var/www/html

COPY . .

RUN apt-get update -y && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install mysqli

