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
            self:: $dbh = new PDO("mysql:host=".self::$host.";dbname=".self::$db, self::$user, self::$password);



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

            $row = array();

        try {

            self:: $dbh = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db, self::$user, self::$password);
            $sql = "SELECT Nombre , Apellido , Estado , TipoUsuario  FROM Usuario WHERE idUsuario="."$id";


           foreach(self::$dbh->query($sql) as $row){

               print  "id " . $id . "\n";
               print  "Nombre " . $row['Nombre'] . "\n";
               print  "Apellido " . $row['Apellido'] . "\n";
               print  "Estado " . $row['Estado'] . "\n";
               print  "Puesto " . $row['TipoUsuario'] . "\n";
                   }

            return $row;




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

            $dbh->exec($sql);


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





    static function removerUsuario ($id){
        self::abrirConexion();
        $sql = "DELETE FROM Usuario WHERE IdUsuario="."$id";
        self::$dbh->query($sql);
        return "Se removio el usuario Exitosamente";

    }
}

    ?>
