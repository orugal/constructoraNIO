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
      <div class="btn-group-vertical nav nav-tabs nav-justified" role="group" aria-label="">
          <a href="#tab<?php echo $info_id[0]['id'] ?>" data-toggle="tab" class="btn btn-default active" style="text-transform: uppercase"><?php echo $info_id[0]['titulo'] ?></a>
        <?php foreach($hijos as $h){ ?>
          <a href="#tab<?php echo $h['id'] ?>" data-toggle="tab" class="btn btn-default" style="text-transform: uppercase"><?php echo $h['titulo'] ?></a>
        <?php } ?>
      </div>
    </div>

  <div class="tab-content">
      <div class="col col-xs-12 col-sm-12 col-lg-10 col-md-10 tab-pane fade in active" style="padding:0 2%" id="tab<?php echo $info_id[0]['id']?>">
      <!--<ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Ciudadela NIO</li>
      </ol>-->
        <h3><?php echo $info_id[0]['titulo']?></h3>
        <p class="parrafosInternos">
          <?php echo $info_id[0]['contenido']?><br>
        </p>
        <?php echo $info_id[0]['mapa']?>
      </div>
      <?php foreach($hijos as $h2){ ?>
          <?php if($h2['tipo_contenido'] == 11){ //brochure ?>
            <div class="col col-xs-12 col-sm-12 col-lg-10 col-md-10 tab-pane fade" style="padding:0 2%" id="tab<?php echo $h2['id']?>">
              <h3> <?php echo $info_id[0]['titulo'] ?> - <?php echo $h2['titulo']?></h3>
              <p class="parrafosInternos">
                <?php echo utf8_decode($h2['contenido'])?>
              </p>
              <?php if($h2['issuu'] != ""){ ?>
                <?php echo $h2['issuu']?>
              <?php } ?>
              <br><br>
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=216374165059237";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>

              <div class="fb-like" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
            </div>
          <?php }elseif($h2['tipo_contenido'] == 4){ //Galería?>
            <div class="col col-xs-12 col-sm-12 col-lg-10 col-md-10 tab-pane fade" style="padding:0 2%" id="tab<?php echo $h2['id']?>">
              <h3> <?php echo $info_id[0]['titulo'] ?> - <?php echo $h2['titulo']?></h3>
                <div class="row">
                  <div class="col col-xs-12 col-sm-12 col-lg-6 col-md-6">
                    <p class="parrafosInternos">
                      <?php echo utf8_decode($h2['contenido'])?><br>
                    </p>
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=216374165059237";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>

              <div class="fb-like" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                      
                  </div>
                  <div class="col col-xs-12 col-sm-12 col-lg-6 col-md-6">

                    <?php if($h2['multiImagenText'] != ""){ ?>
                      <div id="myCarousel<?php echo $h2['id']?>" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <?php $cont=0;foreach($h2['multiImagenArray'] as $gal){ ?>
                          <li data-target="#myCarousel<?php echo $h2['id']?>" data-slide-to="0" <?php if($cont == 0){?>class="active"<?php }?>></li>
                        <?php $cont++;} ?>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <?php $cont2=0;foreach($h2['multiImagenArray'] as $galint){ ?>
                          <div class="item <?php if($cont2 == 0){?>active<?php }?>">
                            <img src="images/<?php echo $galint ?>" alt="Chania">
                          </div>
                        <?php $cont2++; } ?>
                      </div>

                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel<?php echo $h2['id']?>" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel<?php echo $h2['id']?>" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  <?php } ?>
                      
                  </div>
                </div>

            </div>

          <?php }elseif($h2['tipo_contenido'] == 15){ //Video?>
            <div class="col col-xs-12 col-sm-12 col-lg-10 col-md-10 tab-pane fade" style="padding:0 2%" id="tab<?php echo $h2['id']?>">
              <h3> <?php echo $info_id[0]['titulo'] ?> - <?php echo $h2['titulo']?></h3>
              <p class="parrafosInternos">
                <?php echo utf8_decode($h2['contenido'])?>
              </p>
              <?php if($h2['videoYoutube'] != ""){ ?>
                <iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $funciones->id_youtube($h2['videoYoutube'])?>"  allowfullscreen></iframe>
              <?php } ?>
              <br><br>
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=216374165059237";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>

              <div class="fb-like" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
            </div>
          <?php } ?>
      <?php }?>
  </div>

  </div>
