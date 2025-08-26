# https://hub.docker.com/_/php
FROM php:8.4.11-fpm

# タイムゾーンを日本にする
ENV TZ=Asia/Tokyo

RUN apt update

# Composer システム要件
# https://getcomposer.org/doc/00-intro.md#system-requirements
RUN apt install -y libzip-dev zip unzip
RUN docker-php-ext-configure zip
RUN docker-php-ext-install zip

# CakePHP システム要件
# https://book.cakephp.org/5/ja/installation.html

# https://www.php.net/manual/ja/mbstring.installation.php
RUN apt install -y libonig-dev
RUN docker-php-ext-install mbstring

# https://www.php.net/manual/ja/intl.requirements.php
RUN apt install -y libicu-dev
RUN docker-php-ext-install intl

# https://www.php.net/manual/ja/simplexml.requirements.php
RUN apt install -y libxml2-dev
RUN docker-php-ext-install simplexml

# MySQL へ DB 保存する拡張機能
RUN docker-php-ext-install pdo_mysql

# デバッグ実行できるようにする
# https://xdebug.org/docs/install#pecl
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

WORKDIR /src
