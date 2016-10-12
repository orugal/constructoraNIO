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
require_once('../config/configuracion.php');
//inicializa la conecion
include('../config/conexion_2.php');
require('../core/phpmailer/class.phpmailer.php');
require('../core/funciones.class.php');

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
		$_POST['fecha']  	= date("Y-m-d H:i:s") ;
		$final				=	$funciones->insertarDatos('insertarDatos',1);
		//die($final);
		if($envio == 1)
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
