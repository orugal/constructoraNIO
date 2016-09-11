<!--                                                    
     ("`-''-/").___....''"`-._
      `6_ 6  )   `-.  (     ).`-.__.`) 
      (_Y_.)'  ._   )  `._ `. ``-..-'
    _..`..'_..-_/  /..'_.' ,'
   (il),-''  (li),'  ((!.-'

   Desarrollado por  @orugal
   https://github.com/orugal
-->
<!DOCTYPE html>
<html>
	<head>
		<title>NOTICIAS</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset=utf-8>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900italic,900&subset=latin,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<!--<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />-->
		<link rel="stylesheet" type="text/css" href="css/nio.css" />
		<link rel="stylesheet" type="text/css" href="css/full-slider.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
		<link rel="shortcut icon" type="image/x-icon" href="images/diseno/favicon.ico" />
	</head>
	<body>
		<nav class="navbar navbar-fixed-top navbar-center">
			<div class="container">
					<div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand visible-lg visible-md margin" href="home">
				      	<img src="images/diseno/logo.png" />
				      </a>
				      <a class="navbar-brand visible-xs visible-sm" href="home" style="margin-top:-15px">
				      	<img src="images/diseno/logo.png" width="40%" />
				      </a>
				    </div>

				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="border:none;box-shadow: none;">
				      <?php include("opcMenu.php") ?>
				    </div>
				  </div>
			</div>
				  
			</nav>
		<header id="myCarousel" class="carousel slide carouselInt">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
         	<div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/diseno/foto1.png');"></div>
                <div class="carousel-caption" style="text-align: left;">
                    <!--<h2>Caption 1</h2>-->
                    <h2 class="text-right" style="padding:0 10% 0 0">
                    <!--<i class="fa fa-leaf" aria-hidden="true"></i> -->
                    | una invitación a un nuevo estilo de vida</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </header>

    <div class="container-fluid" style="margin:3% 0 3% 0">
    	<div class="container">
    		<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Noticias</li>
			</ol>
    		<div class="row">
    			<div class="col col-xs-12 col-sm-12 col-lg-8 col-md-8 paddingInt1">
    				<h3>Trayendo el mar a las viviendas en Neiva </h3>
    				<img src="images/diseno/img_big5.jpg" width="100%" class="thumbnail" />
    				<p class="parrafosInternos textoGlobal truncate">
	    				Somos un equipo de profesionales y técnicos de alto nivel que desarrollamos con seriedad y compromiso proyectos de vivienda, hoteles y oficinas con  altos estándares de calidad. Pensamos en  diseños arquitectónicos  vanguardistas, innovadores, sostenibles y amigables con el medio ambiente que contribuyan con el desarrollo del país y de familias que buscan construir sueños en concreto.
    				</p>
					<blockquote>
					  <small>17 de Junio de 2016.</small>
					</blockquote>

    				<img src="images/diseno/btn1.gif" />
    			</div>
    			<div class="col col-xs-12 col-sm-12 col-lg-4 col-md-4 paddingInt3">
    				<h3 class="text-right">Otras noticias</h3>
    				<div class="row">
    					<div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12 miniInternas2">
		    				<h4 class="tituloMiniInterna">Constructora NIO Neiva en San pedro</h4>
		    				<!--<img src="images/diseno/img2.jpg" width="100%" />-->
		    				<p class="parrafosInternos textoGlobal">
			    				Constructora Nio S.A. promueve oportunidades de negocio inmobiliario para proveer espacios de armonía y felicidad.
		    				</p>

					  		<small>17 de Junio de 2016.</small>
		    				<a href="" class="btn btn-link links" style="float:right">Leer noticia</a>
    					</div>
    					<center>
    						<img src="images/diseno/bordeHor.png" width="100%" />
    					</center>
    					<div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12 miniInternas2">
		    				<h4 class="tituloMiniInterna">Cómo usar la prima para vivienda propia</h4>
		    				<!--<img src="images/diseno/img2.jpg" width="100%" />-->
		    				<p class="parrafosInternos textoGlobal">
			    				Constructora Nio S.A. promueve oportunidades de negocio inmobiliario para proveer espacios de armonía y felicidad.
		    				</p>

					  		<small>17 de Junio de 2016.</small>
		    				<a href="" class="btn btn-link links" style="float:right">Leer noticia</a>
    					</div>
    					<center>
    						<img src="images/diseno/bordeHor.png" width="100%" />
    					</center>
    					<div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12 miniInternas2">
		    				<h4 class="tituloMiniInterna">Torres residenciales: poniéndole altura a las ciudades del mundo</h4>
		    				<!--<img src="images/diseno/img2.jpg" width="100%" />-->
		    				<p class="parrafosInternos textoGlobal">
			    				Constructora Nio S.A. promueve oportunidades de negocio inmobiliario para proveer espacios de armonía y felicidad.
		    				</p>

					  		<small>17 de Junio de 2016.</small>
		    				<a href="" class="btn btn-link links" style="float:right">Leer noticia</a>
    					</div>
    					<center>
    						<img src="images/diseno/bordeHor.png" width="100%" />
    					</center>
    					<div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12 text-center">
							<ul class="pagination">
							  <li><a class="links" href="#">&laquo;</a></li>
							  <li><a class="links" href="#">1</a></li>
							  <li><a class="links" href="#">2</a></li>
							  <li><a class="links" href="#">3</a></li>
							  <li><a class="links" href="#">4</a></li>
							  <li><a class="links" href="#">5</a></li>
							  <li><a class="links" href="#">&raquo;</a></li>
							</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

	<div class="container-fluid" style="margin:2% 0 0 0">
		<div class="container">
			<div class="row" style="padding: -3% 0 0 0">
				<div class="col-sm-12 col-xs-12 col-md-2 col-lg-2 text-center"></div>
				<div class="col-sm-12 col-xs-12 col-md-2 col-lg-2 text-center">
					<a href="contacto"><img src="images/diseno/btnContacto.png" width="100%" /></a>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4 text-center">
					<h2 class="text-center clasH2">SUEÑOS EN CONCRETO</h2>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-2 col-lg-2 text-center">
					<a href="https://www.facebook.com/ConstructoraNIO/" target="_blank"><img src="images/diseno/face.png" width="20%" /></a>
					<a href="https://www.instagram.com/constructora_nio/" target="_blank"><img src="images/diseno/insta.png" width="20%" /></a>
					<a href="#"><img src="images/diseno/youtube.png" width="20%" /></a>
					<a href="https://twitter.com/ConstructoraNIO" target="_blank"><img src="images/diseno/twitter.png" width="20%" /></a>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-2 col-lg-2 text-center"></div>
			</div>	
		</div>
	</div>
	<div class="container-fluid text-center" style="margin:2% 0 0 0 ">
		<div class="container">
			Sede principal Boogotá - Cll 79 # 8 - 38 | E-mail: info@constructoranio.com
		</div>
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/R-preloadcssimages.jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/nio.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			$('.carousel').carousel({
			  interval: 4000
			})
		});

	</script>
	</body>
</html>