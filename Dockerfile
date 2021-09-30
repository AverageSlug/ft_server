FROM debian:buster
RUN apt-get update
RUN apt-get install -y nginx
RUN apt-get install -y php-fpm php-mysql
RUN apt-get install -y mariadb-server
RUN apt-get install -y wget

COPY srcs/ft_serv /etc/nginx/sites-available/ft_serv
RUN ln -s /etc/nginx/sites-available/ft_serv /etc/nginx/sites-enabled/
RUN unlink etc/nginx/sites-enabled/default

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.0/phpMyAdmin-5.0.0-all-languages.tar.gz
RUN tar xvf phpMyAdmin-5.0.0-all-languages.tar.gz
RUN rm phpMyAdmin-5.0.0-all-languages.tar.gz
RUN ln -s /phpMyAdmin-5.0.0-all-languages /var/www/phpmyadmin

COPY srcs/mysqlfile .
RUN service mysql start && cat mysqlfile | mariadb -u root
RUN rm mysqlfile

COPY srcs/wordpress /var/www/wordpress

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj "/C=BE/ST=Brussels/L=Brussels/O=gregchantemal/OU=gregchantemal19/commonName=nlaurids/emailAddress=greg@chante.mal" -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt
RUN openssl dhparam -out /etc/ssl/certs/dhparam.pem 2048

CMD service php7.3-fpm start && service mysql start && nginx -g "daemon off;"
