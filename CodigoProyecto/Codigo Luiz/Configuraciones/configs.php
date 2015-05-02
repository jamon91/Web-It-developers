<?php

$maquina="prueba1";
$archivo="prueba2.sh";
date_default_timezone_set("America/Costa_Rica");
$binBash = "#!/usr/bin/env bash";
$d1='$OLD_HOSTNAME';
$d2='$NEW_HOSTNAME';
$pwd="hola123";
$dbname="prueba1";
$dbuser="josito";
$fusion='$sql';

$comando1="export OLD_HOSTNAME="."\"$(hostname)\"";
$comando2="export NEW_HOSTNAME="."$maquina";
$comando3="hostname"." \""."\$NEW_HOSTNAME\"";
$comando4="sed -i "."\"s/HOSTNAME=.*/HOSTNAME="."\$NEW_HOSTNAME/g\""." /etc/hostname";
$comando5="sed -i "."\"s/$d1/$d2/g\""." /etc/hosts";
$comando6="S1="."\"CREATE DATABASE IF NOT EXISTS"." ".$dbname.";\"";
$comando7="S2="."\"GRANT ALL ON *.* TO"." "."'$dbuser'"."@"."'localhost'"." "."IDENTIFIED BY"." "."'$pwd'".";\"";
$comando8="S3=\"FLUSH PRIVILEGES;\"";
$comando9="sql="."\""."$"."{S1}"."$"."{S2}"."$"."{S3}"."\"";
$comando10="mysql -uroot -phola123 -e \"$fusion\"" ; ;
$comando11="/home/webitdevelopers/Descargas/Unicenta/configure.sh";
$ejecutable = fopen("$archivo","w");
fwrite($ejecutable,$binBash."\n");
fwrite($ejecutable,$comando1."\n");
fwrite($ejecutable,$comando2."\n");
fwrite($ejecutable,$comando3."\n");
fwrite($ejecutable,$comando4."\n");
fwrite($ejecutable,$comando5."\n");
fwrite($ejecutable,$comando6."\n");
fwrite($ejecutable,$comando7."\n");
fwrite($ejecutable,$comando8."\n");
fwrite($ejecutable,$comando9."\n");
fwrite($ejecutable,$comando10."\n");
fwrite($ejecutable,$comando11."\n");
fclose($ejecutable);