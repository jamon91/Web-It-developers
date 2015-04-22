<?php
require_once("../lib/Validation.php");
require_once("../lib/ConnectordeDatos.php");



if($_POST) {


    $arrErrores = array();
    var_dump($_POST);

    $valCedula = Validation::noEstaVacio("Cedula",$_POST['cedula']);
    if(is_array($valCedula)){
        $arrErrores[] = $valCedula['mensajeError'];
    }else {
        $valCedulaFormato = Validation::esNumerico("Cedula", $_POST['cedula']);
        if (is_array($valCedulaFormato)) {
            $arrErrores[] = $valCedulaFormato['mensajeError'];
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title> Reestablecer Contrase&ntilde;a </title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body onLoad="cursor()">
<div class="container">
    <div class="header">
    </div>
    <div class="decorate">
    </div>
    <div class="menuContainer">
        <div class="button"><a href="../menuUsuario.php">Men&uacute de Usuarios</a></div>
        <div class="button"><a href="registrarUsuario.php">Registrar Usuario</a></div>
        <div class="button"><a href="modificarUsuario.php">Modificar Usuario</a></div>
        <div class="button"><a href="consultarUsuario.php">Consultar Usuario</a></div>
    </div>
    </br>
    <div class="interface">
        <fieldset>
            <legend>Ingreso de Informaci&oacuten para reestablecer la Contrase&ntilde;a de un usuario</legend>
            <form name="frmCedula" method="post" action="reestablecerContrasena.php">
                <table>
                    <tr>
                        <td>Ingrese el Numero de Cedula</td>
                        <td><input type="text" id="cedula" name="cedula"/> </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Enviar Datos">
                            <input type="reset" name="txtLimpiar" value="Limpiar" onClick="PoneCursor()" />
                        </td>
                    </tr>
                </table>
                <?php if($_POST) { ?>
                    <ul class="mensajeError">
                        <?php
                        if(sizeof($arrErrores) > 0){
                            foreach($arrErrores as $strError) {
                                echo("<li>$strError</li>");
                            }
                        }
                        ?>
                    </ul>
                <?php } ?>
            </form>
        </fieldset>
    </div>
</div>
</body>
<div id="footer">
    <p>
        Web/It Developers
    </p>
</html>