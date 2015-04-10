
<html> 
	<head>
		 <title> Mantenimiento de usuarios </title>
		 <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body onLoad="cursor()">
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
					<legend>Ingreso de Informaci&oacute</legend>
					
					<form action="mailto:danny-2688@hotmail.com" method="post" enctype="text/plain" id="formulario" name="formulario">
					
						<table>
							<tr>	
								<td>Nombre de Usuario</td>
								<td><input type="text" id="txtNombreU" name="txtNombreU"/> </td>
							</tr>
							<tr>	
								<td>Nombre</td>
								<td><input type="text" id="txtNombreC" name="txtNombreC"/> </td>
							</tr>
							<tr>	
								<td>Primer Apellido</td>
								<td><input type="text" id="txtPrimerA" name="txtPrimerA"/> </td>
							</tr>
							<tr>	
								<td>Segundo Apellido</td>
								<td><input type="text" id="txtSegundoA" name="txtSegundoA"/> </td>
							</tr>
							<tr>
								<td>Edad</td>
								<td><input type="text" id="tedad" name="tedad"/> </td>
							</tr>
							<tr>
								<td>Sexo</td>
								<td> 
									<input type="radio" id="rdbMasculino" name="rdbSexo" value="Masculino"/> Masculino 
									<input type="radio" id="rdbFemenino" name="rdbSexo" value="Femenino"/> Femenino
								</td>
							</tr>
							<tr>
								<td>Tipo de Puesto</td>
								<br/>
								<td> 
									<select name="sltGradoAcademico" id="sltGradoAcademico">
										<option value="GRADO">--Seleccionar Puesto--</option>
										<option value="gerencia">Gerencia</option>
										<option value="resepcionista">Resepcionista</option>
										<option value="tecnico">Técnico</option>
									</select>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="button" name="txtEnviar" value="Registrar" onClick="Validar(formulario)"/>
									<input type="reset" name="txtLimpiar" value="Limpiar" onClick="PoneCursor()" />
								</td>						
							</tr>
						</table>
					</form>
				</fieldset>
			</div> 
		</div>	
	</body>
</html>



















