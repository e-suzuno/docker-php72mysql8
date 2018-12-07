


CREATE USER 'database'@'localhost' IDENTIFIED WITH mysql_native_password BY 'database';

GRANT ALL PRIVILEGES ON *.* TO 'database'@'localhost' WITH GRANT OPTION;
CREATE USER 'database'@'%' IDENTIFIED WITH mysql_native_password BY 'database';
GRANT ALL PRIVILEGES ON *.* TO 'database'@'%' WITH GRANT OPTION;
CREATE DATABASE IF NOT EXISTS `database` COLLATE 'utf8mb4_general_ci' ;

GRANT ALL ON `database`.* TO 'database'@'%' ;
FLUSH PRIVILEGES ;
