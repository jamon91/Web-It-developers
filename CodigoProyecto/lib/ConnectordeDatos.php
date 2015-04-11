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
            self:: $dbh = new PDO("mysql:host=self::$host;dbname= self::$db", self::$user, self::$password);
            echo "Success";


        } catch (PDOException $e) {
            echo $e->getTraceAsString();
            print "Error!: " .
            echo $e->getMessage(); . "<br/>";
            die();
        }
    }

    public static function registrarUsuario($id,$idAdmin,$nombre,$apellido,$email,$password,$estado,$tipoUsuario){
            self::abrirConexion();
             $sql = "INSERT INTO Usuario (idUsuario,idAdmin,Nombre,Apellidos,Email,Password,Estado,TipoUsuario)
                     VALUES ('$id','$idAdmin','$nombre','$apellido','$email','$password','$estado','$estado','$tipoUsuario')";

            self::ejecutarQuery($sql);
    }

    public  static function buscarUsuario($id){
        $sql= 'SELECT nombre , apellido FROM Usuario WHERE idUsuario="$id"';
        self::ejecutarQuery($sql);
    }

    public static function modificarUsuario($id,$estado,$tipoUsuario){
        $sql =   "UPDATE Usuario.
                  SET Estado = '$estado' , TipoUsuario = '$tipoUsuario'.
                  WHERE idUsuario= $id";


            self::ejecutarQuery($sql);
    }

    public static function ejecutarQuery($sql)
    {

        $dbh->query($sql);
        return echo "Solicitud ejecutada exitosmente";

    }


    function getMarca($dbh)
    {
        $sql = 'SELECT id_marca , nombre FROM marca';
        foreach ($dbh->query($sql) as $row) {
            print $row['ID'] . "\t";
            print $row['nombre'] . "\n";

        }
    }
}

    ?>
