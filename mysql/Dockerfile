FROM ubuntu:latest

RUN apt-get update -y
RUN apt-get upgrade -y

RUN echo "mysql-server-5.5 mysql-server/root_password password ${MYSQL_ROOT_PASSWORD}" | debconf-set-selections
RUN echo "mysql-server-5.5 mysql-server/root_password_again password ${MYSQL_ROOT_PASSWORD}" | debconf-set-selections

RUN apt-get install -y --no-install-recommends mysql-server

RUN /etc/init.d/mysql start
RUN chown -R mysql:mysql /var/lib/mysql

EXPOSE 3306

CMD mysql start