<?php

require_once 'lib/ConectorS3.php';
$lista=ConectorS3::listadoS3();
$var="hola.txt";
$bucket = new ConectorS3();
if($_POST) {
    if ($_POST['accion'] === 'borrado') {
        $bucket->borrarS3($_POST['idXBorrado']);
    }

    if ($_POST['accion2'] === 'descargar') {
        $url=$bucket->descargaS3($_POST['idXBorrado']);
        header ('Location: '. $url);
    }

}
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Mantenimiento de Respaldos
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <br><h1>Men&uacute; de respaldos</h1><br><br><br>
        </div>
        <div class="decorate">

        <div class="interface">

            <br><br>
            <table>
                <tr>
                    <th><h2>Menu principal</h2></th>
                    <th><a href="menuPrincipal.php"><img src="imag/ir.jpg"title="	"></a></th>
                </tr>
                <div style="text-align:center;>
                    <table>
                    <style>
                    table, th, td {
                    border: 1px solid black;
                    }
                    </style>
                    <tr>
                    <th>Respaldo</th>
                    <th>Accion</th>
                    <th>Accion</th>
                    </tr>

                <?php
                foreach ($lista as $file) { ?>

                    <form id="modificarCantProducto" action="menuRespaldos.php" method="post">

                <tr>
                    <td><?php echo $file['Key'];?>
                        <input name="idXBorrado" value="<?php echo $file['Key']; ?>" type="hidden">

                    </td>
                    <td><input type="submit" value="borrado" name="accion"></td>
                    <td><input type="submit" value="descargar" name="accion2"></td>
                </tr>

                </form>
                <?php } ?>
                </table>
          </div>

              </div>
            </table>
        </div>
    </div>
    <p>
        Web/It Developers
    </p>
</body>

</html>