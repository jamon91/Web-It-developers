<?php
/**
 * Created by PhpStorm.
 * User: estudiante
 * Date: 26/04/15
 * Time: 06:24 PM
 */

class ConnectordeDatos {


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


    public static function registrarUsuario($id,$nombre,$apellido,$email,$tipoUsuario){

        try {
            //armar String de conexion
            //modificar el string de conexion para que funcione con su base de datos

            self::abrirConexion();
            $sql = "INSERT INTO Usuario (idUsuario,Nombre,Apellidos,Email,TipoUsuario)
                     VALUES ('$id','$nombre','$apellido','$email','feo')";
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


            self::abrirConexion();
            $sql = "SELECT idUsuario ,Nombre , Apellidos  FROM Usuario WHERE idUsuario="."$id";
            $query = self::$dbh->prepare($sql);
            $query->execute();
            $result = $query->fetchAll();
            var_dump($result);

            return $result;

        }catch (PDOException $e){

            return $var='fallo';
        }
    }

    public static function modificarUsuario($id,$estado,$tipoUsuario){
        try {


            self::abrirConexion();
            $sql = "UPDATE Usuario.
                    SET Estado = $estado , TipoUsuario = $tipoUsuario.
                    WHERE idUsuario= "."$id";

            $result=self:: $dbh->exec($sql);
            var_dump($result);

            return $result;

        }catch (PDOException $e){
            return $var='fallo';
        }
    }

    public static function ejecutarQuery($sql)
    {

        try {
            self::abrirConexion();
            self::$dbh->execute($sql);

        }catch (PDOException $e) {
            echo $e->getTraceAsString();
            /* print "Error!: " .
            echo $e->getMessage(); . "<br/>";
             die();*/
        }

        echo "Datos Ingresados";
        return "Solicitud ejecutada exitosmente";


    }

    public static function  ejecutarLogin($user,$password){

        try {            self::abrirConexion();
            $sql = "SELECT Nombre , Password  FROM Usuario WHERE Nombre="."$user";//  AND Password='cent123'." ;

            $query = self::$dbh->prepare($sql);
            $query->execute();
            $result = $query->fetch();

            var_dump($result);



            return $result;




        }catch (PDOException $e){

            return $var='fallo';
        }

    }

    static function removerUsuario ($id){

        self::abrirConexion();
        $sql = "DELETE FROM Usuario WHERE IdUsuario="."$id";
        self::$dbh->query($sql);
        return "Se removio el usuario Exitosamente";

    }

   static function insertarDatos($nombreVM,$bdname,$userbd,$v1){
       $ejectuble="archivo.sh";
       self::abrirConexion();
       $sql = "INSERT INTO  Configuraciones (nombreVM, BdName, BdUser, VersionConfiguracion, ejectuble ) VALUES ('$nombreVM', '$bdname', '$userbd', '$v1','$ejectuble')";
       self::$dbh->exec($sql);
       echo "Success Insert";

   }


    static function listarVMS(){
        self::abrirConexion();
        $sql = "SELECT * FROM Configuraciones ";
        $query = self::$dbh->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();

        return $result;

    }







}