<!DOCTYPE html>

<html><head lang="en"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <!-- estilos en pagina -->
    <style>


    </style>
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <script type="application/javascript" src="scripts/scripts.js"></script>
</head>
<body>

    <div id="titulo">Menu de la aplicacion CLIMA</div>

    <!-- unordered list -->
    <ul class="eliminarVineta">
        <li>
            <label for="nombreUsuario">Nombre de usuario: </label>
            <br>
            <input type="text" name="nombreUsuario" id="nombreUsuario" value="" maxlength="10">
        </li>
        <li>
            <label for="clave">Password: </label>
            <br>
            <input type="password" name="clave" id="clave">
        </li>
        <li>
            <label for="codigo">Código secreto</label>
            <br>
                        <textarea name="codigo" id="codigo" cols="30">
                        </textarea>
        </li>
        <li>
            <input type="submit" id="enviarDatos" name="enviarDatos">
        </li>
    </ul>
</form>

</body></html>