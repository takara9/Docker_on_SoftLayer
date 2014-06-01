IMAGE_NAME=maho/haproxy
DOCKERFILE=Dockerfile

build:
	docker build -t $(IMAGE_NAME) .

start:
	docker run --link web1:w1 --link web2:w2 -d -p 9080:80 $(IMAGE_NAME)
	docker ps $(IMAGE_NAME)

stop:
	docker stop $(shell docker ps -q -s $(IMAGE_NAME))

status:
	docker ps $(IMAGE_NAME)

clean1:
	docker ps $(IMAGE_NAME)
	docker rm $(shell docker ps -a -s -q)

clean2:	
	docker images $(IMAGE_NAME)
	docker rmi $(IMAGE_NAME)

push:
	docker push $(IMAGE_NAME)
