<?php
require_once("lib/Validation.php");
if($_POST) {
    $arrErrores = array();
    var_dump($_POST);
    $valNombre = Validation::noEstaVacio("Nombre",$_POST['nombre']);
    if(is_array($valNombre)){
        $arrErrores[] = $valNombre['mensajeError'];
    }else {
        $valNombreFormato = Validation::esSoloAlfa("Nombre", $_POST['nombre']);
        if (is_array($valNombreFormato)) {
            $arrErrores[] = $valNombreFormato['mensajeError'];
        }
    }

    $valEmail = Validation::noEstaVacio("Email", $_POST['email']);
    if(is_array($valEmail)) {
        $arrErrores[] = $valEmail['mensajeError'];
    }else {
        $valEmailFormato = Validation::esEmail("Email", $_POST['email']);
        if(is_array($valEmailFormato)) {
            $arrErrores[] = $valEmailFormato['mensajeError'];
        }
    }

    $valCedula = Validation::noEstaVacio("Cedula",$_POST['cedula']);
    if(is_array($valCedula)){
        $arrErrores[] = $valCedula['mensajeError'];
    }else {
        $valCedulaFormato = Validation::esNumerico("Cedula", $_POST['cedula']);
        if (is_array($valCedulaFormato)) {
            $arrErrores[] = $valCedulaFormato['mensajeError'];
        }
    }

    $valdireccion = Validation::noEstaVacio("Direccion",$_POST['direccion']);
    if(is_array($valdireccion)){
        $arrErrores[] = $valdireccion['mensajeError'];
    }else {
        $valDireccionFormato = Validation::tieneXLongitud("Direccion", $_POST['direccion']);
        if (is_array($valDireccionFormato)) {
            $arrErrores[] = $valDireccionFormato['mensajeError'];
        }
    }
    $valDireccionFormato = Validation::esAlfanumerico("Direccion", $_POST['direccion']);
    if (is_array($valDireccionFormato)) {
        $arrErrores[] = $valDireccionFormato['mensajeError'];
    }

}

?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>Ejemplos de validacion</div>
        <form name="frmCedula" method="post" action="index.php" >
            <ul>
                <li><label>Nombre*: </label> <input type="text" name="nombre"></li>
                <li><label>Apellido1*: </label> <input type="text" name="apellido1"></li>
                <li><label>Apellido2*: </label> <input type="text" name="apellido2"></li>
                <li><label>Email*: </label> <input type="text" name="email"></li>
                <li><label>Cedula*: </label> <input type="text" name="cedula"></li>
                <li>
                    <label>Género*: </label>
                    <select name="genero">
                        <option value="-1">Seleccionar Uno...</option>
                        <option value="mas">Masculino</option>
                        <option value="fem">Femenino</option>
                    </select>
                    <br/>
                    <br/>
                    <br/>
                </li>
                <li><label>Dirección*: </label> <textarea cols="10" rows="5" name="direccion"></textarea> </li>
                <li>
                    <label>Estado civil*: </label>
                    <select name="estadoCivil">
                        <option value="-1">Seleccionar Uno...</option>
                        <option value="soltero">Soltero</option>
                        <option value="casado">Casado</option>
                        <option value="viudo">Viudo</option>
                        <option value="unionLibre">Union Libre</option>
                    </select>
                    <br/>
                    <br/>
                    <br/>
                </li>
                <li><input type="submit" value="Enviar Datos"></li>
                <?php if($_POST) { ?>
                <li>

                    <ul class="mensajeError">
                        <?php
                            if(sizeof($arrErrores) > 0){
                                foreach($arrErrores as $strError) {
                                    echo("<li>$strError</li>");
                                }
                            }
                        ?>
                    </ul>

                </li>
                <?php } ?>
            </ul>

        </form>

    </body>
</html>