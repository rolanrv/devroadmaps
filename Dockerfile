FROM php:8.2-apache

RUN apt-get update && \
    apt-get install -y libzip-dev && \
    docker-php-ext-install pdo pdo_mysql zip

RUN a2enmod rewrite

COPY ./public /var/www/html
COPY ./data /var/www/html/data

RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html