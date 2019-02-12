FROM ubuntu:latest

RUN apt-get update -y
RUN apt-get upgrade -y

RUN apt-get install -y --no-install-recommends apache2
RUN apt-get install -y --no-install-recommends wget
RUN wget http://mirrors.kernel.org/ubuntu/pool/multiverse/liba/libapache-mod-fastcgi/libapache2-mod-fastcgi_2.4.7~0910052141-1.2_amd64.deb
RUN dpkg -i libapache2-mod-fastcgi_2.4.7~0910052141-1.2_amd64.deb
RUN apt-get install -f -y

COPY ./apache.conf /usr/local/apache2/conf/httpd.conf

RUN a2enmod proxy_fcgi setenvif

EXPOSE 80
CMD /usr/local/bin/