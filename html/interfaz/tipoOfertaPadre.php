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
	<div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12" style="margin:0 0 5% 0">
		<h2><?php echo $info_id[0]['titulo'] ?></h2>
	</div>
	<?php foreach($hijos as $pl){ ?>
		<div class="col col-xs-12 col-sm-12 col-lg-6 col-md-6 text-center">
			<div class="card card-block">
			  <h4 class="card-title"><?php echo $pl['titulo'] ?></h4>
			  <?php echo $pl['mapa'] ?>
			  <p class="card-text"><?php echo $pl['resumen'] ?></p><br>
			  <a href="<?php echo $funciones->traerUrl($pl['id']) ?>" class="card-link btn btn-default">Regístrate para el lanzamiento</a>
			</div>
		</div>
	<?php } ?>
</div>