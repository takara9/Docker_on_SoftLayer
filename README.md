Docker_on_SoftLayer
===================

Dockerfiles for Sample Container

##Dockerのコンテナで水平分散クラスタを構築する

###フォルダの説明

HAProxy  負荷分散と可用性のためのプロキシサーバーで、Apache httpd サーバーの前段
Apache2  HTTPサーバーとPHP5の実行環境、MySQLと連動する簡単なサンプルアプリ
MySQL2   サンプルデータベースをPHP5のアプリに提供


上記のフォルダーの下には、*Makefile*があり、以下の*make*のオプションが使えます  

make build このフォルダのDockerfileからコンテナをビルド  
make start このフォルダのコンテナを起動  
make stop  稼動中のすべてのコンテナを停止  
make clean1 すべての終了したコンテナを削除  
make clean2 このフォルダのコンテナイメージを削除  

###実行までの手順

####MySQLサーバーの起動
1. cd MySQL2
2. make build
3. make start

####Apache2サーバーの起動
1. cd Apache2
2. make build
3. make start これで２つのコンテナが起動します。

####HAProxyの起動
1. cd HAProxy
2. make build
3. make start
4. ufw allow 9080 ファイアウォールの設定で、TCP 9080ポートを開放してください

####一括起動
1. make all
2. make start

####一括停止
1. make stop

####一括イメージ削除
2. make clean



##SoftLayerのDocker上で、Node.js, Redis, MongoDB, MySQL, Riakを動かしてみた
リンク http://goo.gl/bkPA1m  でご紹介したコンテナ作成に使用した*Dockerfile*を収めてあります。  
NodeJs MongoDB MySQL Redis Riak  


**ここで作成したコンテナイメージは、https://index.docker.io/u/maho/ に保存されています。**

