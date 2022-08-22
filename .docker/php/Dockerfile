FROM php:8.1-fpm

COPY php.ini /usr/local/etc/php/

RUN apt update && apt install -y libicu-dev
RUN docker-php-ext-install \
    intl \
    pdo_mysql

WORKDIR /var/www/project
