<?php

class ConectordeBD
{
    private static $host = "localhost";
    private static $port = "3306";
    private static $user = "root";
    private static $password = "hola123";
    private static $dbh;
    private static $db = "BTIC-25";


    private static function abrirConexion()
    {
        try {
            //armar String de conexion
            //modificar el string de conexion para que funcione con su base de datos
            self:: $dbh = new PDO("mysql:host=$host;dbname=$db", self::$user, self::$password);
            echo "Success";


        } catch (PDOException $e) {
            /*echo $e->getTraceAsString();
            print "Error!: " .*/
            echo $e->getMessage(); //. "<br/>";
            die();
        }
    }


    public static function ejecutarQuery($sql)
    {

        $dbh->query($sql);

    }


    function getMarca($dbh)
    {
        $sql = 'SELECT id_marca , nombre FROM marca';
        foreach ($dbh->query($sql) as $row) {
            print $row['ID'] . "\t";
            print $row['nombre'] . "\n";
            //print $row['calories'] . "\n";
        }
    }
}

    ?>
