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
        <div class="button"><a href="portada.php">Usuarios</a></div>
        <div class="button"><a href="registrarUsuario.php">Registrar Usuario</a></div>
        <div class="button"><a href="consultarUsuario.php">Consultar Usuario</a></div>
        <div class="button": black;><a href="reestablecerContrasena.php">Cambiar Contrase&ntilde;a</a></div>
    </div>
    </br>
    <div class="interface">
        <fieldset>
            <legend>Ingreso de Informaci&oacuten para modificar el usuario</legend>
            <form action="" method="post" enctype="text/plain" id="formulario" name="formulario">
                <table>
                    <tr>
                        <td>Estado del Usuario </td>
                        <br/>
                        <td>
                            <select name="sltGradoAcademico" id="sltGradoAcademico">
                                <option value="GRADO">--Seleccionar Puesto--</option>
                                <option value="gerencia">Activo</option>
                                <option value="resepcionista">Inactivo</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nuevo tipo de Usuario</td>
                        <br/>
                        <td>
                            <select name="sltGradoAcademico" id="sltGradoAcademico">
                                <option value="GRADO">--Seleccionar Puesto--</option>
                                <option value="gerencia">Administrador</option>
                                <option value="resepcionista">Operador</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="button" name="txtEnviar" value="Registrar" onClick="Validar(formulario)"/>
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