<?php
	global $core;
	global $id;
	$opciones_secundario = $core->listarMenuPrincipal();
	$queryNoticias		 = $db->GetAll(sprintf("SELECT * FROM principal WHERE id_padre=10 AND eliminado=0 ORDER BY id ASC limit 1"));	
	$contador	=	0;
	/*echo"<li>";	
						echo"<a title='".$datos['titulo']."' href='#home'>
								Inicio
							</a>";
					 echo"</li>";
	foreach($opciones_secundario as $datos)
	{
		$clase	=	($datos['id'] == $id)?'opcionesMenuSel':'';
		if($datos['id'] == 13)
		{
			echo"<li>";	
				echo"<a title='".$datos['titulo']."' href='#quienesSomos'>
						".$datos['titulo']."
					</a>";
			echo"</li>";
		}
		elseif($datos['id'] == 1190)
		{
			echo"<li>";	
				echo"<a title='".$datos['titulo']."' href='#menu'>
						".$datos['titulo']."
					</a>";
			echo"</li>";
		}
		elseif($datos['id'] == 1195)
		{
			echo"<li>";	
				echo"<a title='".$datos['titulo']."' href='#galeria'>
						".$datos['titulo']."
					</a>";
			echo"</li>";
		}
		elseif($datos['id'] == 1199)
		{
			echo"<li>";	
				echo"<a title='".$datos['titulo']."' href='#reservacion'>
						".$datos['titulo']."
					</a>";
			echo"</li>";
		}
		elseif($datos['id'] == 1203)
		{
			echo"<li>";	
				echo"<a title='".$datos['titulo']."' href='#contacto'>
						".$datos['titulo']."
					</a>";
			echo"</li>";
		}
		else
		{
			echo"<li>";	
				echo"<a title='".$datos['titulo']."' href='"._DOMINIO."index.php?id=".$datos['id']."'>
						".$datos['titulo']."
					</a>";
			echo"</li>";
		}	

		$contador++;	
	}*/
?>

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
<!-- Menú sólo movil-->
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


<!-- Fin menú sólo movil-->




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