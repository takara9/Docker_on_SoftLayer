FROM centos:latest

RUN yum update -y
RUN yum install mysql-server.x86_64 -y
RUN /etc/rc.d/init.d/mysqld start &&\
/usr/bin/mysql -u root -e 'create database docker_db' &&\
/usr/bin/mysql -u root -e "grant all privileges on *.* to root@'%' identified by 'password' with grant option" &&\
/usr/bin/mysql -u root -e 'show databases' &&\
/usr/bin/mysqladmin -u root password 'password' &&\
service mysqld stop


EXPOSE 3306
CMD ["/usr/bin/mysqld_safe","--datadir=/var/lib/mysql","--socket=/var/lib/mysql/mysql.sock","--pid-file=/var/run/mysqld/mysqld.pid","--basedir=/usr","--user=mysql"]

