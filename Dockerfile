FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

# Force correct MPM configuration
RUN a2dismod mpm_event || true \
 && a2dismod mpm_worker || true \
 && a2enmod mpm_prefork

RUN a2enmod rewrite

COPY . /var/www/html/
