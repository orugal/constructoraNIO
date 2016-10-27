<?php
ini_set('display_errors',0);
global $funciones;
global $core;
global $id;
global $migas;

$info_id	=	$core->info_id;
$hijos		=	$core->info_id_hijos;


?>



<div id="contactoProyecto" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $info_id[0]['titulo']?> - Contacto</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="formEnvio">
            <div class="form-group">
              <label  for="nombre">Escriba su nombre (*)</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre (*)">
              <input type="hidden" class="form-control" id="proyecto" name="proyecto" value="<?php echo $id ?>">
            </div>
            <div class="form-group">
                <label for="tipoDoc">Escriba su correo electrónico</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Correo electrónico (*)">
            </div>
            <div class="form-group">
                <label for="cedula">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono fijo">
            </div>
            <div class="form-group">
                <label>
                <input type="checkbox" id="politica" name="politica" value="1" style="float: left" />&nbsp;
                 Conozco y acepto la <a style="text-decoration: underline;" target="_blank" href="<?php echo _DOMINIO ?>politica-de-datos">pol&iacute;tica de tratamiento de datos.</a>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" style="background:#999;border:1px solid #999" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-warning" style="background:#444;border:1px solid #444"  onclick="nio.envioContactoProyectos()">ENVIAR</button>
      </div>
    </div>

  </div>
</div>



<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<div class="row visible-lg visible-md">
    <div class="col col-xs-12 col-sm-12 col-lg-2 col-md-2">
      <div class="btn-group-vertical nav nav-tabs nav-justified" role="group" aria-label="">
          <a href="#tab<?php echo $info_id[0]['id'] ?>" data-toggle="tab" class="btn btn-default active" style="text-transform: uppercase"><?php echo $info_id[0]['titulo'] ?></a>
        <?php foreach($hijos as $h){ ?>
          <a href="#tab<?php echo $h['id'] ?>" data-toggle="tab" class="btn btn-default" style="text-transform: uppercase"><?php echo $h['titulo'] ?></a>
        <?php } ?>
          <a data-toggle="modal" data-target="#contactoProyecto" class="btn btn-default" style="text-transform: uppercase">CONT&aacute;CTANOS</a>
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
                    
                      <?php echo utf8_decode($h2['contenido'])?><br>
                    
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
                      <div class="carousel-inner" role="listbox" id="links<?php echo $h2['id']?>">
                        <?php $cont2=0;foreach($h2['multiImagenArray'] as $galint){ ?>
                          <a class="item <?php if($cont2 == 0){?>active<?php }?>" href="images/<?php echo $galint ?>">
                            <img src="images/<?php echo $galint ?>" alt="Chania">
                          </a>
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


          <?php }elseif($h2['tipo_contenido'] == 48){ //apto modelo?>
            <div class="col col-xs-12 col-sm-12 col-lg-10 col-md-10 tab-pane fade" style="padding:0 2%" id="tab<?php echo $h2['id']?>">
              <h3> <?php echo $info_id[0]['titulo'] ?> - <?php echo $h2['titulo']?></h3>
                <div class="row">
                  <div class="col col-xs-12 col-sm-12 col-lg-6 col-md-6">
                    
                      <?php echo utf8_decode($h2['contenido'])?><br>

                      <div class="btn-group-horizontal nav nav-tabs nav-justified" role="group" aria-label="">
                      <?php foreach($h2['hijos'] as $aptopModPest ){ ?>   
                          <a href="#tab<?php echo $aptopModPest['id'] ?>" data-toggle="tab" class="btn btn-default active" style="font-size:0.9em;text-transform: uppercase;padding:3% !important"><?php echo $aptopModPest['titulo'] ?></a>
                      <?php } ?>
                      </div>   


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
                  <div class="col col-xs-12 col-sm-12 col-lg-6 col-md-6 tab-content">
                      <?php $contApto=0;foreach($h2['hijos'] as $aptopModPestInt ){ ?> 
                      <div class="col col-xs-12 col-sm-12 col-lg-10 col-md-10 tab-pane fade <?php if($contApto == 0){ ?> in active<?php }?>" style="padding:0 2%;float:left" id="tab<?php echo $aptopModPestInt['id']?>">

                            <?php if($aptopModPestInt['multiImagenText'] != ""){ ?>
                              <div id="myCarousel<?php echo $aptopModPestInt['id']?>" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <?php $cont=0;foreach($aptopModPestInt['multiImagenArray'] as $gal){ ?>
                                  <li data-target="#myCarousel<?php echo $aptopModPestInt['id']?>" data-slide-to="0" <?php if($cont == 0){?>class="active"<?php }?>></li>
                                <?php $cont++;} ?>
                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox" id="links<?php echo $aptopModPestInt['id']?>">
                                <?php $cont2=0;foreach($aptopModPestInt['multiImagenArray'] as $galint){ ?>
                                  <a class="item <?php if($cont2 == 0){?>active<?php }?>" href="images/<?php echo $galint ?>">
                                    <img src="images/<?php echo $galint ?>" alt="Chania">
                                  </a>
                                <?php $cont2++; } ?>
                              </div>

                              <!-- Left and right controls -->
                              <a class="left carousel-control" href="#myCarousel<?php echo $aptopModPestInt['id']?>" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#myCarousel<?php echo $aptopModPestInt['id']?>" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                          <?php } ?>
                      </div>
                        <script>
                        document.getElementById('links<?php echo $aptopModPestInt['id']?>').onclick = function (event) {
                            event = event || window.event;
                            var target = event.target || event.srcElement,
                                link = target.src ? target.parentNode : target,
                                options = {index: link, event: event},
                                links = this.getElementsByTagName('a');
                            blueimp.Gallery(links, options);
                        };
                        </script>
                      <?php $contApto++;} ?>
                  </div>
                </div>

            </div>

          <?php }elseif($h2['tipo_contenido'] == 47){ //avance de obra?>
            <div class="col col-xs-12 col-sm-12 col-lg-10 col-md-10 tab-pane fade" style="padding:0 2%" id="tab<?php echo $h2['id']?>">

              <h3><?php echo $h2['antetitulo']?></h3><br>

              <section class="cd-horizontal-timeline">
                <div class="timeline">
                  <div class="events-wrapper">
                    <div class="events">
                      <ol style="list-style: none !important">

                        <?php $cont3=0;foreach($h2['hijos'] as $hij){ 
                            $fechSalida = explode(" ",$hij['fecha']);
                            $fechaFin   = (($cont3 + 1))."/".date("m")."/".date("Y");
                          ?>
                          <li>
                            <a href="#0" data-date="<?php echo $fechaFin ?>" <?php if($cont3 == 0){?> class="selected" <?php }?> > <?php echo $funciones->traduceFechaCorta($hij['fecha'])?> </a>
                          </li>
                       <?php $cont3++;}?> 
                        <!-- other dates here -->
                      </ol>
               
                      <span class="filling-line" aria-hidden="true"></span>
                    </div> <!-- .events -->
                  </div> <!-- .events-wrapper -->
                    
                  <ul class="cd-timeline-navigation" style="list-style: none">
                    <li><a href="#0" class="prev inactive">Prev</a></li>
                    <li><a href="#0" class="next">Next</a></li>
                  </ul> <!-- .cd-timeline-navigation -->
                </div> <!-- .timeline -->
               
                <div class="events-content">
                  <ol style="list-style: none !important;margin-left:-14%">
                      <?php $cont2=0;foreach($h2['hijos'] as $hij2){ 

                            $fechSalida2 = explode(" ",$hij2['fecha']);
                            $fechaFin2   = (($cont2 + 1))."/".date("m")."/".date("Y");
                        ?>
                        <li <?php if($cont2 == 0){?> class="selected" <?php }?> data-date="<?php echo $fechaFin2 ?>">
                          <h3><?php echo $hij2['titulo'] ?></h3>
                          <em style="font-family: 'Roboto';font-style: normal;;font-weight: normal;font-size:1.2em"><?php echo $funciones->traduceFecha($hij2['fecha']) ?></em>
                          <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="row">
                                  <div class="col-lg-2 col-md-2"></div>
                                  <div class="col-lg-8 col-md-8">
                                    <?php if($hij2['multiImagenText'] != ""){ ?>
                                      <div id="myCarousel<?php echo $hij2['id']?>" class="carousel slide" data-ride="carousel">
                                      
                                      <ol class="carousel-indicators">
                                        <?php $cont=0;foreach($hij2['multiImagenArray'] as $gal){ ?>
                                          <li data-target="#myCarousel<?php echo $hij2['id']?>" data-slide-to="0" <?php if($cont == 0){?>class="active"<?php }?>></li>
                                        <?php $cont++;} ?>
                                      </ol>

                                      
                                      <div class="carousel-inner" role="listbox" id="links<?php echo $hij2['id']?>">
                                        <?php $contx=0;foreach($hij2['multiImagenArray'] as $galint){ ?>
                                          <a class="item <?php if($contx == 0){?>active<?php }?>" href="images/<?php echo $galint ?>">
                                            <img src="images/<?php echo $galint ?>" alt="Chania">
                                          </a>
                                        <?php $contx++; } ?>
                                      </div>

                                     
                                      <a class="left carousel-control" href="#myCarousel<?php echo $hij2['id']?>" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="right carousel-control" href="#myCarousel<?php echo $hij2['id']?>" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                                  <?php } ?>
                                   </div>
                                   <div class="col-lg-2 col-md-2"></div>

                                </div>  
                            </div>
                            <div class="col-lg-12 col-md-12">

                                <p  class="parrafosInternos"> <br>
                                  <center><?php echo utf8_decode($hij2['resumen']) ?></center>
                                </p>
                            </div>
                          </div>
                        </li>

                      <script>
                        document.getElementById('links<?php echo $hij2['id']?>').onclick = function (event) {
                            event = event || window.event;
                            var target = event.target || event.srcElement,
                                link = target.src ? target.parentNode : target,
                                options = {index: link, event: event},
                                links = this.getElementsByTagName('a');
                            blueimp.Gallery(links, options);
                        };
                        </script>
                    <?php $cont2++; }?>
                    <!-- other descriptions here -->
                  </ol>
                </div> <!-- .events-content -->
              </section>
            </div>


            <!--<div class="col col-xs-12 col-sm-12 col-lg-10 col-md-10 tab-pane fade" style="padding:0 2%" id="tab<?php echo $h2['id']?>">
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
                      
                      <ol class="carousel-indicators">
                        <?php $cont=0;foreach($h2['multiImagenArray'] as $gal){ ?>
                          <li data-target="#myCarousel<?php echo $h2['id']?>" data-slide-to="0" <?php if($cont == 0){?>class="active"<?php }?>></li>
                        <?php $cont++;} ?>
                      </ol>

                      
                      <div class="carousel-inner" role="listbox" id="links<?php echo $h2['id']?>">
                        <?php $cont2=0;foreach($h2['multiImagenArray'] as $galint){ ?>
                          <a class="item <?php if($cont2 == 0){?>active<?php }?>" href="images/<?php echo $galint ?>">
                            <img src="images/<?php echo $galint ?>" alt="Chania">
                          </a>
                        <?php $cont2++; } ?>
                      </div>

                     
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

            </div>-->

          <?php }elseif($h2['tipo_contenido'] == 15){ //Video?>
            <div class="col col-xs-12 col-sm-12 col-lg-10 col-md-10 tab-pane fade" style="padding:0 2%" id="tab<?php echo $h2['id']?>">
              <h3> <?php echo $info_id[0]['titulo'] ?> - <?php echo $h2['titulo']?></h3>
              <p class="parrafosInternos">
                <?php echo utf8_decode($h2['contenido'])?>
              </p>
              <?php if($h2['videoYoutube'] != ""){ ?>
                <center><iframe class="iframeVideo"  width="560" height="200" src="http://www.youtube.com/embed/<?php echo $funciones->id_youtube($h2['videoYoutube'])?>"  allowfullscreen></iframe></center>
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


  <!-- para cel-->

<div class="row visible-sm visible-xs" style="padding:0">
    <div class="col col-xs-12 col-sm-12" style="padding:0">
        <div class="panel-group">
          <?php foreach($hijos as $h2){ ?>
            <?php if($h2['tipo_contenido'] == 11){ //brochure ?>
                <div class="panel panel-default" style="padding: 0;border:none">
                    <div class="panel-heading" style="background: transparent !important">
                      <h4 class="panel-title">
                        <a style="text-transform: uppercase;" data-toggle="collapse" class="btn btn-default btn-block" href="#collapse<?php echo $h2['id'] ?>"><?php echo $h2['titulo']?></a>
                      </h4>
                    </div>
                    <div id="collapse<?php echo $h2['id'] ?>" class="panel-collapse collapse">
                      <div class="panel-body">
                          <p class="parrafosInternos">
                            <?php echo utf8_decode($h2['contenido'])?>
                          </p>
                          <?php if($h2['issuu'] != ""){ ?>
                            <?php echo $h2['issuu']?>
                          <?php } ?>
                          <br><br>
                          <!--<div id="fb-root"></div>
                          <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=216374165059237";
                            fjs.parentNode.insertBefore(js, fjs);
                          }(document, 'script', 'facebook-jssdk'));</script>

                          <div class="fb-like" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>-->
                      </div>
                    </div>
                </div>
            <?php }elseif($h2['tipo_contenido'] == 4){ //Galería?>

                <div class="panel panel-default"  style="padding: 0;border:none">
                    <div class="panel-heading" style="background: transparent !important">
                      <h4 class="panel-title">
                        <a style="text-transform: uppercase;" data-toggle="collapse" class="btn btn-default btn-block"  href="#collapse<?php echo $h2['id'] ?>"><?php echo $h2['titulo']?></a>
                      </h4>
                    </div>
                    <div id="collapse<?php echo $h2['id'] ?>" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="row">
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

                            <div class="col col-xs-12 col-sm-12 col-lg-6 col-md-6">
                              <p class="parrafosInternos">
                                <?php echo utf8_decode($h2['contenido'])?><br>
                              </p>
                        <!--<div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=216374165059237";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                        <div class="fb-like" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>-->
                                
                            </div>
                          </div>

                      </div>
                    </div>
                </div>
            <?php }elseif($h2['tipo_contenido'] == 47){ //avance de obra?>

                <div class="panel panel-default"  style="padding: 0;border:none">
                    <div class="panel-heading" style="background: transparent !important">
                      <h4 class="panel-title">
                        <a style="text-transform: uppercase;" data-toggle="collapse" class="btn btn-default btn-block"  href="#collapse<?php echo $h2['id'] ?>"><?php echo $h2['titulo']?></a>
                      </h4>
                    </div>
                    <div id="collapse<?php echo $h2['id'] ?>" class="panel-collapse collapse">
                      <div class="panel-body">
                        
                          <!-- Avance de obra móvil Inicio-->
                            
                               <section class="cd-horizontal-timeline">
                <div class="timeline">
                  <div class="events-wrapper">
                    <div class="events">
                      <ol style="list-style: none !important">

                        <?php $cont3=0;foreach($h2['hijos'] as $hij){ 
                            $fechSalida = explode(" ",$hij['fecha']);
                            $fechaFin   = (($cont3 + 1))."/".date("m")."/".date("Y");
                          ?>
                          <li>
                            <a href="#0" data-date="<?php echo $fechaFin ?>" <?php if($cont3 == 0){?> class="selected" <?php }?> > <?php echo $funciones->traduceFechaCorta($hij['fecha'])?> </a>
                          </li>
                       <?php $cont3++;}?> 
                        <!-- other dates here -->
                      </ol>
               
                      <span class="filling-line" aria-hidden="true"></span>
                    </div> <!-- .events -->
                  </div> <!-- .events-wrapper -->
                    
                  <ul class="cd-timeline-navigation" style="list-style: none">
                    <li><a href="#0" class="prev inactive">Prev</a></li>
                    <li><a href="#0" class="next">Next</a></li>
                  </ul> <!-- .cd-timeline-navigation -->
                </div> <!-- .timeline -->
               
                <div class="events-content">
                  <ol style="list-style: none !important;margin-left:-14%">
                      <?php $cont2=0;foreach($h2['hijos'] as $hij2){ 

                            $fechSalida2 = explode(" ",$hij2['fecha']);
                            $fechaFin2   = (($cont2 + 1))."/".date("m")."/".date("Y");
                        ?>
                        <li <?php if($cont2 == 0){?> class="selected" <?php }?> data-date="<?php echo $fechaFin2 ?>">
                          <h3><?php echo $hij2['titulo'] ?></h3>
                          <em style="font-family: 'Roboto';font-style: normal;;font-weight: normal;font-size:1.2em"><?php echo $funciones->traduceFecha($hij2['fecha']) ?></em>
                          <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="row">
                                  <div class="col-lg-2 col-md-2"></div>
                                  <div class="col-lg-8 col-md-8">
                                    <?php if($hij2['multiImagenText'] != ""){ ?>
                                      <div id="myCarousel<?php echo $hij2['id']?>" class="carousel slide" data-ride="carousel">
                                      
                                      <ol class="carousel-indicators">
                                        <?php $cont=0;foreach($hij2['multiImagenArray'] as $gal){ ?>
                                          <li data-target="#myCarousel<?php echo $hij2['id']?>" data-slide-to="0" <?php if($cont == 0){?>class="active"<?php }?>></li>
                                        <?php $cont++;} ?>
                                      </ol>

                                      
                                      <div class="carousel-inner" role="listbox" id="links<?php echo $hij2['id']?>">
                                        <?php $contx=0;foreach($hij2['multiImagenArray'] as $galint){ ?>
                                          <a class="item <?php if($contx == 0){?>active<?php }?>" href="images/<?php echo $galint ?>">
                                            <img src="images/<?php echo $galint ?>" alt="Chania">
                                          </a>
                                        <?php $contx++; } ?>
                                      </div>

                                     
                                      <a class="left carousel-control" href="#myCarousel<?php echo $hij2['id']?>" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="right carousel-control" href="#myCarousel<?php echo $hij2['id']?>" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                                  <?php } ?>
                                   </div>
                                   <div class="col-lg-2 col-md-2"></div>

                                </div>  
                            </div>
                            <div class="col-lg-12 col-md-12">

                                <p  class="parrafosInternos"> <br>
                                  <center><?php echo utf8_decode($hij2['resumen']) ?></center>
                                </p>
                            </div>
                          </div>
                        </li>

                      <script>
                        document.getElementById('links<?php echo $hij2['id']?>').onclick = function (event) {
                            event = event || window.event;
                            var target = event.target || event.srcElement,
                                link = target.src ? target.parentNode : target,
                                options = {index: link, event: event},
                                links = this.getElementsByTagName('a');
                            blueimp.Gallery(links, options);
                        };
                        </script>
                    <?php $cont2++; }?>
                    <!-- other descriptions here -->
                  </ol>
                </div> <!-- .events-content -->
              </section>
                          <!-- Avance de obra móvil fin-->


                      </div>
                    </div>
                </div>


                  


            <?php }elseif($h2['tipo_contenido'] == 15){ //Video?>

                <div class="panel panel-default"  style="padding: 0;border:none">
                    <div class="panel-heading" style="background: transparent !important">
                      <h4 class="panel-title">
                        <a style="text-transform: uppercase;" data-toggle="collapse" class="btn btn-default btn-block"  href="#collapse<?php echo $h2['id'] ?>"><?php echo $h2['titulo']?></a>
                      </h4>
                    </div>
                    <div id="collapse<?php echo $h2['id'] ?>" class="panel-collapse collapse">
                      <div class="panel-body">
                          <?php if($h2['videoYoutube'] != ""){ ?>
                            <center><iframe class="iframeVideo" width="560" height="200" src="http://www.youtube.com/embed/<?php echo $funciones->id_youtube($h2['videoYoutube'])?>"  allowfullscreen></iframe></center>
                          <?php } ?><br><br>
                          <p class="parrafosInternos">
                            <?php echo utf8_decode($h2['contenido'])?>
                          </p>
                          <br><br>
                          <!--<div id="fb-root"></div>
                          <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=216374165059237";
                            fjs.parentNode.insertBefore(js, fjs);
                          }(document, 'script', 'facebook-jssdk'));</script>

                          <div class="fb-like" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>-->
                      </div>
                    </div>
                </div>

                
              

            <?php } ?>
            <script>
              document.getElementById('links<?php echo $h2['id']?>').onclick = function (event) {
                  event = event || window.event;
                  var target = event.target || event.srcElement,
                      link = target.src ? target.parentNode : target,
                      options = {index: link, event: event},
                      links = this.getElementsByTagName('a');
                  blueimp.Gallery(links, options);
              };
              </script>
        <?php }?>
       </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>php/posventa/css/sweetalert.css" />
<script type="text/javascript" src="<?php echo _DOMINIO?>php/posventa/js/sweetalert.min.js"></script>
<script type="text/javascript" src="<?php echo _DOMINIO?>js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="<?php echo _DOMINIO?>js/jquery.mobile.custom.min.js"></script>
<script type="text/javascript" src="<?php echo _DOMINIO?>js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo _DOMINIO?>js/main.js"></script>
