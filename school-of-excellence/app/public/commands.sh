service mysql start && mysql -u root -e "CREATE DATABASE wordpress CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;"

cp -rT /usercode/ /var/www/html/wordpress/

chmod -R 777 /var/www/html

service apache2 start