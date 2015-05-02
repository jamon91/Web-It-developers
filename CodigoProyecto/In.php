<?php
/**
 * Created by PhpStorm.
 * User: estudiante
 * Date: 26/04/15
 * Time: 09:48 PM
 */

?>

<!DOCTYPE html>

<html>

<head>
	<title>
Index
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			</br>
			<h1>Login para la aplicaci&oacuten CLIMA</h1>
		</div>
		<div class="decorate">
		</div>
		<div class="incioSesion">
			<form action="index.php" id="frmStandart" method="post" enctype="text/plain" >
				<table align="center">
					<tr>
						<td>Usuario:</td>
						<td><input type="text" size="20" id="txtUsuario" name="txtUsuario" /></td>
					</tr>
					<tr>
						<td>Contrase&ntilde;a:</td>
						<td><input type="PASSWORD" size="20" id="txtPass" name="txtPass" /></td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<br>
                            <input name="accion" type="hidden" value="ingresar">
							<input type="submit" value="Ingresar" />
						</td>
					</tr>
				</table>
			</form>
		</div>

		<div class="imag">

		</div>

	</div>
	<p>
Web/It Developers
</p>
</body>

</html>