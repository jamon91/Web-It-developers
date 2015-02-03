function PoneCursor(){
					manEmpleado.nombreEmpleado.focus();
					return true;
                }
		
				function validacion(manEmpleado){
				if(manEmpleado.nombreEmpleado.value==""){
					alert ("Debe de digitar el nombre del Empleado");
					manEmpleado.nombreEmpleado.focus();
					return false;
				}
				
				if(manEmpleado.txtPrimerA.value==""){
					alert ("Debe de digitar el primer Apellido");
					manEmpleado.txtPrimerA.focus();
					return false;
				}
				
				if(manEmpleado.txtSegundoA.value==""){
					alert ("Debe de digitar el segundo Apellido");
					manEmpleado.txtSegundoA.focus();
					return false;
				}
				
				if(manEmpleado.tedad.value==""){
					alert ("Debe de ingresar la edad");
					manEmpleado.tedad.focus();
					return false;
				}
				
				if(manEmpleado.numTelefono.value==""){
					alert ("Debe de ingresar el Numero de telefono");
					manEmpleado.numTelefono.focus();
					return false;
				}
				
				if(manEmpleado.numCedula.value==""){
					alert ("Debe de ingresar el Numero de Cedula");
					manEmpleado.numCedula.focus();
					return false;
				}
				
				if(manEmpleado.Email.value==""){
					alert ("Debe de ingresar el correo electronico");
					manEmpleado.Email.focus();
					return false;
				}
				
				if(manEmpleado.Tipo.value == "Seleccionar"){
					alert ("Debe de ingresar selecccionar el tipo de puesto del empleado");
					manEmpleado.Tipo.focus();
					return false;
				}
				
				if(manEmpleado.txtaComentario.value==""){
					alert ("Debe escribir la direccion del empleado");
					manEmpleado.txtaComentario.focus();
					return false;
				}
				
				if (confirm("¿Desea enviar los datos?")){
					manEmpleado.submit();
					return true;
				} else {
					alert ("Los datos no fueron enviados")
				}
				
				//<!-- Final de la página FormularioV1 -->
				
				
			} 