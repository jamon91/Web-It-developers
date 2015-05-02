<?php
require_once('../lib/ConnectordeDatos.php');

if($_POST) {
    if($_POST['accion'] === 'agregar') {

        $registrar=ConnectordeDatos::insertarDatos($_POST['nombreVM'], $_POST['BDName'], $_POST['BDUser'],$_POST['version']);
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
                                <input type="reset" name="txtLimpiar" value="Limpiar" onClick="PoneCursor()" />

                            </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
    </div>
    <p>
        Web/It Developers
    </p>
</body>

</html>
