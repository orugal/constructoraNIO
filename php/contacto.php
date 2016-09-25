<?php

global $funciones;
global $core;
global $id;
global $migas;
$info_id	=	$core->info_id;
$hijos		=	$core->info_id_hijos;
$ministerios	=	$funciones->obtenerListado(14);

//listado de paises
$paises		=	$db->GetAll(sprintf("SELECT * FROM paises"));
//valudo si sedio la orden de enviar el contacto
$errores	=	"";
require('core/phpmailer/class.phpmailer.php');
if(isset($_POST['enviar']))
{
	extract($_POST);
	//valido llos campos necesarios o requeridos
	if(empty($nombres))
	{
		//echo "<script>alert('El nombre es un campo requerido')</script>";
		$errores	=	"El nombre es un campo requerido";
	}
	elseif(!empty($telefono) and strlen($telefono) < 7)
	{
		//echo "<script>alert('El telefono solo puede tener Numeros')</script>";
		$errores	=	"Por favor escriba un número de telefono valido";
	}
	elseif(!empty($telefono) and !is_numeric($telefono))
	{
		//echo "<script>alert('El telefono solo puede tener Numeros')</script>";
		$errores	=	"El telefono solo puede tener Numeros";
	}
	elseif(empty($mail))
	{
		//echo "<script>alert('Debe escribir su correo electronico')</script>";
		$errores	=	"Debe escribir su correo electronico";
	}
	elseif(!empty($mail) and !ereg('([0-9a-zA-Z]+([_.-]?[0-9a-zA-Z]+)*@[0-9a-zA-Z]+[0-9,a-z,A-Z,.,-]*(.){1}[a-zA-Z]{2,4})+',$mail))
	{
		//echo "<script>alert('La sintaxis de su correo no es correcta por favor verifique. EJ: correo@dominio.com / com.co')</script>";
		$errores	=	"El correo electrónico es incorrecto, por favor verifique. EJ: correo@dominio.com / com.co";
	}
	elseif(empty($comentario))
	{
		//echo "<script>alert('Por favor escriba su comentario')</script>";
		$errores 	=	"Por favor escriba su comentario";
	}
	elseif (empty($seguridad))
	{
		$errores 	=	"Por favor escriba el código de seguridad";
	}
	elseif ($seguridad != $_SESSION['key']) 
	{
		$errores 	=	"El código de seguridad no coincide, por favor verifique";
	}
	else
	{
		$asunto			 =	'Se ha enviado un mensaje atravez de la pagina web '._NOMBRE_EMPRESA;
		$mensaje_armado	 =	'Se ha enviado un mensaje atravez de la pagina web '._NOMBRE_EMPRESA.':<br><br><br>';
		$mensaje_armado	.= '<b>Nombres y apellidos:</b> '.$nombres.' '.$apellidos.'<br>';
		$mensaje_armado	.= '<b>Correo Electronico:</b> '.$mail.'<br>';
		$mensaje_armado	.= '<b>Telefono: </b>'.$telefono.'<br>';
		$mensaje_armado	.= '<b>Comentario:</b> '.$comentario.'<br>';
		$envio			 =	$funciones->SendMAIL(_MAIL_ADMIN,$asunto,$mensaje_armado,'',$mail,_NOMBRE_EMPRESA);
		//inserto datos en la base de datos
		//$final				=	$funciones->insertarDatos('mensajes',1);
		//die($final);
		if($envio == 1)
		{
			echo "<script>alert('La informacion ha sido enviada con exito.');document.location='home'</script>";
		}
		else
		{
			echo "<script>alert('La informacion no puso ser enviada');document.location='home'</script>";
		}
	}
}
?>
<div class="row">
	<div class="col col-xs-12 col-sm-12 col-lg-4 col-md-4">
			<br><br>
	    	<div class="card">
			  <!--<img class="card-img-top" src="..." alt="Card image cap">-->
			  <div class="card-block">
			    <h4 class="card-title">Bogotá</h4>
			    <p class="card-text">
			    	Dirección: Cll 79 # 8 – 38<br>
					Email: info@constructoranio.com<br>
					Celular: (+57) 315 707 6127
			    </p>
			  </div>
			</div>

	    	<div class="card">
			  <!--<img class="card-img-top" src="..." alt="Card image cap">-->
			  <div class="card-block">
			    <h4 class="card-title">Neiva</h4>
			    <p class="card-text">
			    	Dirección: Av 26 N°41 –66/ Neiva, Colombia.<br>
					Email: ventastangara@constructoranio.com<br>
					Teléfonos: (+57) 315 707 6127
			    </p>
			  </div>
			</div>

	    	<div class="card">
			  <!--<img class="card-img-top" src="..." alt="Card image cap">-->
			  <div class="card-block">
			    <h4 class="card-title">Ibagué</h4>
			    <p class="card-text">
			    	Dirección: Crr 4h N° 40 – 58<br>
					Teléfonos: (+57) 315 707 6127
			    </p>
			  </div>
			</div>
	</div>
    			<div class="col col-xs-12 col-sm-12 col-lg-8 col-md-8">
    			<form method="post" id="formEnvio" enctype="multipart/form-data">
    				<h2 class="titulos" style="padding:2%;background:#ff8e4c;color:#FFF;text-align:center;font-size:1.5em;font-weight:normal;text-transform: uppercase"><?php echo $info_id[0]['titulo'] ?></h2>
    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12" style="color:#ff8e4c"><h4>DATOS DE CONTACTO</h4></div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label class="visible-sm visible-xs" for="nombre">&nbsp;</label>
					    	<select type="text" class="form-control" id="espacio" name="espacio">
					    		<option value="">Tipo de usuario (*)...</option>
					    		<option value="Comprador">Comprador</option>
					    		<option value="Oferta de lotes">Oferta de lotes</option>
					    		<option value="Trabaje con nosotros">Trabaje con nosotros</option>
					    	</select>
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label class="visible-sm visible-xs" for="apellidos">&nbsp;</label>
					    	<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escriba su nombre (*)">
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="tipoDoc">&nbsp;</label>
					    	<input type="text" class="form-control" id="cedula" name="cedula" placeholder="Correo electrónico (*)">
					    	</select>
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="cedula">&nbsp;</label>
					    	<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono fijo">
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="celular">&nbsp;</label>
					    	<select type="text" class="form-control" id="espacio" name="espacio">
					    		<option value="">Cliente (*)...</option>
					    		<option value="Compradores">Compradores</option>
					    		<option value="Negocios inmobiliarios">Negocios inmobiliarios</option>
					    	</select>
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="telefono">&nbsp;</label>
					    	<select type="text" class="form-control" id="espacio" name="espacio">
					    		<option value="">Proyecto  (*)...</option>
					    		<option value="Neiva">Neiva</option>
					    		<option value="Ibagué">Ibagué</option>
					    		<option value="Montería">Montería</option>
					    		
					    	</select>
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12">
    						<label for="correo">&nbsp;</label>
					    	<textarea class="form-control" id="correo" name="correo" placeholder="ESCRIBA UN BREVE COMENTARIO (*)"></textarea>
    					</div>
    				</div>

	    				<div class="row" style="margin:2% 0 0 0">
	    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12 text-right">
						  		<button type="button" class="btn btn-warning" onclick="nio.enviaWebServicePostVenta()">Enviar información</button>
						  	</div>
						 </div> 
					</form>
    			</div>
    		</div>
</div>
