<?php
ini_set('display_errors',0);
global $funciones;
global $core;
global $id;
global $migas;
$infoId	=	$core->info_id;
$listadoPreguntas	=	$funciones->obtenerListado($id);


$ssql	=	sprintf("SELECT * FROM principal WHERE id_padre=%s AND eliminado=0 AND visible=1 ORDER BY orden ASC",$id);
$paging=new PHPPaging();
$paging->paginasAntes(5);
$paging->paginasDespues(5);
if($_GET['ver'])
{
	$e_ssql=mysql_query($ssql);
	$numver=mysql_num_rows($e_ssql);
}
else
{
	$numver=6;
}
$paging->porPagina($numver);
$paging->agregarConsulta($ssql);
$paging->ejecutar();
if(!$paging->numTotalRegistros())
 {
	$no_encon="No hay regitros con este criterio de b&uacute;squeda!!!";
}

$links = $paging->fetchNavegacion();



//$a=0;foreach($listadoPreguntas as $p){
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
				<!--<form>
					<input type="text" name="" class="form-control" placeholder="Escribe algo como: ¿Que debo tener en cuenta a la hora de comprar vivienda?">
				</form>-->
				
				<div class="panel-group" id="accordion">
				  <?php $a=0; while($p = $paging->fetchResultado()){?>
					  <div class="panel panel-default" style="border:none">
					    <div class="panel-heading"   style="background:#fff;border:none;padding:0">
					      <h4 class="panel-title"   style="background:#F5F5F5;border:none;color:#444;padding: 2%;border-radius: 2px 2px 0 0;font-weight: normal">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $a?>"><?php echo utf8_encode($p['titulo'])?></a>
					      </h4>
					    </div>
					    <div id="collapse<?php echo $a?>" class="panel-collapse collapse">
					      <div class="panel-body">
					      	<?php echo ($p['contenido'])?>
					      </div>
					    </div>
					  </div>
				  <?php $a++;}?>
				</div>
				<ul class="pagination" style="margin:0 0 0 4%">
                    <?php 
                    $links   = $paging->fetchNavegacion();
                    echo $links;
                    ?>
                </ul>
			</div>

		</div>
	</div>
	<div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12"></div>
</div>