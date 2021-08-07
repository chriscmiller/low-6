FROM php:8.0-fpm
WORKDIR /var/www/vhost/
RUN apt-get clean && apt-get update && apt-get upgrade -y && apt-get install -y \
    git \
    libcurl4-openssl-dev \
    libonig-dev \
    libpng-dev \
    libssl-dev \
    libxml2-dev \
    libzip-dev \
    unzip \
    wget \
    zip
RUN docker-php-ext-install \
    bcmath \
    ctype \
    gd \
    mbstring \
    mysqli \
    opcache \
    pdo_mysql \
    pcntl \
    tokenizer \
    xml \
    zip
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
