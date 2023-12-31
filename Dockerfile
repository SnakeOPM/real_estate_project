FROM php:8.1-fpm

LABEL authors="joly"

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt-get -y update;dpkg --configure -a ; apt-get -y install curl git zip unzip wget \
     zlib1g-dev libicu-dev libpq-dev libpng-dev \
    libzip-dev nodejs npm
RUN docker-php-ext-install pdo pdo_pgsql intl opcache gd zip
WORKDIR laravel/
COPY . .
RUN npm install && npm run build
CMD bash -c "composer install && php artisan migrate && php artisan serve --host 0.0.0.0"

