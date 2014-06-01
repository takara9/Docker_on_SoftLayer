Docker_on_SoftLayer
===================

Dockerfiles for Sample Container

**Dockerのコンテナで水平分散クラスタを構築する**  


HAProxy  
Apache2  
MySQL2  

上記のフォルダーの下には、*Makefile*があり、以下の*make*のオプションが使えます  

make build このフォルダのDockerfileからコンテナをビルド  
make start このフォルダのコンテナを起動  
make stop  稼動中のすべてのコンテナを停止  
make clean1 すべての終了したコンテナを削除  
make clean2 このフォルダのコンテナイメージを削除  



**SoftLayerのDocker上で、Node.js, Redis, MongoDB, MySQL, Riakを動かしてみた**  
リンク http://goo.gl/bkPA1m  でご紹介したコンテナ作成に使用した*Dockerfile*を収めてあります。  
NodeJs MongoDB MySQL Redis Riak  


