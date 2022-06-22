FROM php:8.1-fpm

RUN docker-php-ext-install pdo_mysql && curl -sS https://get.symfony.com/cli/installer | php -- --install-dir=/usr/local/bin --filename=symfony | bash
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer