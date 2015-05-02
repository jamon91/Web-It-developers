<?php
require_once('../lib/ConnectordeDatos.php');
$lista=ConnectordeDatos::listarVMS();
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Mantenimiento de Maquinas Virtuales
    </title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">

</head>

<body>
<div class="container">
    <div class="header">
        <br><h1>Mantenimiento de Maquinas Virtuales</h1><br><br><br>
    </div>
    <div class="decorate">
    </div>
    <div class="interface">
        <br><br>
        <table>

            <tr>
                <th>NombreVM</th>
                <th>BdName</th>
                <th>BUser</th>
                <th>version</th>
                <th>configurador</th>

            </tr>
            <?php foreach($lista as $row){ ?>
            <tr>
                <td>
                    <?php echo "{$row["nombreVM"]}" ?>
                </td>
                <td>
                    <?php echo "{$row["BdName"]}" ?>
                </td>
                <td>
                    <?php echo "{$row["BdUser"]}" ?>
                </td>
                <td>
                    <?php echo "{$row["VersionConfiguracion"]}" ?>
                </td>
                <td>
                    <?php echo "{$row["ejectuble"]}" ?>
                </td>
            </tr>
            <?php } ?>

        </table>
</div>
<p>
    Web/It Developers
</p>
</body>
</html>