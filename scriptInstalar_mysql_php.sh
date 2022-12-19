#!bin/bash

docker run -d --name dbserver.mysql -p 3306:3306 -e MYSQL_ROOT_PASSWORD=root mysql
