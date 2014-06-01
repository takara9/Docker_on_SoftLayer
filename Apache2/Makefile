IMAGE_NAME=maho/apache2
DOCKERFILE=Dockerfile.apache2_fg

build:
	rm -f Dockerfile
	ln -s $(DOCKERFILE) Dockerfile
	docker build -t $(IMAGE_NAME) .

start:
	docker run --name web1 --link mysql:db -d -p 8081:80 $(IMAGE_NAME)
	docker run --name web2 --link mysql:db -d -p 8082:80 $(IMAGE_NAME)
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
	rm -f Dockerfile

push:
	docker push $(IMAGE_NAME)