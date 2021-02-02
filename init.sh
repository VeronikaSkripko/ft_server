#!/bin/bash

service nginx start
service mysql start
service php7.3-fpm start

# Configure a wordpress database
#create database
echo "CREATE DATABASE wp_schaya;"| mysql -u root 
#create user and password and give rights
echo "GRANT ALL PRIVILEGES ON wp_schaya.* TO 'schaya'@'localhost' IDENTIFIED BY 'school21' WITH GRANT OPTION;"| mysql -u root 
#reboot privileges
echo "FLUSH PRIVILEGES;"| mysql -u root 

#bash