<?php
require_once('../lib/ConnectordeDatos.php');

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
            <?php
            $lista=ConectordeBD::listarVMS();
            $directory = "archivos";
            foreach($lista as $row) {
                foreach (glob($directory . '/*.sh') as $file) {
                    $valor = "{$row['ejectuble']}";
                    $valor2 = basename($file);
                    if ($valor2 === $valor) { ?>
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
                                <?php  echo '<a href="' . $file . '">' . "{$row['ejectuble']}" . ' ' . '</a>';?>

                            </td>
                        </tr>
                    <?php }
                }
            }
            ?>
            <tr>
                <th><h2>Volver a la configuracion de la maquina virtual</h2></th>
                <th><a href="VMConfiguracion.php"><img src="../imag/ir.jpg"title="	"></a></th>
            </tr>
        </table>
    </div>
    <p>
        Web/It Developers
    </p>
</body>
</html>