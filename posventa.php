<?php 
session_start();
if (!extension_loaded("soap")) 
{
   die("Extension soap not loaded\n");
}
//PRODUCCIÓN

$url					= "plugins/webservices/soap.php";
$host					= "tickets.constructoranio.com";
$protocolo				= "https";
//$args['host'] 			= $host;
$args['login_name'] 	= "web";
$args['login_password'] = "Prontas23*";
$args['method']			= "glpi.doLogin";
//$args['url']			= $url;

/*
//LOCAL
$url					= "glpi/plugins/webservices/soap.php";
$host					= "localhost";
$args['host'] 			= $host;
$args['login_name'] 	= "admin";
$args['login_password'] = "123456789";
$args['method']			= "glpi.doLogin";
$args['url']			= $url;
$protocolo				= "http";*/

//llamado al cliente
//llamado al cliente
/*
$client = new SoapClient(null, array('uri'      => $protocolo.'://' . $host . '/' . $url,
                                     'location' => $protocolo.'://' . $host . '/' . $url));


$result = $client->__soapCall('genericExecute', array(new SoapParam($args, 'params')));
//al generar el logueo debo guardar la sessión en una variables de sesión
$_SESSION['nioGLPI']	=	$result['session'];

//consulto las categorías.
$argsCat['session'] 		= $_SESSION['nioGLPI'];	
$argsCat['method']			= "glpi.listDropdownValues";
$argsCat['dropdown']		= "ITILCategory";
$argsCat['limit']				= 1000;
//$argsCat['helpdesk']		= 'is_helpdeskvisible';
$categorias			= $client->__soapCall('genericExecute', array(new SoapParam($argsCat, 'params')));
//recorro las categorías
foreach($categorias as $cat)
{
	if($cat['itilcategories_id'] == 0)
	{
		$cate[$cat['id']]['id']										=	$cat['id'];
		$cate[$cat['id']]['titulo']									=	$cat['name'];
		$cate[$cat['id']]['tituloCompleto']							=	$cat['completename'];
	}
	else
	{
		//$caracter		=	"&gt;";
		//$posCaracter	=	stpor($caracter);
		$cate[$cat['itilcategories_id']]['hijos'][$cat['id']]['id']				=	$cat['id'];
		$cate[$cat['itilcategories_id']]['hijos'][$cat['id']]['titulo']			=	$cat['name'];
		$cate[$cat['itilcategories_id']]['hijos'][$cat['id']]['tituloCompleto']	=	$cat['completename'];
	}

}*/
/*

//localozaciones
//consulto las categorías.
$argsLoc['session'] 		= $_SESSION['nioGLPI'];	
$argsLoc['method']			= "glpi.listDropdownValues";
$argsLoc['dropdown']		= "Location";
$argsLoc['parent']			= 0;
//$argsLoc['helpdesk']		= 'is_helpdeskvisible';
$locations			= $client->__soapCall('genericExecute', array(new SoapParam($argsLoc, 'params')));
*/
//var_dump($locations);

/*
function consultaSelect($id,$consulta=false)
{
	$url					= "plugins/webservices/soap.php";
	$host					= "tickets.constructoranio.com";
	$protocolo				= "https";
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
}var_dump(consultaSelect(2,true));*/
?>
<!--                                                    
     ("`-''-/").___....''"`-._
      `6_ 6  )   `-.  (     ).`-.__.`) 
      (_Y_.)'  ._   )  `._ `. ``-..-'
    _..`..'_..-_/  /..'_.' ,'
   (il),-''  (li),'  ((!.-'

   Desarrollado por  @orugal
   https://github.com/orugal
-->
<!DOCTYPE html>
<html>
	<head>
		<title>FORMULARIO POSTVENTA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset=utf-8>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900italic,900&subset=latin,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<!--<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />-->
		<link rel="stylesheet" type="text/css" href="css/nio.css" />
		<link rel="stylesheet" type="text/css" href="css/full-slider.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" type="text/css" href="css/sweetalert.css" />
		<link rel="shortcut icon" type="image/x-icon" href="images/diseno/favicon.ico" />
	</head>
	<body>
	<div class="container">
		<nav class="navbar navbar-default" style="border:none">
			<div class="container">
					<div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand visible-lg visible-md margin" href="home">
				      	<img src="images/diseno/logo.png" />
				      </a>
				      <a class="navbar-brand visible-xs visible-sm" href="home" style="margin-top:-15px">
				      	<img src="images/diseno/logo.png" width="40%" />
				      </a>
				    </div>

				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="border:none;box-shadow: none;">
				      <?php include("opcMenu.php") ?>
				    </div>
				  </div>
			</div>
				  
			</nav>
	</div>
    <div class="container-fluid">
    	<div class="container"  style="padding:3%">
    		<div class="row">
    			<div class="col col-xs-12 col-sm-12 col-lg-3 col-md-3"></div>
    			<div class="col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    			<form method="post" id="formEnvio" enctype="multipart/form-data">
    				<h2 class="titulos" style="padding:2%;background:#ff8e4c;color:#FFF;text-align:center;font-size:1.5em;font-weight:normal">FORMULARIO DE POSTVENTA</h2>

					    
    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12" style="text-align:justify">
    						Con el objetivo de optimizar nuestros procesos y de brindarle una mejor asistencia, lo invitamos a realizar el siguiente procedimiento para solicitar el servicio postventas, de esta forma se garantizara que su solicitud siga el canal aprobado por la compañía. Este es el único mecanismo que garantiza la atención de su solicitud de postventa, cualquier otra forma de solicitud no será atendida.<br><br>

							Inmediatamente usted termine el procedimiento, recibirá un mail de radicación, número que le servirá para su seguimiento del caso.<br><br>
    					</div>
    				</div>
    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12" style="color:#ff8e4c"><h4>DATOS DE CONTACTO</h4></div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label class="visible-sm visible-xs" for="nombre">&nbsp;</label>
					    	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre (*)">
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label class="visible-sm visible-xs" for="apellidos">&nbsp;</label>
					    	<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escriba sus apellidos (*)">
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="tipoDoc">&nbsp;</label>
					    	<select type="text" class="form-control" id="tipoDoc" name="tipoDoc">
					    		<option value="">TIPO DE DOCUMENTO...</option>
					    		<option value="Cédula de ciudadania">Cédula de ciudadania</option>
					    		<option value="Cédula de extrangería">Cédula de extrangería</option>
					    	</select>
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="cedula">&nbsp;</label>
					    	<input type="text" class="form-control" id="cedula" name="cedula" placeholder="Documento de identidad (*)">
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="celular">&nbsp;</label>
					    	<input type="text" class="form-control" id="celular" name="celular" placeholder="Número de celular(*)">
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="telefono">&nbsp;</label>
					    	<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono fijo">
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12">
    						<label for="correo">&nbsp;</label>
					    	<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo electrónico (*)">
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12" style="color:#ff8e4c;margin:2% 0 0 0"><h4>DATOS PROYECTO</h4></div>
    					<!--<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label class="visible-sm visible-xs" for="telefono">&nbsp;</label>
					    	<select type="text" class="form-control" id="solicitante" name="solicitante">
					    		<option value="">Solicitante...</option>
					    	</select>
    					</div>-->
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label class="visible-sm visible-xs" for="telefono">&nbsp;</label>
					    	<select type="text" class="form-control" id="proyecto" name="proyecto" onchange="nio.getTorre(this)">
					    		<option value="">SELECCIONE EL PROYECTO...</option>
					    		<?php foreach($locations as $loc){ ?>
					    			<option value="<?php echo $loc['id']?>"><?php echo $loc['name']?></option>
					    		<?php }?>
					    	</select>
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6" id="selectTorre">
    						<label class="visible-sm visible-xs" for="telefono">&nbsp;</label>
					    	<select type="text" class="form-control" id="torre" name="torre" disabled="">
					    		<option value="">SELECCIONE LA TORRE...</option>
					    	</select>
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6" id="selectApto">
    						<label for="telefono">&nbsp;</label>
					    	<select type="text" class="form-control" id="apto" name="apto" disabled="">
					    		<option value="">SELECCIONE EL APARTAMENTO...</option>
					    	</select>
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="fechaEntrega">&nbsp;</label>
					    	<input type="text" class="form-control" id="fechaEntrega" name="fechaEntrega" placeholder="Fecha entrega" />
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12" style="color:#ff8e4c;margin:2% 0 0 0"><h4>ESPECIFICACIONES ARREGLO</h4></div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label class="visible-sm visible-xs" for="telefono">&nbsp;</label>
					    	<select type="text" class="form-control" id="tipoInmueble" name="tipoInmueble">
					    		<option value="">TIPO INMUEBLE...</option>
					    		<option value="Apartamento">Apartamento</option>
					    	</select>
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label class="visible-sm visible-xs" for="telefono">&nbsp;</label>
					    	<!--<input type="text" class="form-control" id="espacio" name="espacio" placeholder="Espacio">-->
					    	<select type="text" class="form-control" id="espacio" name="espacio">
					    		<option value="">ESPACIO...</option>
					    		<option value="Habitación Principal">Habitación Principal</option>
					    		<option value="Habitación Auxiliar">Habitación Auxiliar</option>
					    		<option value="Baño Principal">Baño Principal</option>
					    		<option value="Baño Auxiliar">Baño Auxiliar</option>
					    		<option value="Sala">Sala</option>
					    		<option value="Comedor">Comedor</option>
					    		<option value="Cocina">Cocina</option>
					    		<option value="Zona de Ropas">Zona de Ropas</option>
					    		<option value="Balcón / Terraza">Balcón / Terraza</option>
					    	</select>
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12">
    						<label for="tipoDano">&nbsp;</label>
					    	<select type="text" class="form-control" id="tipoDano" name="tipoDano">
					    		<option value="">TIPO DE DAÑO...</option>
					    		<?php foreach($cate as $ca){ ?>
					    			 <optgroup label="<?php echo $ca['titulo']?>">
						    			<?php foreach($ca['hijos'] as $h){?>
						    				<option value="<?php echo $h['id']?>"><?php echo $h['titulo']?></option>
						    			<?php }?>
					    			</optgroup>
					    		<?php }?>
					    	</select>
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12">
    						<label for="desc">&nbsp;</label>
					    	<textarea class="form-control" id="desc" name="desc" placeholder="Descripción (*)"></textarea>
    					</div>
    				</div>		
    				
	    				<div class="row" style="margin:3% 0 0 0">
	    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12">
	    						<input type="file" name="archivo" />
	    						<span class="small">Archivos PDF, WORD, EXCEL, PNG; JPEG</span>
	    					</div>
	    				</div>

	    				<div class="row" style="margin:2% 0 0 0">
	    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12 text-right">
						  		<button type="button" class="btn btn-warning" onclick="nio.enviaWebServicePostVenta()">Enviar información</button>
						  	</div>
						 </div> 
					</form>
    			</div>
    			<div class="col col-xs-12 col-sm-12 col-lg-3 col-md-3"></div>
    		</div>
    	</div>
    </div>

	<div class="container-fluid" style="margin:2% 0 0 0">
		<div class="container">
			<div class="row" style="padding: -3% 0 0 0">
				<div class="col-sm-12 col-xs-12 col-md-2 col-lg-2 text-center"></div>
				<div class="col-sm-12 col-xs-12 col-md-2 col-lg-2 text-center">
					<a href="contacto"><img src="images/diseno/btnContacto.png" width="100%" /></a>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4 text-center">
					<h2 class="text-center clasH2">SUEÑOS EN CONCRETO</h2>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-2 col-lg-2 text-center">
					<a href="https://www.facebook.com/ConstructoraNIO/" target="_blank"><img src="images/diseno/face.png" width="20%" /></a>
					<a href="https://www.instagram.com/constructora_nio/" target="_blank"><img src="images/diseno/insta.png" width="20%" /></a>
					<a href="#"><img src="images/diseno/youtube.png" width="20%" /></a>
					<a href="https://twitter.com/ConstructoraNIO" target="_blank"><img src="images/diseno/twitter.png" width="20%" /></a>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-2 col-lg-2 text-center"></div>
			</div>	
		</div>
	</div>
	<div class="container-fluid text-center" style="margin:2% 0 0 0 ">
		<div class="container">
			Sede principal Boogotá - Cll 79 # 8 - 38 | E-mail: info@constructoranio.com
		</div>
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/sweetalert.min.js"></script>
	<script type="text/javascript" src="js/nio.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			//inicializo el seleccionador de fecha
			$('#fechaEntrega').datetimepicker({
		            format: 'YYYY-MM-DD'
		     });
		});

	</script>
	</body>
</html>