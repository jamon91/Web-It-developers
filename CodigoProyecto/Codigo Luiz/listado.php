<?php
var_dump($_POST);
require_once 'lib/ConectorS3.php';
$lista=ConectorS3::listadoS3();
$var="hola.txt";
$bucket = new ConectorS3();
if($_POST) {
    if ($_POST['accion'] === 'borrado') {
        $bucket->borrarS3($_POST['idXBorrado']);
    }

    if ($_POST['accion'] === 'descargar') {
        $url=$bucket->descargaS3($_POST['idXBorrado']);
        header ('Location: '. $url);
    }

}
?>
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

<form id="modificarCantProducto" action="listado.php" method="post">

    <tr>
             <td><?php echo $file['Key'];?>
                 <input name="idXBorrado" value="<?php echo $file['Key']; ?>" type="hidden">

             </td>
             <td><input type="submit" value="borrado"  name="accion"></td>
             <td><input type="submit" value="descargar" name="accion"></td>

         </tr>

</form>



<?php } ?>

</table>