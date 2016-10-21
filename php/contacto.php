<?php

global $funciones;
global $core;
global $id;
global $migas;
$info_id	=	$core->info_id;
$hijos		=	$core->info_id_hijos;
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

			<div class="card">
				<a href="tel:573157076127" class="btn btn-default"><i class="glyphicon glyphicon-earphone"></i> Llamar </a>
				<a class="btn btn-default"><i class="glyphicon glyphicon-comment"></i> Chat </a>
			</div>
	</div>
    			<div class="col col-xs-12 col-sm-12 col-lg-8 col-md-8">
    			<form method="post" id="formEnvio">
    				<h2 class="titulos" style="padding:2%;background:#444;color:#FFF;text-align:center;font-size:1.5em;font-weight:normal;text-transform: uppercase"><?php echo $info_id[0]['titulo'] ?></h2>
    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12" style="color:#444"><h4>DATOS DE CONTACTO</h4></div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label class="visible-sm visible-xs" for="nombre">&nbsp;</label>
					    	<select type="text" class="form-control" id="tipoUsuario" name="tipoUsuario">
					    		<option value="">Tipo de usuario (*)...</option>
					    		<option value="Comprador">Comprador</option>
					    		<option value="Oferta de lotes">Oferta de lotes</option>
					    		<option value="Trabaje con nosotros">Trabaje con nosotros</option>
					    	</select>
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label class="visible-sm visible-xs" for="apellidos">&nbsp;</label>
					    	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre (*)">
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="tipoDoc">&nbsp;</label>
					    	<input type="text" class="form-control" id="email" name="email" placeholder="Correo electrónico (*)">
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="cedula">&nbsp;</label>
					    	<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono fijo">
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="celular">&nbsp;</label>
					    	<select type="text" class="form-control" id="cliente" name="cliente">
					    		<option value="">Cliente (*)...</option>
					    		<option value="Compradores">Compradores</option>
					    		<option value="Negocios inmobiliarios">Negocios inmobiliarios</option>
					    	</select>
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="telefono">&nbsp;</label>
					    	<select type="text" class="form-control" id="proyecto" name="proyecto">
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
					    	<textarea class="form-control" id="comentario" name="comentario" placeholder="ESCRIBA UN BREVE COMENTARIO (*)"></textarea>
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12 checkbox">
    						<label>
					    	<input type="checkbox" id="politica" name="politica" value="1" style="float: left" /> 
					    	Conozco y acepto la <a style="text-decoration: underline;" target="_blank" href="<?php echo _DOMINIO ?>politica-de-datos">pol&iacute;tica de tratamiento de datos.</a>
					    </div>
    				</div>

	    				<div class="row" style="margin:2% 0 0 0">
	    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12 text-right">
						  		<button type="button" class="btn btn-warning" style="background:#444;border:1px solid #444" onclick="nio.envioContacto()">Enviar información</button>
						  	</div>
						 </div> 
					</form>
    			</div>
    		</div>
</div>

<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>php/posventa/css/sweetalert.css" />
<script type="text/javascript" src="<?php echo _DOMINIO?>php/posventa/js/sweetalert.min.js"></script>
