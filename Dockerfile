FROM php:8.1-fpm

# 安装所需的依赖包和扩展
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    vim \
    bash

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# 安装 Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 设置工作目录
WORKDIR /var/www/html

# 复制 Laravel 项目文件到容器中并安装依赖
COPY . /var/www/html
RUN composer install --no-ansi --no-interaction --no-scripts --no-progress --prefer-dist

#RUN composer install --no-ansi --no-interaction --no-scripts --no-progress --prefer-dist -vvv


# 设置文件和目录的权限
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage
