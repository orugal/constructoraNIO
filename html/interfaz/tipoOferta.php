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
		<form>
		  <div class="form-group">
		    <label for="email">Tu nombre <span class="small">(Requerido)</span>:</label>
		    <input type="text" class="form-control" id="nombre">
		  </div>
		  <div class="form-group">
		    <label for="email">Tu email <span class="small">(Requerido)</span>:</label>
		    <input type="email" class="form-control" id="email">
		  </div>
		  <div class="form-group">
		    <label for="email">Tu teléfono / Celular <span class="small">(Requerido)</span>:</label>
		    <input type="text" class="form-control" id="telefono">
		  </div>
		  <div class="form-group">
		    <label for="email">¿Por qué te gustaría invertir en este proyecto en flandes?:</label>
		    <textarea class="form-control" id="porque"></textarea>
		  </div>

		  <div class="form-group">
			  <div class="radio">
			    <strong>Conozco y acepto las políticas de datos personales y autorizo el manejo de estos<br></strong>
			    <label><input type="radio"> Si</label>
			    <label><input type="radio"> No</label>
			  </div>
		  </div>
		  <button type="submit" class="btn btn-warning">Enviar</button>
		</form>
	</div>
</div>