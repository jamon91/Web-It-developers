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
     * Validando que el campo sea alfanumerico
     */

    static function esAlfanumerico ($nombreCampo,$contenido) {
        echo 'valor de $contenido ';
        var_dump($contenido);
        if(preg_match("|^[0-9a-zA-Z ]*$|",$contenido)){
        }
        else {
            return array('resultado' => false,
                'mensajeError' => "El formato del campo $nombreCampo es inválido no debe de llevar caracteres especiales.",
                'campoDelError' => $nombreCampo
            );
        }
    }

    /**
     * Validando la direccion no exede el campo
     */

    static function tieneXLongitud($nombreCampo,$contenido) {
        echo 'valor de $contenido ';
        var_dump($contenido);
        if (strlen($contenido) > 75){
            return array('resultado'=>false,
                'mensajeError' => "La longitud de la $nombreCampo no debe ser tan larga.",
                'campoDelError' => $nombreCampo
            );
        }
        else{

        }
    }

    /**
     * Validando si la cedula es numerico
     */

    static function esNumerico($nombreCampo,$contenido) {
        echo 'valor de $contenido ';
        var_dump($contenido);
        if($contenido = (is_numeric($contenido))){
        }
        else {
            return array('resultado' => false,
                'mensajeError' => "El formato del campo $nombreCampo es inválido.",
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
     * Validando si el campo es numerico o no
     */

    static function esSoloAlfa ($nombreCampo,$contenido) {
        echo 'valor de $contenido ';
        var_dump($contenido);
        if(preg_match("|^[a-zA-Z ]*$|",$contenido)){
        }
        else {
            return array('resultado' => false,
                'mensajeError' => "El formato del campo $nombreCampo es inválido no debe de llevar caracteres especiales o numeros.",
                'campoDelError' => $nombreCampo
            );
        }
    }

}
