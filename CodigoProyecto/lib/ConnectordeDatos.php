<?php

class ConectordeBD
{
    private static $host = "localhost";
    private static $port = "3306";
    private static $user = "root";
    private static $password = "hola123";
    private static $dbh;
    private static $db = "ProyectoWeb";


    public static function abrirConexion()
    {
        try {

            echo "Success";
            //armar String de conexion
            //modificar el string de conexion para que funcione con su base de datos
            self:: $dbh = new PDO("mysql:host=localhost;dbname= ProyectoWeb", self::$user, self::$password);



        } catch (PDOException $e) {
            echo $e->getTraceAsString();
           /* print "Error!: " .
           echo $e->getMessage(); . "<br/>";
            die();*/
        }
    }

    /**
     * @param $id
     * @param $nombre
     * @param $apellido
     * @param $email
     * @param $tipoUsuario
     */
    public static function registrarUsuario($id,$nombre,$apellido,$email,$tipoUsuario){


        try {
            //armar String de conexion
            //modificar el string de conexion para que funcione con su base de datos
            self:: $dbh = new PDO("mysql:host=".self::$host.";dbname=".self::$db, self::$user, self::$password);


           // $sql = "INSERT INTO Usuario (idUsuario,Nombre,Apellidos,Estado,Password)
            //     VALUES ('17','Joel','Mata','gone','cent123')";


            $sql = "INSERT INTO Usuario (idUsuario,Nombre,Apellidos,Email,TipoUsuario)
                     VALUES ('$id','$nombre','$apellido','$email','$tipoUsuario')";

            self::$dbh->exec($sql);
            echo "Success Insert";


        } catch (PDOException $e) {
            #echo $e->getTraceAsString();
            return $var='fallo';
            /* print "Error!: " .
            echo $e->getMessage(); . "<br/>";
             die();*/
        }

    }

    public  static function buscarUsuario($id){
        try {
            self:: $dbh = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db, self::$user, self::$password);
            $sql = 'SELECT nombre , apellido FROM Usuario WHERE idUsuario="$id"';
            self::$dbh->query($sql);
        }catch (PDOException $e){

            return $var='fallo';
        }
    }

    public static function modificarUsuario($id,$estado,$tipoUsuario){
        try {
            self:: $dbh = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db, self::$user, self::$password);

            $sql = "UPDATE Usuario.
                  SET Estado = '$estado' , TipoUsuario = '$tipoUsuario'.
                  WHERE idUsuario= $id";
        }catch (PDOException $e){
            return $var='fallo';
        }
    }

    public static function ejecutarQuery($sql)
    {
        self::abrirConexion();
        try {
            self::$dbh->execute($sql);

        }catch (PDOException $e) {
                echo $e->getTraceAsString();
                /* print "Error!: " .
                echo $e->getMessage(); . "<br/>";
                 die();*/
            }

        echo "Datos Ingresados";
        return "Solicitud ejecutada exitosmente";


        /*

        $query = self::$dbh->prepare($sql);
        $query -> execute();
        $result = $query->fetchAll();
        return $result;*/



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
