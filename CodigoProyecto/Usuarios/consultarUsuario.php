<?php
require_once("../lib/Validation.php");
require_once("../lib/ConnectordeDatos.php");
if($_POST) {
    $arrErrores = array();


    if($_POST['accion']=== 'buscar' ){

        $rows= ConectordeBD::buscarUsuario($_POST['cedula']);

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
}
?>
<!DOCTYPE html>
<html>
<head>
    <title> Consultar Usuarios </title>
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
            <div class="button"><a href="reestablecerContrasena.php">Cambiar Contrase&ntilde;a</a></div>
        </div>
        </br>
        <div class="interface">
            <fieldset>
                <legend>Ingreso de Informaci&oacuten para consultar un usuario</legend>
                <form name="frmCedula" method="post" action="consultarUsuario.php">
                    <table>
                        <tr>
                            <td>Ingrese el numero de Cedula</td>
                            <td><input type="text" name="cedula"/> </td>
                        </tr>
                    </table>
                    <input type="hidden" value="buscar" name="accion">
                    <input type="submit" value="Enviar Datos">
                </form>
                <?php if($_POST) { ?>
                    <ul class="mensajeError">
                        <?php
                        if(sizeof($arrErrores) > 0){
                            foreach($arrErrores as $strError) {
                                echo("<li>$strError</li>");
                            }
                        }else{

                            foreach($rows as $row) {

                                echo "*ID: {$row["idUsuario"]}<br>";
                                echo "*Nombre: {$row["Nombre"]}<br>";
                                echo "*Apellido: {$row["Apellidos"]}<br>";
                                echo "*Estado: {$row["Estado"]}<br>";
                            }


                        }
                        ?>
                    </ul>
                <?php } ?>
              </fieldset>

        </div>
        </div>
    </div>



</body>
<div id="footer">
    <p>
        Web/It Developers
    </p>
</html>