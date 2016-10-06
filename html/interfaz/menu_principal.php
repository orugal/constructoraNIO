<?php
	global $core;
	global $id;
	global $funciones;
	$menuPrincipal = $core->listarMenuPrincipal();
?>

<!-- Menú para dispositivos de pantalla grande-->
<ul class="nav navbar-nav floatRight visible-md visible-lg">
	<?php foreach($menuPrincipal as $menuP){ ?>
	    <li class="dropdown visible-lg visible-md">
	         <a style="text-transform:uppercase;" <?php if(count($menuP['hijos']) == 0 || $menuP['id'] == _PREGUNTAS_FREC || $menuP['id'] ==_NOTICIAS){ ?>href="<?php echo $funciones->traerUrl($menuP['id']) ?>"<?php }else{?>class="dropdown-toggle" data-toggle="dropdown"<?php }?>>
	          	<?php echo $menuP['titulo'] ?>
	          	<?php if(count($menuP['hijos']) > 0 && $menuP['id'] != _PREGUNTAS_FREC && $menuP['id'] != _NOTICIAS){ ?>
		          	<b class="glyphicon glyphicon-triangle-bottom mini right"></b>
		          	<ul class="dropdown-menu">
		          		<?php foreach($menuP['hijos'] as $mh){ ?>
					        <li class="dropdown-submenu">
					        	<a style="color:#505052;text-transform:uppercase;" <?php if(count($mh['hijos']) == 0){ ?>href="<?php echo $funciones->traerUrl($mh['id']) ?>"<?php }else{?>tabindex="-1"<?php }?>>
					        	<?php echo $mh['titulo'] ?>
					        	<?php if(count($mh['hijos']) > 0){ ?>
						        	<b class="glyphicon glyphicon-triangle-right mini"></b></a>
						        	<ul class="dropdown-menu">
						        		<?php foreach($mh['hijos'] as $ml2){ ?>
							            	<li>
							            		<?php if($ml2['tipo_contenido'] == 39){ ?>
							            			<a style="text-transform:uppercase;color:#505052" target="_blank" href="<?php echo $ml2['link'] ?>"><?php echo $ml2['titulo'] ?></a>
							            		<?php }else{ ?>
							            			<a style="text-transform:uppercase;color:#505052" <?php if(count($ml2['hijos']) == 0 or $ml2['tipo_contenido'] == 43){ ?>href="<?php echo $funciones->traerUrl($ml2['id']) ?>"<?php }else{?>tabindex="-1"<?php }?>><?php echo $ml2['titulo'] ?></a>
							            		<?php } ?>
							            	</li>
							            <?php } ?>
									</ul>
								<?php } ?>
								</a>
					        </li>
				        <?php } ?>
					</ul>
				<?php } ?>
	        </a>
    	</li>
	<?php } ?>
</ul>

<!-- Menú para dispositivos móviles pequeños-->
<ul class="nav navbar-nav visible-sm visible-xs" style="margin: 0 0 5% 0">
	<?php foreach($menuPrincipal as $menuP){ ?>
	<li class="dropdown visible-sm visible-xs">
        <a <?php if(count($menuP['hijos']) == 0 || $menuP['id'] == _PREGUNTAS_FREC || $menuP['id'] ==_NOTICIAS){ ?>href="<?php echo $funciones->traerUrl($menuP['id']) ?>"<?php }else{?>class="dropdown-toggle" data-toggle="dropdown"<?php }?>><?php echo $menuP['titulo'] ?> 
        	<?php if(count($menuP['hijos']) > 0 && $menuP['id'] != _PREGUNTAS_FREC && $menuP['id'] != _NOTICIAS){ ?><b class="caret"></b><?php } ?>
        </a>
        <?php if(count($menuP['hijos']) > 0){ ?>
	        <ul class="dropdown-menu multi-column columns-3">
	        	<?php foreach($menuP['hijos'] as $mh){ ?>
		            <div class="row">
			            <div class="col-sm-4">
				            <ul class="multi-column-dropdown">
					            <li style="background:#eee">
					            	<a <?php if(count($mh['hijos']) == 0){ ?>href="<?php echo $funciones->traerUrl($mh['id']) ?>"<?php }else{?>tabindex="-1"<?php }?>><strong><?php echo $mh['titulo'] ?></strong></a>
					            </li>
					            <?php if(count($mh['hijos']) > 0){ ?>
					            	<li class="divider"></li>
						        	<?php foreach($mh['hijos'] as $ml2){ ?>
						        		<?php if($ml2['tipo_contenido'] == 39){ ?>
					            			<li><a style="text-transform:uppercase;color:#505052" target="_blank" href="<?php echo $ml2['link'] ?>"><?php echo $ml2['titulo'] ?></a></li>
					            		<?php }else{ ?>
					            			<li><a style="text-transform:uppercase;color:#505052" <?php if(count($ml2['hijos']) == 0 or $ml2['tipo_contenido'] == 43){ ?>href="<?php echo $funciones->traerUrl($ml2['id']) ?>"<?php }else{?>tabindex="-1"<?php }?>><?php echo $ml2['titulo'] ?></a></li>
					            		<?php } ?>
					            	<?php } ?>
					            <?php } ?>
				            </ul>
			            </div>
		            </div>
	            <?php } ?>
	        </ul>
        <?php } ?>
    </li>
    <?php }?>
</ul>

<!--

<ul class="nav navbar-nav floatRight">

    <li class="dropdown visible-sm visible-xs">
    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" >SOMOS NIO <b class="caret"></b></a>
    	<ul class="dropdown-menu multi-column columns-3">
    		<div class="row">
    			<div class="col-sm-4">
		            <ul class="multi-column-dropdown">
	    				<li style="background:#eee"><a href="#"><strong>QUIÉNES SOMOS</strong></a></li>
	    				<li style="background:#eee"><a href="#"><strong>TRABAJA CON NOSOTROS</strong></a></li>
    				</ul>
    			</div>
    		</div>
    	</ul>
    </li>


    <li class="dropdown visible-sm visible-xs">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROYECTOS <b class="caret"></b></a>
        <ul class="dropdown-menu multi-column columns-3">
            <div class="row">
	            <div class="col-sm-4">
		            <ul class="multi-column-dropdown">
			            <li style="background:#eee"><a href="#"><strong>PROYECTOS NIO</strong></a></li>
			            <li class="divider"></li>
			            <li><a style="color:#505052" href="proyecto.php">CIUDADELA NIO NEIVA</a></li>
			            <li><a style="color:#505052" href="proyecto.php">MAR ADENTRO NEIVA</a></li>
			            <li><a style="color:#505052" href="proyecto.php">IBAGUÉ TORRE KEA</a></li>
		            </ul>
	            </div>
	            <div class="col-sm-4">
		            <ul class="multi-column-dropdown">
			            <li style="background:#eee"><a href="#"><strong>PRÓXIMOS LANZAMIENTOS</strong></a></li>
			            <li class="divider"></li>
		        		<li><a style="color:#505052" href="nuevos.php">CARTAGENA</a></li>
			            <li><a style="color:#505052" href="nuevos.php">FLANDES</a></li>
		            </ul>
	            </div>
            </div>
        </ul>
    </li>






	<li class="dropdown visible-lg visible-md">
         <a class="dropdown-toggle" data-toggle="dropdown"	>
          	SOMOS NIO <b class="glyphicon glyphicon-triangle-bottom mini right"></b>
          	<ul class="dropdown-menu">
		        <li>
		        	<a href="quienes-somos" style="color:#505052" tabindex="-1">QUIÉNES SOMOS</a>
		        </li>
		        <li>
		        	<a href="trabaja-con-nosotros" style="color:#505052" tabindex="-1">TRABAJA CON NOSOTROS</a>
		        </li>
			</ul>
        </a>
    </li>
    <li class="dropdown visible-lg visible-md">
         <a class="dropdown-toggle" data-toggle="dropdown"	>
          	PROYECTOS <b class="glyphicon glyphicon-triangle-bottom mini right"></b>
          	<ul class="dropdown-menu">
		        <li class="dropdown-submenu">
		        	<a style="color:#505052" tabindex="-1">PROYECTOS NIO <b class="glyphicon glyphicon-triangle-right mini"></b></a>
		        	<ul class="dropdown-menu">
			            <li><a style="color:#505052" href="proyecto.php">CIUDADELA NIO NEIVA</a></li>
			            <li><a style="color:#505052" href="proyecto.php">MAR ADENTRO NEIVA</a></li>
			            <li><a style="color:#505052" href="proyecto.php">IBAGUÉ TORRE KEA</a></li>
					</ul>
		        </li>
		        <li class="dropdown-submenu">
		        	<a style="color:#505052" tabindex="-1">PRÓXIMOS LANZAMIENTOS <b class="glyphicon glyphicon-triangle-right mini"></b></a>
		        	<ul class="dropdown-menu">
		        		<li><a style="color:#505052" href="nuevos.php">CARTAGENA</a></li>
			            <li><a style="color:#505052" href="nuevos.php">FLANDES</a></li>
					</ul>
		        </li>
			</ul>
        </a>
    </li>
    <li><a href="experiencia">EXPERIENCIA</a></li>
    <li><a href="noticias">NOTICIAS</a></li>
    <li><a href="preguntas-frecuentes">PREGUNTAS FRECUENTES</a></li>
    <li class="dropdown visible-lg visible-md">

         <a class="dropdown-toggle" data-toggle="dropdown"	>
          	SERVICIO AL CLIENTE <b class="glyphicon glyphicon-triangle-bottom mini right"></b>
          	<ul class="dropdown-menu">
		        <li class="dropdown-submenu">
		        	<a href="form-GLPI" style="color:#505052">POSTVENTA</a>
		        </li>
		        <li class="dropdown-submenu">
		        	<a href="form-GLPI" style="color:#505052">PQRS</a>
		        </li>
		        <li class="dropdown-submenu">
		        	<a href="form-GLPI" style="color:#505052">FELICITACIONES</a>
		        </li>	
		        <li class="dropdown-submenu">
		        	<a href="form-GLPI" style="color:#505052">PLAN REFERIDOS</a>
		        </li>	
			</ul>
        </a>
    </li>

    <li><a href="contacto">CONTÁCTANOS</a></li>


 </ul>
-->