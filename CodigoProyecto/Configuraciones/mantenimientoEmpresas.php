<!-- 
	Elaborado por: 					Esteban Armando Guevara Brenes.
	Fecha de creación:    			Jueves 21 de Junio de 2012
	Fecha de ultima modificación: 	Jueves 21 de Junio de 2012 -- 10:24 p.m.
	Versión:						1.0.0.0
	Proyecto 1
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Empresas</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>

<body onload="setFocusInicio()">
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
					<!-- Formulario en HTML -->
					<form action="mailto:eaguevarabrenes@yahoo.com" method="get" name="frmSolicitar">
						<fieldset>
							<legend>Empresas</legend>
							<br />

							<!-- Codigo de la empresa -->
							<label id="lblCodigo">C&oacute;digo de la empresa:</label>
							<input id="txtCodigo" maxlength="15" name="txtCodigo" size="15" type="text" />
							<br />
							
							<!-- Nombre de la empresa -->
							<label id="lblNombreEmpresa">Nombre de la empresa:</label>
							<input id="txtNombreEmpresa" maxlength="50" name="txtNombre" size="50" type="text" />
							<br />
							
							<!-- Teléfono Uno -->
							<label id="lblTelefonoUno">Tel&eacute;fono uno:</label>
							<input id="txtTelefonoUno" maxlength="9" name="txtTelefonoUno" size="9" type="text" />
							<br />
							
							<!-- Teléfono Dos -->
							<label id="lblTelefonoDos">Tel&eacute;fono dos:</label>
							<input id="txtTelefonoDos" maxlength="9" name="txtTelefonoDos" size="9" type="text" />
							<br />
							
							<!-- Nombre contacto -->
							<label id="lblNombreContacto">Nombre del contacto:</label>
							<input id="txtNombreContacto" maxlength="50" name="txtNombreContacto" size="50" type="text" />
							<br />
							
							<!-- Direccion -->
							<label id="lblDireccion">Direcci&oacute;n de la empresa:</label>
							<textarea id="txtaDireccion" cols="70" name="txtaDireccion" rows="5"></textarea>
							<br />
							
							<!-- Botón Guardar y Reset -->
							<input id="btnGuardar" name="btnGuardar" onclick="validarFormulario()" type="button" value="Guardar" /> &nbsp;&nbsp;&nbsp;
							<input id="btnCancelar" name="btnCancelar" onclick="setFocusInicio()" type="reset" value="Limpiar" />
						</fieldset>
					</form>
				</div>
		</div>	
</body>

</html>
