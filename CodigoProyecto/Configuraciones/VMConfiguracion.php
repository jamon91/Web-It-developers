<?php

require_once('../lib/Validation.php');
require_once('../lib/ConnectordeDatos.php');

if($_POST) {
    if($_POST['accion'] === 'agregar') {

        $archivo=ConectordeBD::crearArchSucursal($_POST['nombreVM'], $_POST['BDName'], $_POST['BDUser']);
        $registrar=ConectordeBD::insertarDatos($_POST['nombreVM'], $_POST['BDName'], $_POST['BDUser'],$_POST['version'],$archivo);
    }

    $vM = Validation::noEstaVacio("Nombre de Maquina",$_POST['nombreVM']);
    if(is_array($vM)){


        $arrErrores[] = $vM['mensajeError'];
    }else {
        $valCedulaFormato = Validation::esAlfanumerico("Nombre de Maquina", $_POST['nombreVM']);
        if (is_array($valCedulaFormato)) {
            $arrErrores[] = $valCedulaFormato['mensajeError'];
        }
    }

    $valNombre = Validation::noEstaVacio("Nombre de Base de Datos",$_POST['BDName']);
    if(is_array($valNombre)){
        $arrErrores[] = $valNombre['mensajeError'];
    }else {
        $valNombreFormato = Validation::esSoloAlfa("Nombre de Base de Datos", $_POST['BDName']);
        if (is_array($valNombreFormato)) {
            $arrErrores[] = $valNombreFormato['mensajeError'];
        }
    }

    $valApellido = Validation::noEstaVacio("Nombre de Usuario",$_POST['BDUser']);
    if(is_array($valApellido)){
        $arrErrores[] = $valApellido['mensajeError'];
    }else {
        $valApellidoFormato = Validation::esSoloAlfa("Nombre de Usuario", $_POST['BDUser']);
        if (is_array($valApellidoFormato)) {
            $arrErrores[] = $valApellidoFormato['mensajeError'];
        }
    }

    $valEmail = Validation::noEstaVacio("Version", $_POST['version']);
    if(is_array($valEmail)) {
        $arrErrores[] = $valEmail['mensajeError'];
    }else {
        $valEmailFormato = Validation::esAlfanumerico("Version", $_POST['version']);
        if(is_array($valEmailFormato)) {
            $arrErrores[] = $valEmailFormato['mensajeError'];
        }
    }


}

?>
<!DOCTYPE html>
<html>

<head>
    <title> Configuraci&oacutenn de la maquina virtual </title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body onLoad="cursor()">
<div class="container">
    <div class="header">
    </div>
    <div class="decorate">
    </div>
    </br>
    <div class="interface">
        <fieldset>
            <legend>Ingreso de Informaci&oacuten de los respaldos</legend>

            <form name="fmConfiguraciones" method="post" action="VMConfiguracion.php">

                <table>
                    <tr>
                        <td>Nombre de Maquina Virtual</td>
                        <td><input type="text" name="nombreVM"/> </td>
                    </tr>
                    <tr>
                        <td>Nombre de Bases de Datos</td>
                        <td><input type="text" name="BDName"/> </td>
                    </tr>
                    <tr>
                        <td>User de la base de datos</td>
                        <td><input type="text" name="BDUser"/> </td>
                    </tr>
                    <tr>
                        <td>Version de la Configuracion</td>
                        <td><input type="text" name="version"/> </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="accion" type="hidden" value="agregar">
                            <input type="submit" name="accion" value="agregar">
                        </td>
                    </tr>
                    <tr>
                        <th><h2>Listado de los respaldos de la maquina virtual</h2></th>
                        <th><a href="VMListado.php"><img src="../imag/ir.jpg"title="	"></a></th>
                    </tr>
                    <tr>
                        <th><h2>Menu principal</h2></th>
                        <th><a href="../menuPrincipal.php"><img src="../imag/ir.jpg"title="	"></a></th>
                    </tr>
                </table>
            </form>
            <?php if($_POST) { ?>
            <ul class="mensajeError">
                <?php
                if(sizeof($arrErrores) > 0){
                    foreach($arrErrores as $strError) {
                        echo("<li>$strError</li>");
                    }
                }
                ?>
                <?php } ?>

        </fieldset>
    </div>
</div>
<p>
    Web/It Developers
</p>
</body>

</html>
