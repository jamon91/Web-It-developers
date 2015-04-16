<?php


?>

<!DOCTYPE html>
<html>
<head>
    <title> Configuracion de la maquina virtual </title>
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
