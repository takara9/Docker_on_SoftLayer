IMAGE_NAME=maho/mysql2

DOCKERFILE=Dockerfile.centos
PORTCONF=-p 13306:3306

#DOCKERFILE=Dockerfile.ubuntu
#PORTCONF=-p 13306:3306 -p 10022:22

build:
	rm -f Dockerfile
	ln -s $(DOCKERFILE) Dockerfile
	docker build -t $(IMAGE_NAME) .

start:
	docker run --name mysql -d $(PORTCONF) $(IMAGE_NAME)
	docker ps $(IMAGE_NAME)

stop:
	docker stop $(shell docker ps -q -s)

status:
	docker ps $(IMAGE_NAME)


clean1:
	docker ps $(IMAGE_NAME)
	docker rm $(shell docker ps -a -s -q)

clean2:
	docker images $(IMAGE_NAME)
	docker rmi $(IMAGE_NAME)
	rm -f Dockerfile

push:
	docker push $(IMAGE_NAME)