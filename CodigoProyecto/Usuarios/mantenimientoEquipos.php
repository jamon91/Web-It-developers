<html>
	<head>
		<title>
			Formularios
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Elaborado por: Luis Acuña Pilarte -->
		<!-- Fecha de creación:  20/06/2012 7:04 pm-->
		<!-- Ultima modificación:  20/06/2012 9:24 pm-->
	</head>
	<body onLoad="PoneCursor()">
			<div class="container">
        	<div class="header">
			</div>
            <div class="decorate">
			</div>
            <div class="menuContainer">
                	<div class="button"><a href="portada.html">Inicio</a></div>
                    <div class="button"><a href="mantenimientoEmpresas.html">Empresas</a></div>
                    <div class="button"><a href="mantenimientoEquipos.html">Equipos</a></div>
                    <div class="button"><a href="mantenimientoUsuarios.html">Usuarios</a></div>
                    <div class="button"><a href="Recepcion.html">Recepci&oacute;n Equipos</a></div>
                    <div class="button">Asignaci&oacute;n Equipos</div>
             </div>	
            <div class="interface">
				<fieldset>
					<legend>Ingrese su informaci&oacute;n</legend>
					<form action="mailto:elcorreodeluiz@gmail.com" method="get" name="manEquipo" id="manEquipo">
						<table border="1">
							<tr>
								<td>Nombre del equipo:</td>
								<td><input type="text" size="20" id="nomEquipo" name="nomEquipo"/></td>
							</tr>
							<tr>
								<td>N&uacute;mero de serie:</td>
								<td><input type="text" size="20" id="numSerie" name="numSerie"/></td>
							</tr>
							<tr>
							<td>Tipo:</td>
								<td>
									<select id="Tipo" name="Tipo">
										<option selected="selected" value="Seleccionar">- Seleccionar -</option>
										<option value="Alta">Computadora</option>
										<option value="Normal">Impresora</option>
										<option value="Leve">Otros</option>
									</select>
								</td>
							</tr>
							<td>Urgencia:</td>
								<td>
									<select id="Urgencia" name="Urgencia">
										<option selected="selected" value="Seleccionar">- Seleccionar -</option>
										<option value="Alta">Alta</option>
										<option value="Normal">Normal</option>
										<option value="Leve">Leve</option>
									</select>
								</td>
							</tr>
							<tr>
								<td valign="top">Descripci&oacute;n de daño:</td>
								<td>
									<textarea id="txtaComentario" name="txtaComentario" rows="6" cols="40"></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<input type="button" value="Enviar" onClick="validacion(manEquipo)"/> 
									<input type="reset" value="Limpiar"/>
								</td>
								<td>
								</td>
							</tr>
						</table>
					</form>
				</fieldset>
			</div> 
		</div>	
	</body>	
	<!-- Final de la página -->
</html>