# DEV
FROM php:8.2-fpm AS development

# RUN system depedencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

RUN docker-php-ext-install pdo_mysql mysqli && docker-php-ext-enable mysqli pdo_mysql

#Working directory
WORKDIR /var/www/html

# Copy app
COPY ./app ./

# Clean cache
RUN php bin/console cache:clear

# PREPROD
FROM php:8.2-fpm AS preprod

# RUN system depedencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

RUN docker-php-ext-install pdo_mysql mysqli && docker-php-ext-enable mysqli pdo_mysql

#Working directory
WORKDIR /var/www/html

# Copy app
COPY ./app ./

# Clean cache
RUN php bin/console cache:clear
