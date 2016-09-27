<?php
ini_set('display_errors',0);
global $funciones;
global $core;
global $id;
global $migas;

$info_id	=	$core->info_id;
$hijos		=	$core->info_id_hijos;

?>
<div class="row">
    <div class="col col-xs-12 col-sm-12 col-lg-2 col-md-2">
      <div class="btn-group-vertical" role="group" aria-label="">
       <button type="button" class="btn btn-default active">CIUDADELA NIO</button>
       <button type="button" class="btn btn-default">AVANCES OBRA</button>
       <button type="button" class="btn btn-default">RENDERS</button>
       <button type="button" class="btn btn-default">PLANOS</button>
       <button type="button" class="btn btn-default">TOUR VIRTUAL</button>
       <button type="button" class="btn btn-default">SALAS DE VENTAS</button>
       <button type="button" class="btn btn-default">APTO MODELOS</button>
    </div>
    </div>
    <div class="col col-xs-12 col-sm-12 col-lg-10 col-md-10" style="padding:3%">

    <!--<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Ciudadela NIO</li>
  </ol>-->
    <h3><?php echo $info_id[0]['titulo']?></h3>
      <p class="parrafosInternos">
        <?php echo $info_id[0]['contenido']?>
      </p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3245.170427618669!2d-74.14031601516986!3d4.620499997268239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ea47b2ee271%3A0x6659920149f8c20a!2sCarrera+72c+%232a+Sur-2+a+2a+Sur-28%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1471791221714" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>