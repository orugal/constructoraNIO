<?php 
ini_set("display_errors",0);
session_start();
if (!extension_loaded("soap")) 
{
   die("Extension soap not loaded\n");
}
//PRODUCCIÓN
/*$url					= "plugins/webservices/soap.php";
$host					= "tickets.constructoranio.com";
$protocolo				= "https";

$args['login_name'] 	= "web";
$args['login_password'] = "Prontas23*";
$args['method']			= "glpi.doLogin";*/

//PRUEBAS
$url					= _URL_GLPI;
$host					= _HOST_GLPI;
$protocolo				= _PROT_GLPI;

$args['login_name'] 	= _USER_GLPI;
$args['login_password'] = _CLAVE_GLPI;
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

}

//localozaciones
//consulto las categorías.
$argsLoc['session'] 		= $_SESSION['nioGLPI'];	
$argsLoc['method']			= "glpi.listDropdownValues";
$argsLoc['dropdown']		= "Location";
$argsLoc['parent']			= 0;
//$argsLoc['helpdesk']		= 'is_helpdeskvisible';
$locations			= $client->__soapCall('genericExecute', array(new SoapParam($argsLoc, 'params')));
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
<div class="row">
	<div class="col col-xs-12 col-sm-12 col-lg-4 col-md-4" style="text-align: justify">
		<img src="<?php _DOMINIO?>images/diseno/postventa.jpg" width="100%" style="margin:20px 0 0 0"/><br><br>
		Con el objetivo de optimizar nuestros procesos y de brindarle una mejor asistencia, lo invitamos a realizar el siguiente procedimiento para solicitar el servicio postventas, de esta forma se garantizara que su solicitud siga el canal aprobado por la compañía. Este es el único mecanismo que garantiza la atención de su solicitud de postventa, cualquier otra forma de solicitud no será atendida.<br><br>
		Inmediatamente usted termine el procedimiento, recibirá un mail de radicación, número que le servirá para su seguimiento del caso.<br><br>
	</div>
	<div class="col col-xs-12 col-sm-12 col-lg-8 col-md-8">
	<form method="post" id="formEnvio" enctype="multipart/form-data">
		<h2 class="titulos" style="padding:2%;background:#444;color:#FFF;text-align:center;font-size:1.5em;font-weight:normal">FORMULARIO DE <?php echo $info_id[0]['titulo']?></h2>

		


		<!--<div class="row">
			<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12" style="text-align:justify">
				Con el objetivo de optimizar nuestros procesos y de brindarle una mejor asistencia, lo invitamos a realizar el siguiente procedimiento para solicitar el servicio postventas, de esta forma se garantizara que su solicitud siga el canal aprobado por la compañía. Este es el único mecanismo que garantiza la atención de su solicitud de postventa, cualquier otra forma de solicitud no será atendida.<br><br>

				Inmediatamente usted termine el procedimiento, recibirá un mail de radicación, número que le servirá para su seguimiento del caso.<br><br>
			</div>
		</div>-->
		<div class="row">
			<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12" style="color:#444"><h4>DATOS DE CONTACTO</h4></div>
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
			<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12" style="color:#444;margin:2% 0 0 0"><h4>DATOS PROYECTO</h4></div>
			<!--<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
				<label class="visible-sm visible-xs" for="telefono">&nbsp;</label>
		    	<select type="text" class="form-control" id="solicitante" name="solicitante">
		    		<option value="">Solicitante...</option>
		    	</select>
			</div>-->
			<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
				<label class="visible-sm visible-xs" for="telefono">&nbsp;</label>
		    	<select type="text" class="form-control" id="proyecto" name="proyecto" onchange="nioForm.getTorre(this)">
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
			<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12" style="color:#444;margin:2% 0 0 0"><h4>ESPECIFICACIONES ARREGLO</h4></div>
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
			  		<button type="button" class="btn btn-warning" onclick="nioForm.enviaWebServicePostVenta()" style="background:#444;border:1px solid #444">Enviar información</button>
			  	</div>
			 </div> 
		</form>
	</div>
	<!--<div class="col col-xs-12 col-sm-12 col-lg-3 col-md-3"></div>-->
</div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>php/posventa/css/bootstrap-datetimepicker.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>php/posventa/css/sweetalert.css" />
<script type="text/javascript" src="<?php echo _DOMINIO?>php/posventa/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo _DOMINIO?>php/posventa/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php echo _DOMINIO?>php/posventa/js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo _DOMINIO?>php/posventa/js/sweetalert.min.js"></script>
<script type="text/javascript" src="<?php echo _DOMINIO?>php/posventa/js/nioForm.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		//inicializo el seleccionador de fecha
		$('#fechaEntrega').datetimepicker({
	            format: 'YYYY-MM-DD'
	     });
	});

</script>