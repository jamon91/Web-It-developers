<!-- 
	Elaborado por: 					Luis Acuna Pilarte.
	Fecha de creación:    			Jueves 21 de Junio de 2012
	Fecha de ultima modificación: 	Jueves 21 de Junio de 2012 -- 10:24 p.m.
	Versión:						1.0.0.0
	Proyecto 1
-->

<html>
<head>
    <title> Reestablecer Contrasena </title>
    <link rel="stylesheet" href="/../css/style.css" type="text/css">
</head>
<body onLoad="cursor()">
<div class="container">
    <div class="header">
    </div>
    <div class="decorate">
    </div>
    <div class="menuContainer">
        <div class="button"><a href="portada.php">Usuarios</a></div>
        <div class="button"><a href="registrarUsuario.php">Restablecer Contrasena</a></div>
        <div class="button"><a href="modificarUsuario.php">Modificar Usuario</a></div>
        <div class="button"><a href="consultarUsuario.php">Estado Usuario</a></div>
    </div>
    <div class="interface">
        <fieldset>
            <legend>Ingreso de Informaci&oacuten</legend>

            <form action="mailto:danny-2688@hotmail.com" method="post" enctype="text/plain" id="formulario" name="formulario">

                <table>
                    <tr>
                        <td>Ingrese el Numero de Cedula</td>
                        <td><input type="text" id="txtCedula" name="txtCedula"/> </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" name="txtEnviar" value="Crear Contrasena" onClick="Validar(formulario)"/>
                            <input type="reset" name="txtLimpiar" value="Limpiar" onClick="PoneCursor()" />
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</div>
</body>
</html>