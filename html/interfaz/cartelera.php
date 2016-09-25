<?php
global $funciones;
global $core;
global $id;
global $migas;
$infoId	=	$core->info_id;
$listadoPreguntas	=	$funciones->obtenerListado($id);
?>
<div class="row">
	<div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12"></div>
	<div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12">
		<h3><?php echo $infoId[0]['titulo'] ?></h3>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
				<img src="images/diseno/preg.jpg" width="100%" />
			</div>
			<div class="col-xs-12 col-sm-12 col-lg-8 col-md-8">
				<div class="panel-group">
				  <?php $a=0;foreach($listadoPreguntas as $p){ ?>
					  <div class="panel panel-default" style="border:none">
					    <div class="panel-heading"   style="background:#fff;border:none">
					      <h4 class="panel-title"   style="background:#fff;border:none">
					        <a data-toggle="collapse" href="#collapse<?php echo $a?>"><?php echo $p['titulo']?></a>
					      </h4>
					    </div>
					    <div id="collapse<?php echo $a?>" class="panel-collapse collapse">
					      <div class="panel-body">
					      	<?php echo utf8_decode($p['contenido'])?>
					      </div>
					    </div>
					  </div>
				  <?php $a++;}?>
				</div>
			</div>
		</div>
	</div>
	<div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12"></div>
</div>