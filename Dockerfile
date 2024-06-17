FROM php:8.3-apache

RUN apt-get update && apt-get install -y --no-install-recommends libxml2=2.9.14+dfsg-1.3~deb12u1 libxslt1-dev=1.1.35-1 \
  && docker-php-ext-install xml xsl \
  && a2enmod rewrite \
  && rm -rf /var/lib/apt/lists/*
