
all:
	make -C MySQL2  build
	make -C Apache2 build
	make -C HAProxy build

start:
	make -C MySQL2  start
	make -C Apache2 start
	make -C HAProxy start

stop:
	make -C HAProxy stop
	make -C HAProxy clean1

clean:
	make -C HAProxy clean2
	make -C Apache2 clean2
	make -C MySQL2  clean2

