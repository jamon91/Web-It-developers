<?php
/**
 * Created by PhpStorm.
 * User: estudiante
 * Date: 10/04/15
 * Time: 03:47 PM
 */


     $host = "localhost";
     $port = "3306";
     $user = "root";
     $password = "hola123";
     $dbh;
     $db = "ProyectoWeb";



        try{
            //modificar el string de conexion para que funcione con su base de datos
            $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $password);

             //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 $sql = "INSERT INTO Usuario (idUsuario,Nombre,Apellidos,Estado,Password)
                 VALUES ('200','Carl','Matty','Activo','cent123')";
             // use exec() because no results are returned
             $dbh->exec($sql);
                echo "New record created successfully<br/>";

            $sql = "SELECT idUsuario,Nombre,Password FROM Usuario where Nombre ='Joel' ";

            foreach ($dbh->query($sql) as $row) {
                print  "<br>id " . $row['idUsuario'] . "\n";
                print  "cantidad " . $row['Nombre'] . "\n";
                print  "Sesion " . $row['Password'] . "\n";
            }






            $sql = 'TRUNCATE TABLE carrito';
            $dbh->query($sql);

            } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }



