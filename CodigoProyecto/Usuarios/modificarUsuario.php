<?php
require_once("../lib/Validation.php");
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
    <title> Modificar Usuario </title>
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
        <div class="button"><a href="registrarUsuario.php">Registrar Usuario</a></div>
        <div class="button"><a href="consultarUsuario.php">Consultar Usuario</a></div>
        <div class="button": black;><a href="reestablecerContrasena.php">Cambiar Contrase&ntilde;a</a></div>
    </div>
    </br>
    <div class="interface">
        <fieldset>
            <legend>Ingreso de Informaci&oacuten para modificar el usuario</legend>
            <form name="frmCedula" method="post" action="modificarUsuario.php">
                <table>
                    <tr>
                        <td>Ingrese el numero de cedula</td>
                        <td><input type="text" name="cedula"/> </td>
                    </tr>
                    <tr>
                        <td>Estado del Usuario </td>
                        <br/>
                        <td>
                            <select name="TipoPuesto" id="TipoPuesto">
                                <option value="Puesto">--Seleccionar Puesto--</option>
                                <option value="Habilitado">Activo</option>
                                <option value="Deshabilitado">Inactivo</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nuevo tipo de Usuario</td>
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