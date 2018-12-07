


# docekrテンプレート
Apache＋php＋mysqlを用意


## 環境
| | |
| --- | ---|
| php | 7.2.* |
| MySQL | 8.0.* |
| Laravel | 5.6.* |
| WEB 文字コード | UTF-8 |
| MySQL 文字コード | utf8mb4_general_ci |



## ディレクトリ構成

```
/
　├ docker/
　│　├ db/
　│　└ web-01/
　├ src/
　│　└ public/
　│　
　├ .gitignore
　├ docker-compose.yml
　└ README.md

```




## docker 環境

| | |
| --- | ---|
| php | 7.2.* |
| MySQL | 8.0.* |
| ip | 192.168.99.100 |
| mysql_database | database |
| mysql_user     | database |
| mysql_password | database |



### WEB
http://192.168.99.100:80

### MySQL
192.168.99.100:3306 




## dockerコマンド

### ビルド（キャッシュ未使用）
```
docker-compose build  --no-cache
```

### docker立ち上げ

```
docker-compose up -d
```

### docker削除
```
docker-compose down
```

### コンテナ内でコマンドを実行する方法

```
docker exec -it [コンテナ名] bash -c "cd /var/www/mgcs/ && ~"
```

