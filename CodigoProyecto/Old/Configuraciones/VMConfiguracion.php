<?php
	//echo shell_exec('sh /var/www/BITIC-25/BITIC-PROYECTO-WEB-1-2015-1/Ejemplos/PHP-formularios/html/Web-It-developers/CodigoProyecto/Configuraciones/MaquinaVirtual.sh');
    //echo shell_exec("MaquinaVirtual");
    echo shell_exec(escapeshellcmd('/var/www/BITIC-25/BITIC-PROYECTO-WEB-1-2015-1/Ejemplos/PHP-formularios/html/Web-It-developers/CodigoProyecto/Configuraciones/MaquinaVirtual.sh'));
    echo " test";
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<title> Configuracion de la maquina virtual </title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body onLoad="cursor()">
	<div class="container">
		</br>
		</br>
		</br>
		</br>
		<div class="menuContainer">
			<div class="button"><a href="../menuPrincipal.php">Menu principal</a></div>
		</div>
		</br>
		<div class="interface">
			<fieldset>
				<legend>Presione el boton aceptar para crear la maquina virtual con su configuracion</legend>
				<form name="frmCedula" method="post" action="consultarUsuario.php">
					<input type="submit" value="Aceptar">
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