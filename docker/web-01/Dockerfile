FROM php:7.2-apache
COPY ./php.ini /usr/local/etc/php/

# rewriteモジュールを有効化
RUN a2enmod rewrite


# install
RUN apt-get update && apt-get install -y --fix-missing \
    xz-utils \
    build-essential \
    pkg-config \
    git-core \
    autoconf \
    libjpeg62-turbo-dev \
    libsodium-dev \
    libpng-dev \
    libcurl4-openssl-dev \
    libpq-dev \
    libpspell-dev \
    libsqlite3-dev \
    libmagickwand-dev \
    libzip-dev \
    imagemagick \
    g++ \
    curl \
    vim \
    wget \
    gnupg \
    netcat \
    chrpath

RUN docker-php-ext-install \
    iconv \
    -j$(nproc) sodium \
    opcache \
    curl \
    gd \
    mysqli \
    pdo \
    pdo_pgsql \
    pdo_mysql \
    pdo_sqlite \
    pspell \
    pgsql \
    soap \
    zip \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install zip


# install node
RUN curl -sL https://deb.nodesource.com/setup_10.x -o nodesource_setup.sh
RUN bash nodesource_setup.sh
RUN apt-get install nodejs -y
RUN npm -g install n
RUN n --version
RUN n stable
RUN nodejs -v && node -v && npm -v


# composer
WORKDIR /tmp
RUN wget https://getcomposer.org/composer.phar
RUN mv composer.phar /bin/composer
RUN chmod 700 /bin/composer

# clean
RUN apt-get clean
RUN apt-get autoremove -y
RUN rm -rf /tmp/* /var/tmp/*

RUN usermod -u 1000 www-data
RUN usermod -G staff www-data

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
