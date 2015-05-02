<?php
session_start();
require_once('lib/UtilidadesSesion.php');
require_once("lib/Validation.php");
require_once("lib/ConnectordeDatos.php");

//nombreUsuario y clave
//== === != !==
$bHayError = false;
$sMensajeError = '';
if( array_key_exists('nosession',$_GET) ) {
    $bHayError = true;
    $sMensajeError .= '<br/>Necesita autenticar al usuario';
}

//que $_POST exista


if ($_POST) {
    //nombre usuario exista

    if ($_POST['accion'] === 'login') {   //Cambiar aqui


        $rows = ConectordeBD::ejecutarLogin($_POST['nombreUsuario'], $_POST['clave']); //Cambiar aqui


        $arrAuth = array(
            "usuario" => $rows['Nombre'],
            "password" => $rows['Password'],
            //"nombreCompleto" => "Carlos Perez",

        );


        if ($arrAuth['usuario'] === $_POST['nombreUsuario']) { //Cambiar aqui
            //clave exista

            if ($arrAuth['password'] === $_POST['clave']) { //Cambiar aqui
                /*
                UtilidadesSesion::guardarEnSesion('nombreCompleto', $arrAuth['nombreCompleto']);
                UtilidadesSesion::guardarEnSesion('edad', $arrAuth['edad']);*/

                header("Location:menuPrincipal.php");
            } else {
                $sMensajeError .= '<br/>Usuario o clave incorrectas.';
                $bHayError = true;
            }
        } else {
            $sMensajeError .= '<br/>Usuario o clave incorrectas.';
            $bHayError = true;
        }
    }
}

?>

<!DOCTYPE html>


<html><head lang="en"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <!-- estilos en pagina -->
    <style>


    </style>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="application/javascript" src="scripts/scripts.js"></script>
</head>
<body>

<form id="loginForm" method="post" action="" >
    <div id="titulo">Login</div>
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
            <span class="mensajeError" ><?php if($bHayError) { echo $sMensajeError; } ?></span>
            <br/>
            <input name="accion" type="hidden" value="login">
            <input type="submit" id="enviarDatos" name="enviarDatos">
        </li>
    </ul>
</form>


</body></html>

