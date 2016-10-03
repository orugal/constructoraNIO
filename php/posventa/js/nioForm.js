$(document).ready(function()
{
	if(!nioForm.esMovil())
	{
		nioForm.calculaAlto();
		nioForm.parallax();
	}
});

var nioForm =
{
	calculaAlto:function()
	{
		//alert("kjhdjashdkjhk");
		var altoVentana = $("#myCarousel").height();
		var medio 		= ((parseInt(altoVentana) / 2) - 300);
	},
	parallax:function(){
		//alert("dlfhsdkfjh")
		$('.amenities').parallax("100%", 0.10);
	},
	esMovil:function()
	{
		var salida = false;
	  	var dispositivo = navigator.userAgent.toLowerCase();
      	if( dispositivo.search(/iphone|ipod|ipad|android/) > -1 )
      	{
	      	salida = true;
  		}
  		return salida;
	},
	validarEmail:function(email) 
	{
	    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	    if (!expr.test(email))
	    {
	       return false;
	    }
	    else
	    {
	    	return true;
	    }

	},
	getTorre:function(e)
	{
		var id = $(e).val();
		$.ajax({
	        url:  "php/posventa/ajax.php",
	        data: "accion=1&id="+id,
	        type: "POST",
	        dataType: "json",
	        success:function(data)
	        {
	        	$("#selectTorre").html(data.datos);
	        },
	        error:function(e) {
	            //$("#ERRORES").html(e.statusText + e.status + e.responseText);
	        }
	    });
	},
	getApto:function(e)
	{
		var id = $(e).val();
		$.ajax({
	        url:  "php/posventa/ajax.php",
	        data: "accion=2&id="+id,
	        type: "POST",
	        dataType: "json",
	        success:function(data)
	        {
	        	$("#selectApto").html(data.datos);
	        },
	        error:function(e) {
	            //$("#ERRORES").html(e.statusText + e.status + e.responseText);
	        }
	    });
	},
	enviaWebServicePostVenta:function()
	{
		//declaración de campos
		var nombre 			= 	$("#nombre").val();
		var apellidos 		= 	$("#apellidos").val();
		var tipoDoc 		= 	$("#tipoDoc").val();
		var cedula 			= 	$("#cedula").val();
		var celular 		= 	$("#celular").val();
		var telefono 		= 	$("#telefono").val();
		var correo 			= 	$("#correo").val();
		var solicitante 	= 	$("#solicitante").val();
		var proyecto 		= 	$("#proyecto").val();
		var torre 			= 	$("#torre").val();
		var apto 			= 	$("#apto").val();
		var fechaEntrega	= 	$("#fechaEntrega").val();
		var tipoInmueble	= 	$("#tipoInmueble").val();
		var espacio 		= 	$("#espacio").val();
		var tipoDano 		= 	$("#tipoDano").val();
		var desc 			= 	$("#desc").val();
		//validación de campos

		if(nombre == "")
		{
			nioForm.alerta("Atención!!","Recuerde que debe escribir su nombre.",function(){},'info');
		}
		else if(apellidos == "")
		{
			nioForm.alerta("Atención!!","Recuerde que debe escribir sus apellidos completos.",function(){},'info');
		}
		else if(tipoDoc == "")
		{
			nioForm.alerta("Atención!!","Por favor seleccione un tipo de documento de identidad.",function(){},'info');
		}
		else if(cedula == "")
		{
			nioForm.alerta("Atención!!","Debe escribir el número de su documento de identidad.",function(){},'info');
		}
		else if(cedula != "" && isNaN(cedula))
		{
			nioForm.alerta("Atención!!","El documento de identidad sólo debe contener números.",function(){},'info');
		}
		else if(celular == "")
		{
			nioForm.alerta("Atención!!","Debe escribir un número de celular de contacto.",function(){},'info');
		}
		else if(celular != "" && isNaN(celular))
		{
			nioForm.alerta("Atención!!","El campo celular sólo debe contener números.",function(){},'info');
		}
		else if(telefono != "" && isNaN(telefono))
		{
			nioForm.alerta("Atención!!","El campo teléfono fijo sólo debe contener números.",function(){},'info');
		}
		else if(correo == "")
		{
			nioForm.alerta("Atención!!","Debe escribir un correo electrónico válido.",function(){},'info');
		}
		else if(correo != "" && !nioForm.validarEmail(correo))
		{
			nioForm.alerta("Atención!!","Por favor escriba un correo electrónico válido.",function(){},'info');
		}
		else if(proyecto == "")
		{
			nioForm.alerta("Atención!!","Debe seleccionar el proyecto.",function(){},'info');
		}
		else if(torre == "")
		{
			nioForm.alerta("Atención!!","Debe seleccionar la torre del proyecto seleccionado.",function(){},'info');
		}
		else if(apto == "")
		{
			nioForm.alerta("Atención!!","Debe seleccionar el apartamento.",function(){},'info');
		}
		else if(tipoInmueble == "")
		{
			nioForm.alerta("Atención!!","Debe seleccionar el tipo de inmueble.",function(){},'info');
		}
		else if(tipoDano == "")
		{
			nioForm.alerta("Atención!!","Debe seleccionar el tipo de daño.",function(){},'info');
		}
		else if(desc == "")
		{
			nioForm.alerta("Atención!!","Por favor escriba una breve descripción con respecto a su solicitud.",function(){},'info');
		}
		else
		{
			var dataForm = $("#formEnvio").serialize();


			swal(
			{
				title: "Confirmación",
				text: "Está a punto de enviar una solicitud, verifique que la información ingresada esté corresta, si este es el caso, desea continuar?",
				type: "info",
				showCancelButton: true,
				//confirmButtonText:"Yes, delete it!",
				showLoaderOnConfirm: true,
				closeOnConfirm: false 
			}, 
				function()
				{
					 var formulario = new FormData(document.getElementById("formEnvio"));
					 formulario.append("accion", "3");

					$.ajax({
				        url:  "php/posventa/ajax.php",
				        data: formulario,
				        type: "POST",
				        dataType: "json",
				        cache: false,
				        contentType: false,
				        processData: false,
			          	beforeSend: function(objeto)
			          	{
			          			
			          	},
				        success:function(json)
				        {
				        	if(json.continuar == 1)
				        	{
								nioForm.alerta("Atención!!",json.mensaje,function(){location.reload();},'info');	
				        	}
				        	else
				        	{
								nioForm.alerta("Atención!!",json.mensaje,function(){location.reload();},'info');	
				        	}
				        },
				        error:function(e) {
				            //$("#ERRORES").html(e.statusText + e.status + e.responseText);
				        }
				    });
				}

			);
		}
	},
	enviaPqr:function()
	{
		//declaración de campos
		var titulo 			= 	$("#titulo").val();
		var nombre 			= 	$("#nombre").val();
		var apellidos 		= 	$("#apellidos").val();
		var tipoDoc 		= 	$("#tipoDoc").val();
		var cedula 			= 	$("#cedula").val();
		var celular 		= 	$("#celular").val();
		var telefono 		= 	$("#telefono").val();
		var correo 			= 	$("#correo").val();
		var area 	= 	$("#area").val();
		var desc 			= 	$("#desc").val();
		//validación de campos

		if(nombre == "")
		{
			nioForm.alerta("Atención!!","Recuerde que debe escribir su nombre.",function(){},'info');
		}
		else if(apellidos == "")
		{
			nioForm.alerta("Atención!!","Recuerde que debe escribir sus apellidos completos.",function(){},'info');
		}
		else if(tipoDoc == "")
		{
			nioForm.alerta("Atención!!","Por favor seleccione un tipo de documento de identidad.",function(){},'info');
		}
		else if(cedula == "")
		{
			nioForm.alerta("Atención!!","Debe escribir el número de su documento de identidad.",function(){},'info');
		}
		else if(cedula != "" && isNaN(cedula))
		{
			nioForm.alerta("Atención!!","El documento de identidad sólo debe contener números.",function(){},'info');
		}
		else if(celular == "")
		{
			nioForm.alerta("Atención!!","Debe escribir un número de celular de contacto.",function(){},'info');
		}
		else if(celular != "" && isNaN(celular))
		{
			nioForm.alerta("Atención!!","El campo celular sólo debe contener números.",function(){},'info');
		}
		else if(telefono != "" && isNaN(telefono))
		{
			nioForm.alerta("Atención!!","El campo teléfono fijo sólo debe contener números.",function(){},'info');
		}
		else if(correo == "")
		{
			nioForm.alerta("Atención!!","Debe escribir un correo electrónico válido.",function(){},'info');
		}
		else if(correo != "" && !nioForm.validarEmail(correo))
		{
			nioForm.alerta("Atención!!","Por favor escriba un correo electrónico válido.",function(){},'info');
		}
		else if(area == "")
		{
			nioForm.alerta("Atención!!","Debe seleccionar el área involucrada.",function(){},'info');
		}
		else if(desc == "")
		{
			nioForm.alerta("Atención!!","Por favor escriba una breve descripción con respecto a su solicitud.",function(){},'info');
		}
		else
		{
			var dataForm = $("#formEnvio").serialize();


			swal(
			{
				title: "Confirmación",
				text: "Está a punto de enviar una solicitud, verifique que la información ingresada esté corresta, si este es el caso, desea continuar?",
				type: "info",
				showCancelButton: true,
				//confirmButtonText:"Yes, delete it!",
				showLoaderOnConfirm: true,
				closeOnConfirm: false 
			}, 
				function()
				{
					 var formulario = $("#formEnvio").serialize()+"&accion=4";

					$.ajax({
				        url:  "php/posventa/ajax.php",
				        data: formulario,
				        type: "POST",
				        dataType: "json",
			          	beforeSend: function(objeto)
			          	{
			          			
			          	},
				        success:function(json)
				        {
				        	if(json.continuar == 1)
				        	{
								nioForm.alerta("Atención!!",json.mensaje,function(){location.reload();},'info');	
				        	}
				        	else
				        	{
								nioForm.alerta("Atención!!",json.mensaje,function(){location.reload();},'info');	
				        	}
				        },
				        error:function(e) {
				            //$("#ERRORES").html(e.statusText + e.status + e.responseText);
				        }
				    });
				}

			);
		}
	},
	alerta:function(titulo,mensaje,callback,tipo)
	{
		swal({
			title:titulo,
			"text":mensaje,
			"type":tipo,
			"html":true,
			"confirmButtonColor":"#FF8E4C"
		},function(){
			callback();
		});
	}

}