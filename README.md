


# docekrテンプレート
Apache＋php＋mysqlを用意


## 環境
| | |
| --- | ---|
| php | 7.2.* |
| MySQL | 8.0.* |
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
[phpinfo] http://192.168.99.100:80
[PDOチェック] http://192.168.99.100:80/pdo.php


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

