<?php
ini_set('display_errors',0);
global $funciones;
global $core;
global $id;
global $migas;
//hijos de la categoria noticias para hacer un regreso
$hijos_cat_noticias =   $funciones->obtenerListado(15);
//consulto la noticias con el orden mas alto
$query_destacada    =   $db->Execute(sprintf("SELECT * FROM principal WHERE id_padre=%s AND eliminado=0 AND visible=1 ORDER BY orden ASC",$id));
//echo sprintf("SELECT * FROM principal WHERE id_padre=%s AND destacado=1 AND eliminado=0 AND activo=1 ORDER BY fecha DESC",$id);
//si ese query me trae algo quiere decir que hay una noticia destacada
if($query_destacada->NumRows() > 0)
{
    $primera    =   $query_destacada->fields['id'];
}
else
{
    //sino trae nada quiere decir que no hay noticia destacada, asi que debo hacer un query que me traiga la de la fecha de creacion mas reciente
    $query_destacada_x_fecha    =   $db->Execute(sprintf("SELECT * FROM principal WHERE id_padre=%s AND eliminado=0 AND visible=1 ORDER BY orden ASC",$id));
    $primera                    =   $query_destacada_x_fecha->fields['id'];
}
//esta variable me dice que noticia se debe mostrar como la primera en el modulo
$visitada   =   (isset($_GET['visitada']))?$_GET['visitada']:$primera;
if(empty($visitada))
{
    echo "<script>alert('No hay noticias asignadas en esta categoria');document.location='index.php?id=13'</script>";
}
$info_id    =   $funciones->infoId($visitada);

$ssql	=	sprintf("SELECT * FROM principal WHERE id_padre=%s AND eliminado=0 AND id !=%s AND visible=1 ORDER BY orden ASC",$id,$visitada);
$paging=new PHPPaging;
$paging->paginasAntes(6);
$paging->paginasDespues(6);
if($_GET['ver'])
{
	$e_ssql=mysql_query($ssql);
	$numver=mysql_num_rows($e_ssql);
}
else
{
	$numver=3;
}
$paging->porPagina($numver);
$paging->agregarConsulta($ssql);
$paging->ejecutar();
if(!$paging->numTotalRegistros())
 {
	$no_encon="No hay regitros con este criterio de b&uacute;squeda!!!";
}

$links = $paging->fetchNavegacion();

$fechaEx1	=	explode(" ",$info_id[0]['fecha']);
$fechaEx2	=	explode("-",$fechaEx1[0]);
?>
<div class="row">
                <div class="col col-xs-12 col-sm-12 col-lg-8 col-md-8 paddingInt1">
                    <h3><?php echo $info_id[0]['titulo']?></h3>
                    <span class="small" style="color:#999"><?php echo $funciones->traduceFecha($info_id[0]['fecha']); ?></span><br><br>
                    <img src="<?php echo $funciones->imagenCorrecta($info_id[0]['imagen']);?>" width="100%" class="" alt="<?php echo $info_id[0]['titulo']?>"/><br><br>
                    <p class="parrafosInternos textoGlobal">
                       <?php echo $info_id[0]['resumen']?>
                    </p>
                    <p class="parrafosInternos textoGlobal">
                       <?php echo $info_id[0]['contenido']?>
                    </p>
                    <?php if($info_id[0]['autor'] != ""){ ?>
                        <blockquote>
                          <small>Fuente: <?php echo $info_id[0]['autor']?></small>
                        </blockquote>
                    <?php } ?>

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
                <div class="col col-xs-12 col-sm-12 col-lg-4 col-md-4 paddingInt3">
                    <h3 class="text-right">Otras noticias</h3>
                    <div class="row">
                        <?php while($rew = $paging->fetchResultado()){?>
                            <div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12 miniInternas2">
                                <h4 class="tituloMiniInterna">
                                    <a href="<?php echo $funciones->traerUrl($rew['id']) ?>" style="color:#3c3d4d" title="<?php echo utf8_encode($rew['titulo'])?>"><?php echo utf8_encode($rew['titulo'])?></a>
                                </h4>
                                <!--<img src="images/diseno/img2.jpg" width="100%" />-->
                                <p class="parrafosInternos textoGlobal">
                                    <?php echo substr($rew['resumen'],0,100)?>..
                                </p>

                                <small><?php echo $funciones->traduceFecha($rew['fecha']); ?>.</small>
                                <a href="<?php echo $funciones->traerUrl($rew['id']) ?>" class="btn btn-link links" style="float:right" title="<?php echo utf8_encode($rew['titulo'])?>">Leer noticia</a>
                            </div>
                            <center>
                                <img src="images/diseno/bordeHor.png" width="100%" />
                            </center>
                        <?php }?>    
                        <div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12 text-center">
                            <ul class="pagination">
                                <?php 
                                $links   = $paging->fetchNavegacion();
                                echo $links;
                                ?>
                              <!--<li><a class="links" href="#">&laquo;</a></li>
                              <li><a class="links" href="#">1</a></li>
                              <li><a class="links" href="#">2</a></li>
                              <li><a class="links" href="#">3</a></li>
                              <li><a class="links" href="#">4</a></li>
                              <li><a class="links" href="#">5</a></li>
                              <li><a class="links" href="#">&raquo;</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  