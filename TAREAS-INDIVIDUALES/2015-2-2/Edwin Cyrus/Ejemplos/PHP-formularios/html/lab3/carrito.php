<?php
session_start();
var_dump($_SESSION);
require_once("lib/UtilidadesSesion.php");
require_once("lib/ConectorDatos.php");
require_once("lib/Carrito.php");
//require_once("lib/productos.php");

//revisamos sesion activa
UtilidadesSesion::revisarSesionActiva();

// nuevo Objeto
$oCarrito = new Carrito();


//construye con arreglo Items de Carrito
$aProductosCarro = $oCarrito->listadoItemesCarrito();

if($_POST) {
    if($_POST['accion'] === 'eliminar') {
        $oCarrito->eliminarDeCarrito($_POST['idProductoXEliminar']);

       // $oCarrito->listadoItemesCarrito();
    }
    if($_POST['accion'] === 'limpiar'){
        $oCarrito->eliminarCarrito();
    }

    if($_POST['accion'] === 'actualizar'){
        $oCarrito->actualizarCantidad($_POST['Modificar'],$_POST['Producto']);
    }
}

?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <style>
            div { border: solid 1px grey;padding: 5px;}
        </style>
    </head>
    <body>
        <div id="header">
            Bienvenido <?php echo $_SESSION['nombreCompleto']; ?>
        </div>
        <div>
            <form id="Retroceder" action="productos.php">
                <input type="submit" value="Retroceder">
            </form>
        </div>
        <div>Productos agregados</div>
        <div id="productosDeCarrito">
            <hr>
            <?php foreach($aProductosCarro as $aDatosProducto) { ?>
                <ul>
                    <li>Producto:  <?php echo $aDatosProducto['modelo']; ?></li>
                    <li>Marca:     <?php echo $aDatosProducto['marca']; ?></li>
                    <li>Precio:    <?php echo $aDatosProducto['precio']; ?></li>
                    <li>  <form id="cantidad-<?php echo $cant = $aDatosProducto['cantidad']; ?>" action="carrito.php" method="post">
                        Cantidad:   <input name="Modificar" type="number" value="<?php echo $cant;?>">
                                    <input name="Producto" type="hidden value" value="<?php echo $aDatosProducto;?>">
                                    <input name="accion" type="hidden" value="actualizar">
                                    <input type="submit" value="Actualizar Cantidad" >
                        </form></li>
                    <li><form id="eliminarProducto-<?php echo $sIdProducto=$aDatosProducto['id']; ?>" action="carrito.php" method="post">
                            <input name="idProductoXEliminar" type="hidden" value="<?php echo $sIdProducto; ?>">
                            <input name="accion" type="hidden" value="eliminar">
                            <input type="submit" value="Eliminar de Carrito">

                        </form></li>

                </ul>

            <?php } ?>

        </div>
                <form id="limpiar" action="carrito.php" method="post">
                    <input name="accion" type="hidden" value="limpiar">
                    <input type="submit" value="Limpiar Carrito">
                </form>
    </body>
</html>
