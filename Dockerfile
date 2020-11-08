FROM php:7.4-fpm-alpine

ENV DIR=/var/www/html

WORKDIR ${DIR}

RUN docker-php-ext-install pdo pdo_mysql
