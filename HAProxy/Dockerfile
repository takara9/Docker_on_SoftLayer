FROM ubuntu:latest

# packages
RUN apt-get update
RUN apt-get install -y haproxy
ADD etc/haproxy.cfg /etc/haproxy/haproxy.cfg
ADD shell/HAProxy_FG /usr/local/bin/HAProxy_FG

EXPOSE 80 

CMD [ "/usr/local/bin/HAProxy_FG" ]
