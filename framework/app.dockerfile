FROM php:7.0-fpm
RUN apt-get update -y && apt-get install -y libmcrypt-dev \
    mysql-client libmagickwand-dev openssl zip unzip git --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install mcrypt pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . /var/www
WORKDIR /var/www
RUN chown -R www-data:www-data /var/www/
RUN composer install --no-interaction --no-progress --no-suggest --quiet
RUN php artisan conf:cache
