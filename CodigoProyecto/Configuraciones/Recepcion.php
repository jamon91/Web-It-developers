<html>
	<head>
    	<title>ELTALLERCITO</title>
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
                    <div class="button"><a href="asociacion.html">Asiganci&oacute;n Equipos</a></div>
            </div>	
            <div class="interface">
            	<fieldset>
                	<legend>Ingreso de Informaci&oacute;n</legend>
                    <form action="mailto:deybic@gmail.com" id="frmStandart" method="post" enctype="text/plain">
                    	<table>
                        	<tr>
                            	<td colspan="4" align="center">Datos del Cliente</td>
                            	
                            <tr>
                            <tr>
                            	<td>Nombre: </td>
                                <td colspan="4"><input type="text" size="70" id="txtCliente" name="txtCliente" /></td>
                            </tr>
                            <tr>
                            	<td colspan="4" align="center">Informaci&oacute;n del Equipo</td>
                            <tr>
                            <tr>
                            	<td>Marca:</td>
                                <td><input type="text" size="30" id="txtMarca" name="txtMarca" /></td>
                                <td>Modelo:</td>
                                <td><input type="text" size="25" id="txtModelo" name="txtModelo" /></td>
                            </tr>
                            <tr>
                            	<td>S/N:</td>
                                <td><input type="text" size="30" id="txtSerie" name="txtSerie" /></td>
                                <td>Estado:</td>
                                <td>
                                	<select id="sltEstados" name="sltEstados">
										<!-- Option es cada una de las opciones a seleccionar -->
										<option selected="selected" value="estado">- Seleccionar -</option>
										<option>Excelente</option>
										<option>Bueno</option>
										<option>Regular</option>
									</select>
                                </td>
                            </tr>
                            <tr>
                            	<td colspan="4" align="center">DESCRIPCION DEL DA&Ntilde;O</td>
                            </tr>
                            <tr>
                            	<td colspan="4"><textarea id="txtDescripcion" name="txtDescripcion" row="8" cols="60"></textarea></td>
                            </tr>
                            <tr>
                            	<td align="center" colspan="4">
                                	<input type="button" value="Registrar" onClick="validacion(frmStandart)"/> 
									<input type="reset" value="Limpiar" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>
        </div>
    </body>
</html>
