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
        <div class="button"><a href="../menuUsuario.php">Usuarios</a></div>
        <div class="button"><a href="registrarUsuario.php">Registrar Usuario</a></div>
        <div class="button"><a href="modificarUsuario.php">Modificar Usuario</a></div>
        <div class="button"><a href="consultarUsuario.php">Consultar Usuario</a></div>
    </div>
    </br>
    <div class="interface">
        <fieldset>
            <legend>Ingreso de Informaci&oacuten para reestablecer la Contrase&ntilde;a de un usuario</legend>

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
<div id="footer">
    <p>
        Web/It Developers
    </p>
</html>