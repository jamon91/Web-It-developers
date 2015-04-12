<?php
require_once("../lib/Validation.php");
require_once("../lib/ConnectordeDatos.php");

/*
 *
 */

if($_POST) {
    $arrErrores = array();
    var_dump($_POST);

    // conecta base de datos y envia parametros para insertar a la tabla.
    if ($_POST['accion'] === 'agregar') {
        $var=ConectordeBD::registrarUsuario($_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['sltGradoAcademico']);

        echo $var;
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

    $valNombre = Validation::noEstaVacio("Nombre",$_POST['nombre']);
    if(is_array($valNombre)){
        $arrErrores[] = $valNombre['mensajeError'];
    }else {
        $valNombreFormato = Validation::esSoloAlfa("Nombre", $_POST['nombre']);
        if (is_array($valNombreFormato)) {
            $arrErrores[] = $valNombreFormato['mensajeError'];
        }
    }

    $valApellido = Validation::noEstaVacio("Apellido",$_POST['apellido']);
    if(is_array($valApellido)){
        $arrErrores[] = $valApellido['mensajeError'];
    }else {
        $valApellidoFormato = Validation::esSoloAlfa("Apellido", $_POST['apellido']);
        if (is_array($valApellidoFormato)) {
            $arrErrores[] = $valApellidoFormato['mensajeError'];
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
}
?>
<!DOCTYPE html>
<html>
<head>
    <title> Mantenimiento de usuarios </title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body onLoad="cursor()">
<div class="container">
    <div class="header">
    </div>
    <div class="decorate">
    </div>
    <div class="menuContainer">
        <div class="button"><a href="../menuUsuario.php">Usuarios</a></div>
        <div class="button"><a href="modificarUsuario.php">Modificar Usuario</a></div>
        <div class="button"><a href="consultarUsuario.php">Consultar Usuario</a></div>
        <div class="button"><a href="reestablecerContrasena.php">Cambiar Contrase&ntilde;a</a></div>
    </div>
    </br>
    <div class="interface">
        <fieldset>
            <legend>Ingreso de Informaci&oacuten para registrar un usuario</legend>

            <form name="frmCedula" method="post" action="registrarUsuario.php">

                <table>
                    <tr>
                        <td>Numero de Cedula</td>
                        <td><input type="text" name="cedula"/> </td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><input type="text" name="nombre"/> </td>
                    </tr>
                    <tr>
                        <td>Apellidos</td>
                        <td><input type="text" name="apellido"/> </td>
                    </tr>
                    <tr>
                        <td>Correo Electronico</td>
                        <td><input type="text" name="email"/> </td>
                    </tr>
                    <tr>
                        <td>Tipo de Usuario</td>
                        <br/>
                        <td>
                            <select name="TipoPuesto" id="TipoPuesto">
                                <option value="Puesto">--Seleccionar Puesto--</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Operador">Operador</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="accion" type="hidden" value="agregar">
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
