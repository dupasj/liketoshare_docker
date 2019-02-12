FROM ubuntu:latest

ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update -y
RUN apt-get upgrade -y

RUN apt-get install -y --no-install-recommends php
RUN apt-get install -y --no-install-recommends php-curl
RUN apt-get install -y --no-install-recommends php-gd
RUN apt-get install -y --no-install-recommends php-json
RUN apt-get install -y --no-install-recommends php-mbstring
RUN apt-get install -y --no-install-recommends php-pdo
RUN apt-get install -y --no-install-recommends php-mysql
RUN apt-get install -y --no-install-recommends php-xml
RUN apt-get install -y --no-install-recommends php-fpm
RUN apt-get install -y --no-install-recommends php-zip

EXPOSE 9000