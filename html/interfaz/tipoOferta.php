<?php
ini_set('display_errors',0);
global $funciones;
global $core;
global $id;
global $migas;
$info_id	=	$core->info_id;
$hijos		=	$core->info_id_hijos;
//var_dump($hijos);
?>
<div class="row">
	<div class="col col-xs-12 col-sm-12 col-lg-7 col-md-7">
		<h2><?php echo $info_id[0]['titulo'] ?></h2>
		<?php echo $info_id[0]['mapa'] ?>
	</div>
	<div class="col col-xs-12 col-sm-12 col-lg-5 col-md-5">
		<h2>Regístrate</h2>
        <form method="post" id="formEnvio">
		  <div class="form-group">
		    <label for="email">Tu nombre <span class="small">(Requerido)</span>:</label>
		    <input type="text" class="form-control" id="nombre" name="nombre">
            <input type="hidden" class="form-control" id="proyecto" name="proyecto" value="<?php echo $id ?>">
		  </div>
		  <div class="form-group">
		    <label for="email">Tu email <span class="small">(Requerido)</span>:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="email">Tu teléfono / Celular <span class="small">(Requerido)</span>:</label>
		    <input type="text" class="form-control" id="telefono" name="telefono">
		  </div>
		  <div class="form-group">
		    <label for="email">¿Por qué te gustaría invertir en este proyecto en flandes?:</label>
		    <textarea class="form-control" id="porque" name="porque"></textarea>
		  </div>
            <div class="form-group">
                <label>
                <input type="checkbox" id="politica" name="politica" value="1" style="float: left" />&nbsp;
                 Conozco y acepto la <a style="text-decoration: underline;" target="_blank" href="<?php echo _DOMINIO ?>politica-de-datos">pol&iacute;tica de tratamiento de datos.</a>
            </div>
		  <button type="button" class="btn btn-warning" style="background:#444;border:1px solid #444"  onclick="nio.envioContactoProyectosProx()">Enviar</button>
		</form>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>php/posventa/css/sweetalert.css" />
<script type="text/javascript" src="<?php echo _DOMINIO?>php/posventa/js/sweetalert.min.js"></script>