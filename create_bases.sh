#!/bin/bash

service mysql restart

# Configure a wordpress database
#create database
echo "CREATE DATABASE wp_schaya;"| mysql -u root 
#create user and password and give rights
echo "GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP,ALTER ON wp_schaya.* TO 'schaya'@'localhost' IDENTIFIED BY 'school21';"| mysql -u root 
#reboot privileges
echo "FLUSH PRIVILEGES;"| mysql -u root 

#create superuser
echo "GRANT ALL PRIVILEGES ON *.* TO 'pma'@'localhost' IDENTIFIED BY 'admin';"| mysql -u root 
echo "FLUSH PRIVILEGES;"| mysql -u root 

#bash