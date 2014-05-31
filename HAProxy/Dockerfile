FROM ubuntu:latest

# packages
RUN apt-get update
RUN apt-get install -y haproxy
ADD etc/haproxy.cfg /etc/haproxy/haproxy.cfg

EXPOSE 80 

CMD ["/usr/sbin/haproxy","-f","/etc/haproxy/haproxy.cfg","-d"]
