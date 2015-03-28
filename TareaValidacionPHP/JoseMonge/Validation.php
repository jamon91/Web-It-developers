<?php
/**
 * Created by PhpStorm.
 * User: estudiante
 * Date: 23/03/15
 * Time: 06:41 PM
 */

class Validation {

    static $validationErrors;
    /* no lo necesitamos
    function __construct() {

    }
    */

    /**
     * Revisar si el $contenido viene vacío
     * @param $contenido El contenido a validar
     */
    static function noEstaVacio($nombreCampo,$contenido) {
        $contenido = str_replace(" ","",$contenido);
        if(!$contenido || strlen($contenido) === 0){

            return array('resultado'=>false,
                'mensajeError' => "El campo $nombreCampo está vacío",
                'campoDelError' => $nombreCampo
            );

        }
        return true;
    }

    /**
     * Revisar $contenido tiene caracteres alfanumericos
     * @param $contenido El contenido a validar
     */

    static function esAlfanumerico($nombreCampo,$contenido) {
        echo 'valor de $contenido ';
        var_dump($contenido);

        if(preg_match("|^[0-9a-zA-Z ]*$|",$contenido)){
        } else {
            return array('resultado' => false, 'mensajeError' => "El campo $nombreCampo es inválido no debe de llevar caracteres especiales.",
                'campoDelError' => $nombreCampo );
        }
    }

    /**
     * Validando que la longitud del campo sea válido
     * @param $nombreCampo Nombre del campo en el formulario para display
     * @param $contenido  Contenido que ingresamos en el input del formulario
     */
    static function tieneXLongitud($nombreCampo,$contenido) {
        echo 'valor de $contenido';
        var_dump($contenido);

        if(strlen($contenido) > 50) {
            return array('resultado'=>false,
                'mensajeError' => "El campo $nombreCampo excede los espacios validos",
                'campoDelError' => $nombreCampo
            );
        }else{
        }
    }


    /**
     * Validando si el numero de cedula es válido
     * @param $nombreCampo Nombre del campo en el formulario para display
     * @param $contenido  Contenido que ingresamos en el input del formulario
     */
    static function esNumerico($nombreCampo,$contenido) {
        echo 'valor de $contenido';
        var_dump($contenido);

        if($contenido = is_numeric ( $contenido )){

        }else{
            return array('resultado'=>false,
                'mensajeError' => "El campo $nombreCampo es inválido, solo debe contener numeros",
                'campoDelError' => $nombreCampo
            );
        }


    }

    /**
     * Validando si el email es válido
     * @param $nombreCampo Nombre del campo en el formulario para display
     * @param $contenido  Contenido que ingresamos en el input del formulario
     */
    static function esEmail($nombreCampo,$contenido) {
        $bEsEmail = filter_var($contenido,FILTER_VALIDATE_EMAIL);
        echo 'valor de $bEsEmail ';
        var_dump($bEsEmail);
        if($bEsEmail === false){
            return array('resultado'=>false,
                'mensajeError' => "El formato del campo $nombreCampo es inválido.",
                'campoDelError' => $nombreCampo
            );

        }
        return true;
    }

    /**
     * Validando si los nombres y apellidos de cedula es válido
     * @param $nombreCampo Nombre del campo en el formulario para display
     * @param $contenido  Contenido que ingresamos en el input del formulario
     */
    static function esSoloAlfa ($nombreCampo,$contenido) {
        echo 'valor de $contenido ';
        var_dump($contenido);

        if(preg_match("|^[a-zA-Z ]*$|",$contenido)){
        } else {
            return array('resultado' => false, 'mensajeError' => "El formato del campo $nombreCampo es inválido no debe de llevar caracteres especiales o numeros.",
                'campoDelError' => $nombreCampo );
        }
    }

}