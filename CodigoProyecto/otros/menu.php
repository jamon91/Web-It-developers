<html>
	<head>
		<title>
			Formularios
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Elaborado por: Luis Acuña Pilarte -->
		<!-- Fecha de creación:  02/01/2015 1:03 pm-->
		<!-- Ultima modificación:  02/01/2015 1:03 pm-->
		<script type='text/javascript' src='java/java.js'></script>
	</head>
	<body onLoad="PoneCursor()">
			<div class="container">
				<div class="header">
					<div align="center"> <IMG SRC="sirhcap..jpg" WIDTH=500 HEIGHT=100 ALT="Logo de la empresa" border=0></div>
				</div>
				<div class="decorate">
			</div>
            <div class="interface">	
				<fieldset>
					<legend>Ingrese su informaci&oacute;n</legend>
					<form action="FormularioV1.html" method="get" name="manEmpleado" id="manEmpleado">
						<table border="0">
							<tr>
								<td>Nombre:</td>
								<td><input type="text" size="20" id="nombreEmpleado" name="nombreEmpleado"/></td>
							</tr>
							<tr>	
								<td>Primer Apellido:</td>
								<td><input type="text" id="txtPrimerA" name="txtPrimerA"/> </td>
							</tr>
							<tr>	
								<td>Segundo Apellido:</td>
								<td><input type="text" id="txtSegundoA" name="txtSegundoA"/> </td>
							</tr>
							<tr>
							<td>Edad:</td>
								<td><input type="text" id="tedad" name="tedad"/> </td>
							</tr>
							<tr>
								<td>N&uacute;mero de telefono:</td>
								<td><input type="text" size="20" id="numTelefono" name="numTelefono"/></td>
							</tr>
							<tr>
							<td>N&uacute;mero de cedula:</td>
								<td><input type="text" size="20" id="numCedula" name="numCedula"/></td>
							</tr>
							<td>E-mail:</td>
								<td><input type="text" size="20" id="Email" name="Email"/></td>
							</tr>
							<tr>
								<td>Sexo:</td>
								<td> 
									<input type="radio" id="rdbMasculino" name="rdbSexo" value="Masculino"/> Masculino 
									<input type="radio" id="rdbFemenino" name="rdbSexo" value="Femenino"/> Femenino
								</td>
							</tr>
							<tr>
							<td>Tipo de Puesto:</td>
								<td>
									<select id="Tipo" name="Tipo">
										<option value="GRADO">--Seleccionar Puesto--</option>
										<option value="gerencia">Gerencia</option>
										<option value="resepcionista">Resepcionista</option>
										<option value="tecnico">Técnico</option>
									</select>
								</td>
							</tr>
							<tr>
								<td valign="top">Direcci&oacuten de la Empresa:</td>
								<td>
									<textarea id="direEmpresa" name="txtaComentario" rows="3" cols="80"></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<input type="button" value="Enviar" onClick="validacion(manEmpleado)"/> 
									<input type="reset" value="Limpiar"/>
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