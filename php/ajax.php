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
ini_set("display_errors",0);
//inicializa el archivo de configuracion interna del portal
require_once('../config/configuracion.php');
//inicializa la conecion
include('../config/conexion_2.php');
require('../core/phpmailer/class.phpmailer.php');
require('../core/funciones.class.php');
global $db;
$funciones = new Funciones();


session_start();
extract($_REQUEST);
if(isset($accion))
{
	if($accion ==1)//contactenos NIO
	{
		//procedo a enviar el mail

		$asunto			 =	'Se ha enviado un mensaje atravez de la pagina web '._NOMBRE_EMPRESA;
		$mensaje_armado	 =	'Se ha enviado un mensaje atravez de la pagina web '._NOMBRE_EMPRESA.': con la siguiente información<br><br><br>';
		$mensaje_armado	.= '<b>Tipo de usuario:</b> '.$tipoUsuario.'<br>';
		$mensaje_armado	.= '<b>Nombres y apellidos:</b> '.$nombre.'<br>';
		$mensaje_armado	.= '<b>Correo Electronico:</b> '.$email.'<br>';
		$mensaje_armado	.= '<b>Telefono: </b>'.$telefono.'<br>';
		$mensaje_armado	.= '<b>Cliente: </b>'.$cliente.'<br>';
		$mensaje_armado	.= '<b>Proyecto: </b>'.$proyecto.'<br>';
		$mensaje_armado	.= '<b>Comentario:</b> '.$comentario.'<br>';


		$envio			 =	$funciones->SendMAIL(_MAIL_ADMIN,$asunto,$mensaje_armado,'',_SMTP_USER,_NOMBRE_EMPRESA);
		//inserto datos en la base de datos
		$queryInsert = sprintf("INSERT INTO contacto (tipoUsuario,nombre,email,telefono,cliente,proyecto,comentario,fecha) VALUES('%s','%s','%s','%s','%s','%s','%s','%s')",$tipoUsuario,$nombre,$email,$telefono,$cliente,$proyecto,$comentario,date("Y-m-d H:i:s"));
		$result  	= $db->Execute($queryInsert);
		//die($final);
		if($envio)
		{
			$salida = array("mensaje"=>"Su mensaje ha sido enviado exitosamente","datos"=>array(),"continuar"=>1);
		}
		else
		{
			$salida = array("mensaje"=>"Su mensaje no pudo ser enviado, por favor intente de nuevo más tarde","datos"=>array(),"continuar"=>0);
		}
	}
	elseif($accion == 2)//contactenos proyectos
	{
		//procedo a enviar el mail

		$infoProyecto    =  $funciones->infoId($proyecto);  
		$asunto			 =	'Contacto proyecto '.$infoProyecto[0]['titulo']." - "._NOMBRE_EMPRESA;
		$mensaje_armado	 =	'Se ha enviado un mensaje atravez de la pagina web '._NOMBRE_EMPRESA.' desde el formulario del proyecto '.$infoProyecto[0]['titulo'].'<br><br><br>';
		$mensaje_armado	.= '<b>Nombres y apellidos:</b> '.$nombre.'<br>';
		$mensaje_armado	.= '<b>Correo Electronico:</b> '.$email.'<br>';
		$mensaje_armado	.= '<b>Telefono: </b>'.$telefono.'<br>';
		$mensaje_armado	.= '<b>Proyecto: </b>'.$infoProyecto[0]['titulo'].'<br>';


		$envio			 =	$funciones->SendMAIL(_MAIL_ADMIN,$asunto,$mensaje_armado,'',_SMTP_USER,_NOMBRE_EMPRESA);
		//inserto datos en la base de datos
		$queryInsert = sprintf("INSERT INTO contactoproyectos (nombre,email,telefono,idProyecto,proyecto,fecha) VALUES('%s','%s','%s','%s','%s','%s')",$nombre,$email,$telefono,$proyecto,$infoProyecto[0]['titulo'],date("Y-m-d H:i:s"));
		$result  	= $db->Execute($queryInsert);
		//die($final);
		if($envio)
		{
			$salida = array("mensaje"=>"Su mensaje ha sido enviado exitosamente","datos"=>array(),"continuar"=>1);
		}
		else
		{
			$salida = array("mensaje"=>"Su mensaje no pudo ser enviado, por favor intente de nuevo más tarde","datos"=>array(),"continuar"=>0);
		}
	}
	elseif($accion == 3)//contactenos proyectos próximos
	{
		//procedo a enviar el mail

		$infoProyecto    =  $funciones->infoId($proyecto);  
		$asunto			 =	'Contacto proyecto '.$infoProyecto[0]['titulo']." - "._NOMBRE_EMPRESA;
		$mensaje_armado	 =	'Se ha enviado un mensaje atravez de la pagina web '._NOMBRE_EMPRESA.' desde el formulario del proyecto '.$infoProyecto[0]['titulo'].'<br><br><br>';
		$mensaje_armado	.= '<b>Nombres y apellidos:</b> '.$nombre.'<br>';
		$mensaje_armado	.= '<b>Correo Electronico:</b> '.$email.'<br>';
		$mensaje_armado	.= '<b>Telefono: </b>'.$telefono.'<br>';
		$mensaje_armado	.= '<b>Proyecto: </b>'.$infoProyecto[0]['titulo'].'<br>';
		$mensaje_armado	.= '<b>Porque quiere invertir en el proyecto?: </b>'.$infoProyecto[0]['porque'].'<br>';


		$envio			 =	$funciones->SendMAIL(_MAIL_ADMIN,$asunto,$mensaje_armado,'',_SMTP_USER,_NOMBRE_EMPRESA);
		//inserto datos en la base de datos
		$queryInsert = sprintf("INSERT INTO contactoproyectosprox (nombre,email,telefono,idProyecto,proyecto,porque,fecha) VALUES('%s','%s','%s','%s','%s','%s','%s')",$nombre,$email,$telefono,$proyecto,$infoProyecto[0]['titulo'],$porque,date("Y-m-d H:i:s"));
		$result  	= $db->Execute($queryInsert);
		//die($final);
		if($envio)
		{
			$salida = array("mensaje"=>"Su mensaje ha sido enviado exitosamente","datos"=>array(),"continuar"=>1);
		}
		else
		{
			$salida = array("mensaje"=>"Su mensaje no pudo ser enviado, por favor intente de nuevo más tarde","datos"=>array(),"continuar"=>0);
		}
	}
	else
	{
		$salida = array("mensaje"=>"No tiene acceso para ingresar a esta zona","datos"=>array(),"continuar"=>0);
	}
}
else
{
	$salida = array("mensaje"=>"No puede realizar acciones en este documento.","datos"=>array(),"continuar"=>0);
}	
echo json_encode($salida);
?>
