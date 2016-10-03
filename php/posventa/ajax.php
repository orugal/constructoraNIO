<?php 
/*
 ("`-''-/").___....''"`-._
      `6_ 6  )   `-.  (     ).`-.__.`) 
      (_Y_.)'  ._   )  `._ `. ``-..-'
    _..`..'_..-_/  /..'_.' ,'
   (il),-''  (li),'  ((!.-'

   Desarrollado por  @orugal
   https://github.com/orugal
   Manejo del ajax del form de constructora nio
   @date 26 de Agosto de 2016
   @author Farez Prieto
 */
//inicializa el archivo de configuracion interna del portal
require_once('../../config/configuracion.php');
//inicializa la conecion
include('../../config/conexion_3.php');

session_start();
extract($_REQUEST);

if(isset($_SESSION['nioGLPI']))
{
	if($accion ==1)//select dependiente Torres
	{
		$locations			= consultaSelect($id);
		if(count($locations) > 0)
		{
			$select   = '<label class="visible-sm visible-xs" for="torre">&nbsp;</label>';
			$select  .= '<select type="text" class="form-control" id="torre" name="torre" onchange="nioForm.getApto(this)">';
			$select  .= '	<option value="">SELECCIONE LA TORRE...</option>';
			foreach($locations as $loc)
			{
				$select .= '		<option value="'.$loc['id'].'">'.strtoupper($loc['name']).'</option>';
			}
			$select .= '</select>';

			$salida = array("mensaje"=>"Datos consultados","datos"=>$select,"continuar"=>1);
		}
		else
		{
			$salida = array("mensaje"=>"No hay datos consultados para este ID","datos"=>array(),"continuar"=>0);
		}
	}
	elseif($accion == 2)//select dependiente aptos
	{
		$locations			= consultaSelect($id);
		if(count($locations) > 0)
		{
			$select   = '<label for="apto">&nbsp;</label>';
			$select  .= '<select type="text" class="form-control" id="apto" name="apto">';
			$select  .= '	<option value="">SELECCIONE EL APARTAMENTO...</option>';
			foreach($locations as $loc)
			{
				$select .= '		<option value="'.$loc['id'].'">'.strtoupper($loc['name']).'</option>';
			}
			$select .= '</select>';

			$salida = array("mensaje"=>"Datos consultados","datos"=>$select,"continuar"=>1);
		}
		else
		{
			$salida = array("mensaje"=>"No hay datos consultados para este ID","datos"=>array(),"continuar"=>0);
		}
	}
	elseif($accion == 3)//Envia la solicitud
	{


		//si trae archivo debo subirlo 
		if(isset($_FILES["archivo"])) 
		{
			$tamano 		= $_FILES["archivo"]['size'];//tamaño
		    $tipo 			= $_FILES["archivo"]['type'];//tipo
		    //die($tipo);
		    $archivo		= $_FILES["archivo"]['name'];//nombre
		    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
			$nuevo_nombre = "";
			for($e=0;$e<12;$e++)
			{
				$nuevo_nombre .= substr($str,rand(0,62),1);
			}
			$dir	 =	'archivos/';
			$destino =  '';
			$extencion	= "";
			if($archivo != "")
			{
				//$ext = array('application/vnd.openxmlformats-officedocument.wordprocessingml.document');
				if($tipo == 'image/jpeg' or $tipo == 'image/png' or $tipo == 'image/gif' or $tipo == 'image/pjpg' or $tipo == 'image/x-png' or $tipo=='application/pdf' or $tipo == 'application/msword' or $tipo =='application/vnd.ms-excel' or $tipo == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' or $tipo == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
				{
				 	
				    	if($tipo == 'image/jpeg')
				    	{
				    		$extencion	='jpg';
				    	}		
				    	else if($tipo == 'image/png')
				    	{
				    		$extencion	='png';
				    	}		
				    	else if($tipo == 'image/gif')
				    	{
				    		$extencion	='gif';
				    	}		
				    	else if($tipo == 'image/pjpg')
				    	{
				    		$extencion	='jpg';
				    	}		
				    	else if($tipo == 'image/x-png')
				    	{
				    		$extencion	='png';
				    	}		
				    	else if($tipo == 'application/pdf')
				    	{
				    		$extencion	='pdf';
				    	}		
				    	else if($tipo == 'application/msword')
				    	{
				    		$extencion	='doc';
				    	}		
				    	else if($tipo == 'application/vnd.ms-excel')
				    	{
				    		$extencion	='xls';
				    	}		
				    	else if($tipo == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
				    	{
				    		$extencion	='docx';
				    	}		
				    	else if($tipo == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
				    	{
				    		$extencion	='xlsx';
				    	}	
				    //nombre final
			    	$prefijo	=  $nuevo_nombre.".".$extencion;
			    	//ruta final
			    	$destino	=  $dir.$prefijo;
			    	//die($destino);
			    	if ($archivo != "")
					{
						
						if(copy($_FILES['archivo']['tmp_name'],$destino))
						{ 
							//die("Bien 1!!");
							$continua = true;

				        }
				        else
				        {
				        	//die("Bien 2!!");
				        	$continua = false;
							$salida = array("mensaje"=>"El archivo no pudo ser cargado.",
						            		"continuar"=>0);
				        }
					}
					else
					{
						//die("Bien 3!!");
						$continua = true;
						$prefijo = "";
						$salida = array("mensaje"=>"No hay archivo que cargar.",
						      "continuar"=>1);
					}
				 }
				 else
				 {
				 	//die("Bien 4!!");
				 	$continua = false;
				 	$prefijo = "";
					$salida = array("mensaje"=>"El archivo que ha seleccionado no tiene el formato permitido, recuerde que sólo se permiten archivos de imagen JPG, PNG y archivos de texto de WORD, hojas de EXCEL y PDF ó supera el peso permitido de 1MB",
						      "continuar"=>0);
				 }
			}
			else
			{
				$continua = true;
				$prefijo = "";
				$salida = array("mensaje"=>"No hay archivo que cargar.",
						      "continuar"=>1);
			}

		}
		else
		{
			//die("Bien 5!!");
			$continua = true;
			$prefijo = "";
			$salida = array("mensaje"=>"No viene archivo.",
				     	    "continuar"=>1);
		}






		if($continua == true)
		{
			$envio			= sendTicket($_POST,$destino);
			if(count($envio) > 0)
			{

				$salida = array("mensaje"=>"El ticket ha sido enviado exitosamente, el número de si ticket es <strong>".$envio['id']."</strong>","datos"=>$envio,"continuar"=>1);
			}
			else
			{
				$salida = array("mensaje"=>"No hay datos consultados para este ID","datos"=>array(),"continuar"=>0);
			}
		}
		else
		{
			$salida = array("mensaje"=>"El mensaje no ha podido ser enviar, por favor intente de nuevo más tarde","datos"=>array(),"continuar"=>0);
		}
	}
	elseif($accion == 4)//Solicitud PQR
	{
		$envio			= sendPQR($_POST);
		if(count($envio) > 0)
		{

			$salida = array("mensaje"=>"El ticket ha sido enviado exitosamente, el número de si ticket es <strong>".$envio['id']."</strong>","datos"=>$envio,"continuar"=>1);
		}
		else
		{
			$salida = array("mensaje"=>"No hay datos consultados para este ID","datos"=>array(),"continuar"=>0);
		}
	}
	else
	{
		$salida = array("mensaje"=>"No tiene acceso para ingresar a esta zona","datos"=>array(),"continuar"=>0);
	}
}
else
{
	$salida = array("mensaje"=>"No hay una sesión con GLPI establecida.","datos"=>array(),"continuar"=>0);
}	
echo json_encode($salida);


function sendPQR($data)
{
	global $db;
	extract($data);

	$url					= _URL_GLPI;
	$host					= _HOST_GLPI;
	$protocolo				= _PROT_GLPI;
	$client = new SoapClient(null, array('uri'      => $protocolo.'://' . $host . '/' . $url,
	                                     'location' => $protocolo.'://' . $host . '/' . $url));



	$contenidoArmado             = "INFORMACIÓN ".$titulo."\n\n";
	$contenidoArmado            .= "Nombres: ".$nombre."\n";
	$contenidoArmado            .= "Apellidos: ".$apellidos."\n";
	$contenidoArmado            .= "Tipo de documento de identidad: ".$tipoDoc."\n";
	$contenidoArmado            .= "Nro de documento de identidad: ".$cedula."\n";
	$contenidoArmado            .= "Celular: ".$celular."\n";
	$contenidoArmado            .= "Teléfono fijo: ".$telefono."\n";
	$contenidoArmado            .= "Correo electrónico: ".$correo."\n";
	$contenidoArmado            .= "Área: ".$area."\n";
	$contenidoArmado            .= "Descripción de la solicitud: ".$desc."\n";

	//envio el ticket
	$argsCre['session']			=	$_SESSION['nioGLPI'];
	$argsCre['method']			=	'glpi.createTicket';
	$argsCre['type']			=	1;
	//$argsCre['category']		=	$tipoDano;
	$argsCre['title']			=	"Ticket formulario ".$titulo." Constructora NIO";
	$argsCre['user_email']		=	$correo;
	$argsCre['content']			=	$contenidoArmado;
	$argsCre['use_email_notification']			=	true;
	$ticket						= $client->__soapCall('genericExecute', array(new SoapParam($argsCre, 'params')));

	if(count($ticket) > 0)
	{
		//envio la notificación al correo
		$noti['session']			=	$_SESSION['nioGLPI'];
		$noti['method']				=	'glpi.addTicketFollowup';
		$noti['content']			=	"Ticket de Seguimieto ".$titulo." Constructora NIO";
		$noti['ticket']				=	$ticket['id'];
		$ticketNoti					= $client->__soapCall('genericExecute', array(new SoapParam($noti, 'params')));

		//aca debo guardar en la base de datos la información para que puedan bajarla en excel más adelante
		$query = sprintf("INSERT INTO pqr (
							ticketGLPI,
							nombre,
							apellido,
							tipoDocumento,
							numDoc,
							celular,
							telefono,
							correo,
							observaciones,
							fecha,
							ident) 
							values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
							$ticket['id'],
							$nombre,
							$apellidos,
							$tipoDoc,
							$cedula,
							$celular,
							$telefono,
							$correo,
							$desc,
							date("Y-m-d H:i:s"),
							1); 
		$result = $db->Execute($query);
	}
	return $ticket;
}

function sendTicket($data,$archivo)
{
	global $db;
	extract($data);

	$url					= _URL_GLPI;
	$host					= _HOST_GLPI;
	$protocolo				= _PROT_GLPI;
	$client = new SoapClient(null, array('uri'      => $protocolo.'://' . $host . '/' . $url,
	                                     'location' => $protocolo.'://' . $host . '/' . $url));

	$dataUbi1 = consultaSelect($proyecto,$consulta=true);
	$dataUbi2 = consultaSelect($torre,$consulta=true);
	$dataUbi3 = consultaSelect($apto,$consulta=true);


	$contenidoArmado             = "INFORMACIÓN DE LA SOLICITUD\n\n";
	$contenidoArmado            .= "Nombres: ".$nombre."\n";
	$contenidoArmado            .= "Apellidos: ".$apellidos."\n";
	$contenidoArmado            .= "Tipo de documento de identidad: ".$tipoDoc."\n";
	$contenidoArmado            .= "Nro de documento de identidad: ".$cedula."\n";
	$contenidoArmado            .= "Celular: ".$celular."\n";
	$contenidoArmado            .= "Teléfono fijo: ".$telefono."\n";
	$contenidoArmado            .= "Correo electrónico: ".$correo."\n";
	$contenidoArmado            .= "Tipo de inmueble: ".$tipoInmueble."\n";
	$contenidoArmado            .= "Espacio: ".$espacio."\n";
	$contenidoArmado            .= "Ubicación: ".$dataUbi1[0]['name']." > ".$dataUbi2[0]['name']." > ".$dataUbi3[0]['name']."\n";

	if(!empty($archivo))
	{

		$fileText					 = _DOMINIO."php/posventa/".$archivo;
		$contenidoArmado            .= "Archivo: "._DOMINIO."php/posventa/".$archivo."\n\n";
	}
	else
	{
		$fileText					 = "";
		$contenidoArmado            .= "\n";
	}

	$contenidoArmado            .= "Descripción de la solicitud: ".$desc."\n";

	//envio el ticket
	$argsCre['session']			=	$_SESSION['nioGLPI'];
	$argsCre['method']			=	'glpi.createTicket';
	$argsCre['type']			=	1;
	$argsCre['category']		=	$tipoDano;
	$argsCre['title']			=	"Ticket formulario POSTVENTA Constructora NIO";
	$argsCre['user_email']		=	$correo;
	$argsCre['content']			=	$contenidoArmado;
	$argsCre['use_email_notification']			=	true;
	$ticket						= $client->__soapCall('genericExecute', array(new SoapParam($argsCre, 'params')));

	if(count($ticket) > 0)
	{
		//envio la notificación al correo
		$noti['session']			=	$_SESSION['nioGLPI'];
		$noti['method']				=	'glpi.addTicketFollowup';
		$noti['content']			=	"Ticket de Seguimieto Constructora NIO";
		$noti['ticket']				=	$ticket['id'];
		$ticketNoti					= $client->__soapCall('genericExecute', array(new SoapParam($noti, 'params')));

		//aca debo guardar en la base de datos la información para que puedan bajarla en excel más adelante
		$query = sprintf("INSERT INTO tickets (
							ticketGLPI,
							nombre,
							apellido,
							tipoDocumento,
							numDoc,
							celular,
							telefono,
							correo,
							tipoInmueble,
							espacio,
							ubicacion,
							proyecto,
							proyectoId,
							torre,
							torreId,
							apto,
							aptoId,
							archivo,
							observaciones,
							fecha) 
							values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
							$ticket['id'],
							$nombre,
							$apellidos,
							$tipoDoc,
							$cedula,
							$celular,
							$telefono,
							$correo,
							$tipoInmueble,
							$espacio,
							$dataUbi1[0]['name']." > ".$dataUbi2[0]['name']." > ".$dataUbi3[0]['name'],
							$dataUbi1[0]['name'],
							$proyecto,
							$dataUbi2[0]['name'],
							$torre,
							$dataUbi3[0]['name'],
							$apto,
							$fileText,
							$desc,
							date("Y-m-d H:i:s")); 
		$result = $db->Execute($query);
	}
	return $ticket;
}

function consultaSelect($id,$consulta=false)
{
	$url					= _URL_GLPI;
	$host					= _HOST_GLPI;
	$protocolo				= _PROT_GLPI;
	$client = new SoapClient(null, array('uri'      => $protocolo.'://' . $host . '/' . $url,
	                                     'location' => $protocolo.'://' . $host . '/' . $url));

	$argsLoc['session'] 		= $_SESSION['nioGLPI'];	
	$argsLoc['method']			= "glpi.listDropdownValues";
	$argsLoc['dropdown']		= "Location";
	if($consulta) 
	{
		$argsLoc['id']			= $id;
	}
	else
	{
		$argsLoc['parent']		= $id;
	}
	//$argsLoc['helpdesk']		= 'is_helpdeskvisible';
	$locations			= $client->__soapCall('genericExecute', array(new SoapParam($argsLoc, 'params')));
	return $locations;
}
?>
