<!--
	Elaborado por: 					Luis Acuna Pilarte.
	Fecha de creación:    			Jueves 21 de Junio de 2012
	Fecha de ultima modificación: 	Jueves 21 de Junio de 2012 -- 10:24 p.m.
	Versión:						1.0.0.0
	Proyecto 1
-->

<html>
<head>
    <title> Consultar Usuarios </title>
    <link rel="stylesheet" href="/../css/style.css" type="text/css">
</head>
<body onLoad="cursor()">
<div class="container">
    <div class="header">
    </div>
    <div class="decorate">
    </div>
    <div class="menuContainer">
        <div class="button"><a href="portada.php">Inicio</a></div>
        <div class="button"><a href="registrarUsuario.php">Registrar Usuario</a></div>
        <div class="button"><a href="modificarUsuario.php">Estado de Usuario</a></div>
        <div class="button"><a href="reestablecerContrasena.php">Reestablecer Contrasena</a></div>
    </div>
    <div class="interface">
        <fieldset>
            <legend>Ingreso de Informaci&oacuten</legend>
            <form action="" method="post" enctype="text/plain" id="formulario" name="formulario">

                <table>
                    <tr>
                        <td>Ingrese el numero de Cedula</td>
                        <td><input type="text" id="txtCedula" name="txtCedula"/> </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</div>
</body>
</html>