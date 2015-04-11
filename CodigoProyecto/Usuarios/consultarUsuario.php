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
            <div class="button"><a href="../menuUsuario.php">Usuarios</a></div>
            <div class="button"><a href="registrarUsuario.php">Registrar Usuario</a></div>
            <div class="button"><a href="modificarUsuario.php">Modificar Usuario</a></div>
            <div class="button"><a href="reestablecerContrasena.php">Cambiar Contrase&ntilde;a</a></div>
        </div>
        </br>
        <div class="interface">
            <fieldset>
                <legend>Ingreso de Informaci&oacuten para consultar un usuario</legend>
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
    </div>
</body>
<div id="footer">
    <p>
        Web/It Developers
    </p>
</html>