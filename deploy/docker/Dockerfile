FROM php:8.4-fpm-alpine

RUN apk add --no-cache nginx supervisor redis postgresql-dev libpng-dev libzip-dev
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql gd zip bcmath

WORKDIR /var/www/html
COPY . /var/www/html

EXPOSE 80 9000
CMD [supervisord, -c, /var/www/html/deploy/docker/supervisord.conf]
