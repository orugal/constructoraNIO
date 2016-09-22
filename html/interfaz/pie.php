 <?php
  global $core;
  global $id;
  global $funciones;
  $opciones_secundario = $core->listarMenuPrincipal();
  ?>
<div class="container-fluid" style="margin:2% 0 0 0">
    <div class="container">
      <div class="row" style="padding: -3% 0 0 0">
        <div class="col-sm-12 col-xs-12 col-md-2 col-lg-2 text-center"></div>
        <div class="col-sm-12 col-xs-12 col-md-2 col-lg-2 text-center">
          <a href="contacto"><img src="<?php echo _DOMINIO ?>images/diseno/btnContacto.png" width="100%" /></a>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4 text-center">
          <h2 class="text-center clasH2">SUEÑOS EN CONCRETO</h2>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-2 col-lg-2 text-center">
          <?php if($info_id[0]['linkFacebook'] !=""){?><a href="<?php echo $info_id[0]['linkFacebook']?>" target="_blank"><img src="<?php echo _DOMINIO ?>images/diseno/face.png" width="20%" /></a><?php }?>
          <?php if($info_id[0]['linkInstagram'] !=""){?><a href="<?php echo $info_id[0]['linkInstagram']?>" target="_blank"><img src="<?php echo _DOMINIO ?>images/diseno/insta.png" width="20%" /></a><?php }?>
          <?php if($info_id[0]['linkYoutube'] !=""){?><a href="<?php echo $info_id[0]['linkYoutube']?>"><img src="<?php echo _DOMINIO ?>images/diseno/youtube.png" width="20%" /></a><?php }?>
          <?php if($info_id[0]['linkTwitter'] !=""){?><a href="<?php echo $info_id[0]['linkTwitter']?>" target="_blank"><img src="<?php echo _DOMINIO ?>images/diseno/twitter.png" width="20%" /></a><?php }?>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-2 col-lg-2 text-center"></div>
      </div>  
    </div>
  </div>
  <div class="container-fluid text-center" style="margin:2% 0 0 0 ">
    <div class="container">
      <?php echo $info_id[0]['direccion']?> | <?php echo $info_id[0]['mail']?><br>
      <?php echo $info_id[0]['telefono']?> <?php echo $info_id[0]['telefono2']?>

    </div>
  </div>