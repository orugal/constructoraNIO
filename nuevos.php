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
		<title>PRÓXIMOS LANZAMIENTOS</title>
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
		<header id="myCarousel" class="carousel slide">
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
                <div class="fill" style="background-image:url('images/diseno/img_big5.jpg');"></div>
                <div class="carousel-caption" style="text-align: left;">
                    <!--<h2>Caption 1</h2>-->
                    <h2 class="text-right" style="padding:0 10% 0 0">
                    <!--<i class="fa fa-leaf" aria-hidden="true"></i> -->
                     ¡Preparate para lo que viene!<br>
                      Es momento de registrarte y ser nuestro<br>
                      invitado de honor
                    </h2>
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

    <div class="container-fluid">
    	<div class="container"  style="padding:3%">
    		<div class="row">
    			<div class="col col-xs-12 col-sm-12 col-lg-7 col-md-7">
    				<h2>Búscanos</h2>
    				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110580.10660504199!2d-74.91257111434815!3d4.240795542226971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f2861c4f48c75%3A0x9b8d16c352425a32!2sFlandes%2C+Tolima!5e1!3m2!1ses!2sco!4v1471792779723" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    			</div>
    			<div class="col col-xs-12 col-sm-12 col-lg-5 col-md-5">
    				<h2>Regístrate</h2>
    				<form>
					  <div class="form-group">
					    <label for="email">Tu nombre <span class="small">(Requerido)</span>:</label>
					    <input type="text" class="form-control" id="nombre">
					  </div>
					  <div class="form-group">
					    <label for="email">Tu email <span class="small">(Requerido)</span>:</label>
					    <input type="email" class="form-control" id="email">
					  </div>
					  <div class="form-group">
					    <label for="email">Tu teléfono / Celular <span class="small">(Requerido)</span>:</label>
					    <input type="text" class="form-control" id="telefono">
					  </div>
					  <div class="form-group">
					    <label for="email">¿Por qué te gustaría invertir en este proyecto en flandes?:</label>
					    <textarea class="form-control" id="porque"></textarea>
					  </div>

					  <div class="form-group">
						  <div class="radio">
						    <strong>Conozco y acepto las políticas de datos personales y autorizo el manejo de estos<br></strong>
						    <label><input type="radio"> Si</label>
						    <label><input type="radio"> No</label>
						  </div>
					  </div>
					  <button type="submit" class="btn btn-warning">Enviar</button>
					</form>
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