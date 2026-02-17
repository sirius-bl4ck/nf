FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite

# Make sure only prefork MPM is active
RUN a2dismod mpm_event || true
RUN a2dismod mpm_worker || true
# RUN a2enmod mpm_prefork

COPY . /var/www/html/
