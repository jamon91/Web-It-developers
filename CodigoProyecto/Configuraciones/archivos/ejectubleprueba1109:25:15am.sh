host=$(cat /etc/hostname)
newhost=prueba11
export newhost
Q1=CREATE DATABASE IF NOT EXISTS BDprueba11;
Q2=GRANT ALL ON *.* TO  'Userprueba11'@localhost IDENTIFIED BY 'hola123';
Q3=FLUSH PRIVILEGES;
export query=${Q1}${Q2}${Q3}
sed -i "s/$host/$newhost/g" /etc/hosts
sed -i "s/$host/$newhost/g" /etc/hostname
mysql -uroot -phola123 -e "$query"
/unicenta/configure.sh
