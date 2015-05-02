<?php

class ConectordeBD

{
    private static $host = "localhost";
    private static $port = "3306";
    private static $user = "root";
    private static $password = "hola123";
    private static $dbh;
    private static $db = "ProyectoWeb";

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

            self::abrirConexion();
            $sql = "INSERT INTO Usuario (idUsuario,Nombre,Apellidos,Email,Password,Estado,TipoUsuario)
                     VALUES ('$id','$nombre','$apellido','$email','cent123','Activo','$tipoUsuario')";
            self::$dbh->exec($sql);




        } catch (PDOException $e) {
            #echo $e->getTraceAsString();
            return $var='fallo';
            /* print "Error!: " .
            echo $e->getMessage(); . "<br/>";
             die();*/
        }

    }

    public static function abrirConexion()
    {
        try {


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

    public  static function buscarUsuario($id){

        try {


            self::abrirConexion();
            $sql = "SELECT idUsuario ,Nombre , Apellidos , Estado ,Password FROM Usuario WHERE idUsuario="."$id";
            $query = self::$dbh->prepare($sql);
            $query->execute();
            $result = $query->fetchAll();


            return $result;

        }catch (PDOException $e){

            return $var='fallo';
        }
    }

    public static function modificarUsuario($id,$estado,$tipoUsuario){
        try {


            self::abrirConexion();
            $sql = "UPDATE Usuario SET Estado = '$estado' , TipoUsuario = '$tipoUsuario' WHERE idUsuario= $id";
            $result=self:: $dbh->exec($sql);


            return $result;

        }catch (PDOException $e){
            return $var='fallo';
        }
    }

    public static function cambiarClave($id){

        try {


            self::abrirConexion();
            $sql = "UPDATE Usuario SET Password = 'log123'  WHERE idUsuario= $id";
            $result=self:: $dbh->exec($sql);


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


        return "Solicitud ejecutada exitosmente";


    }

    public static function  ejecutarLogin($user,$password){

        try {
            self::abrirConexion();
            $sql = "SELECT Nombre , Password  FROM Usuario WHERE Nombre='$user'";//  AND Password='cent123'." ;
            foreach (self::$dbh->query($sql) as $row) {
            }

                   return $row;

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


    static function insertarDatos($nombreVM,$bdname,$userbd,$v1,$ejectuble){
        self::abrirConexion();
        $sql = "INSERT INTO  Configuraciones (nombreVM, BdName, BdUser, VersionConfiguracion, ejectuble ) VALUES ('$nombreVM', '$bdname', '$userbd', '$v1','$ejectuble')";
        self::$dbh->exec($sql);


    }


    static function listarVMS(){
        self::abrirConexion();
        $sql = "SELECT * FROM Configuraciones ";
        $query = self::$dbh->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();

        return $result;

    }




    static function crearArchSucursal($maquina,$bdname,$usuario){


        date_default_timezone_set("America/Costa_Rica");
        $fecha=date("h:i:sa");
        $contra="hola123";
        $file="ejectuble".$maquina.$fecha.".sh";
        $lubuntu1='$host';
        $lubuntu2='$newhost';
        $asignacion="query";
        $lubuntu3='$query';
        $lubuntu4='${Q1}${Q2}${Q3}';
        $varhost="host=$(cat /etc/hostname)";
        $newhost="newhost=".$maquina;
        $export1="export newhost";
        $comando1="Q1="."CREATE DATABASE IF NOT EXISTS"." ".$bdname.";";
        $comando2="Q2="."GRANT ALL ON *.* TO "." "."'$usuario'"."@"."localhost"." "."IDENTIFIED BY"." "."'$contra'".";";
        $comando3="Q3=FLUSH PRIVILEGES;";
        $comando4="export ".$asignacion."=".$lubuntu4;
        $comando5="sed -i \"s/$lubuntu1/$lubuntu2/g\" /etc/hosts";
        $comando6="sed -i \"s/$lubuntu1/$lubuntu2/g\" /etc/hostname";
        $comando7="mysql -uroot -phola123 -e \"$lubuntu3\"";
        $comando8="/unicenta/configure.sh";

        $wizard = fopen("archivos/$file","w");
        fwrite($wizard,$varhost."\n");
        fwrite($wizard,$newhost."\n");
        fwrite($wizard,$export1."\n");
        fwrite($wizard,$comando1."\n");
        fwrite($wizard,$comando2."\n");
        fwrite($wizard,$comando3."\n");
        fwrite($wizard,$comando4."\n");
        fwrite($wizard,$comando5."\n");
        fwrite($wizard,$comando6."\n");
        fwrite($wizard,$comando7."\n");
        fwrite($wizard,$comando8."\n");
        fclose($wizard);

        return $file;


    }




}

    ?>
