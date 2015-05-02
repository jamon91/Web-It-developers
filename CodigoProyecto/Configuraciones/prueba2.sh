#!/usr/bin/env bash
export OLD_HOSTNAME="$(hostname)"
export NEW_HOSTNAME=prueba1
hostname "$NEW_HOSTNAME"
sed -i "s/HOSTNAME=.*/HOSTNAME=$NEW_HOSTNAME/g" /etc/hostname
sed -i "s/$OLD_HOSTNAME/$NEW_HOSTNAME/g" /etc/hosts
S1="CREATE DATABASE IF NOT EXISTS prueba1;"
S2="GRANT ALL ON *.* TO 'josito'@'localhost' IDENTIFIED BY 'hola123';"
S3="FLUSH PRIVILEGES;"
sql="${S1}${S2}${S3}"
cd /home/webitdevelopers/Descargas/Unicenta/
mysql -uroot -phola123 -e "$sql"
cd /home/webitdevelopers/Descargas/Unicenta
./configure.sh
