$(document).ready(function()
{
	if(!nio.esMovil())
	{
		nio.calculaAlto();
		nio.parallax();
	}
});

var nio =
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
	        url:  "ajax.php",
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
	        url:  "ajax.php",
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
			nio.alerta("Atención!!","Recuerde que debe escribir su nombre.",function(){},'info');
		}
		else if(apellidos == "")
		{
			nio.alerta("Atención!!","Recuerde que debe escribir sus apellidos completos.",function(){},'info');
		}
		else if(tipoDoc == "")
		{
			nio.alerta("Atención!!","Por favor seleccione un tipo de documento de identidad.",function(){},'info');
		}
		else if(cedula == "")
		{
			nio.alerta("Atención!!","Debe escribir el número de su documento de identidad.",function(){},'info');
		}
		else if(cedula != "" && isNaN(cedula))
		{
			nio.alerta("Atención!!","El documento de identidad sólo debe contener números.",function(){},'info');
		}
		else if(celular == "")
		{
			nio.alerta("Atención!!","Debe escribir un número de celular de contacto.",function(){},'info');
		}
		else if(celular != "" && isNaN(celular))
		{
			nio.alerta("Atención!!","El campo celular sólo debe contener números.",function(){},'info');
		}
		else if(telefono != "" && isNaN(telefono))
		{
			nio.alerta("Atención!!","El campo teléfono fijo sólo debe contener números.",function(){},'info');
		}
		else if(correo == "")
		{
			nio.alerta("Atención!!","Debe escribir un correo electrónico válido.",function(){},'info');
		}
		else if(correo != "" && !nio.validarEmail(correo))
		{
			nio.alerta("Atención!!","Por favor escriba un correo electrónico válido.",function(){},'info');
		}
		else if(proyecto == "")
		{
			nio.alerta("Atención!!","Debe seleccionar el proyecto.",function(){},'info');
		}
		else if(torre == "")
		{
			nio.alerta("Atención!!","Debe seleccionar la torre del proyecto seleccionado.",function(){},'info');
		}
		else if(apto == "")
		{
			nio.alerta("Atención!!","Debe seleccionar el apartamento.",function(){},'info');
		}
		else if(tipoInmueble == "")
		{
			nio.alerta("Atención!!","Debe seleccionar el tipo de inmueble.",function(){},'info');
		}
		else if(tipoDano == "")
		{
			nio.alerta("Atención!!","Debe seleccionar el tipo de daño.",function(){},'info');
		}
		else if(desc == "")
		{
			nio.alerta("Atención!!","Por favor escriba una breve descripción con respecto a su solicitud.",function(){},'info');
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
					$.ajax({
				        url:  "ajax.php",
				        data: dataForm+"&accion=3",
				        type: "POST",
				        dataType: "json",
				        success:function(json)
				        {
				        	if(json.continuar == 1)
				        	{
								nio.alerta("Atención!!",json.mensaje,function(){location.reload();},'info');	
				        	}
				        	else
				        	{
								nio.alerta("Atención!!",json.mensaje,function(){location.reload();},'info');	
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