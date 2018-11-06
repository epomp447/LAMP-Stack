# LAMP-Stack

LAMP Stands for Linux, Apache, MySQL and PHP.

In this case I will be using a Rasperry Pi to run a basic Web Server with a backend database and a user login system. 

Prereq:
1. MySQL
2. Apache 2.0
3. PHP 7.0



Setup and configuration of web/database client/server data exchange using an isolated network of several Raspberry Pi computers running 
Wheezy (Linux). By Installing Apache, MySQL, PHP, as well as WireShark, which is a packet analyzer. My goal was to monitor HTTP and HTTPS 
traffic between computers and better understand the nature of SQL injection attacks. In this experiment, I gained a better understanding 
of the role of cryptography (symmetric and asymmetric) for information hiding. By Installing a certificate in Apache to enable HTTPS, 
WireShark analysis illustrates the importance of password protection in MySQL using hashing algorithms such MD or SHA. 

Steps

sudo apt install apache2

sudo chown -R pi:www-data /var/www/html/
sudo chmod -R 770 /var/www/html/

sudo apt install php php-mbstring

sudo rm /var/www/html/index.html

echo "<?php phpinfo ();?>" > /var/www/html/index.php


sudo apt install mysql-server php-mysql

sudo mysql --user=root

DROP USER 'root'@'localhost';
CREATE USER 'root'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost'

sudo apt install phpmyadmin

--optional if http://127.0.0.1/phpmyadmin shows error

--sudo ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin



https://howtoraspberrypi.com/how-to-install-web-server-raspberry-pi-lamp/
