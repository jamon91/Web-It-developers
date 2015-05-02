<?php
/**
 * Created by PhpStorm.
 * User: estudiante
 * Date: 26/04/15
 * Time: 08:20 PM
 */

class crearfile {


    static function crearArchSucursal($maquina)
     {


         /*
          *
          * Concatenar fecha.
          *
          * */
        $archivo="prueba.sh";
        date_default_timezone_set("America/Costa_Rica");
        $binBash = "#!/usr/bin/env bash";
        $comando1="OLD_HOSTNAME="."\"$( hostname )\"";
        $comando2="export NEW_HOSTNAME = $maquina";
        $comando3="hostname"."\""."\$NEW_HOSTNAME\"";
        $comando4="sed - i"."\"s/HOSTNAME=.*/HOSTNAME="."\$NEW_HOSTNAME/g\""."/etc/hostname";

            $ejecutable = fopen("$archivo","w");
            fwrite($ejecutable,$binBash."\n");
            fwrite($ejecutable,$comando1."\n");
            fwrite($ejecutable,$comando2."\n");
            fwrite($ejecutable,$comando3."\n");
            fwrite($ejecutable,$comando4."\n");

            fclose($ejecutable);

          return $archivo;

       }

}