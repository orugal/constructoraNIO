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
		<title>TRABAJA CON NOSOTROS</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset=utf-8>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900italic,900&subset=latin,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<!--<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />-->
		<link rel="stylesheet" type="text/css" href="css/nio.css" />
		<link rel="stylesheet" type="text/css" href="css/full-slider.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" type="text/css" href="css/sweetalert.css" />
		<link rel="shortcut icon" type="image/x-icon" href="images/diseno/favicon.ico" />
	</head>
	<body>
	<div class="container-fluid">
		<div class="container">
			<nav class="navbar navbarInt navbar-center">
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
		</div>
	</div>
	<!--<div class="container-fluid bannersInt bgInternas"></div>-->
    <div class="container-fluid">
    	<div class="container"  style="padding:3%">
    		<div class="row">
    			<div class="col col-xs-12 col-sm-12 col-lg-3 col-md-3"></div>
    			<div class="col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    			<form method="post" id="formEnvio">
    				<h2 class="titulos" style="padding:2%;background:#ff8e4c;color:#FFF;text-align:center;font-size:1.5em;font-weight:normal">TRABAJA CON NOSOTROS</h2>
					    
    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12">
    						Descarga nuestro <a href="#">Formato hoja de vida</a> , diligencia los datos y completa el formulario.
    					</div>
    				</div>
    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12" style="color:#ff8e4c"><h4>DATOS DE CONTACTO</h4></div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label class="visible-sm visible-xs" for="nombre">&nbsp;</label>
					    	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre (*)">
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label class="visible-sm visible-xs" for="apellidos">&nbsp;</label>
					    	<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo electrónico (*)">
    					</div>
    				</div>

    				<div class="row">
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="cedula">&nbsp;</label>
					    	<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono fijo">
    					</div>
    					<div class="col col col-xs-12 col-sm-12 col-lg-6 col-md-6">
    						<label for="cedula">&nbsp;</label>
					    	<input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cargo">
    					</div>
    				</div>

    				<div class="row" style="margin:5% 0 0 0">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12">
							<div class="form-group">
							    <label for="exampleInputFile">Adjunta tu hoja de vida</label>
							    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							    <small id="fileHelp" class="form-text text-muted">Sólo se permiten archivos PFD.</small>
							</div>
						</div>
					</div>

					<div class="checkbox">
					    <label><input type="checkbox"> Acepto recibir información de NIO en mi celular</label>
					</div>
					<div class="checkbox">
					    <label><input type="checkbox">  Acepto recibir información de NIO en mi correo electrónico</label>
					</div>

    				<div class="row" style="margin:2% 0 0 0">
    					<div class="col col col-xs-12 col-sm-12 col-lg-12 col-md-12 text-right">
					  		<button type="button" class="btn btn-warning" onclick="nio.enviaWebServicePostVenta()">Enviar</button>
					  	</div>
					 </div> 		
    				
					</form>
    			</div>
    			<div class="col col-xs-12 col-sm-12 col-lg-3 col-md-3"></div>
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
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/sweetalert.min.js"></script>
	<script type="text/javascript" src="js/nio.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			//inicializo el seleccionador de fecha
			$('#fechaEntrega').datetimepicker({
		            format: 'YYYY-MM-DD'
		     });
		});

	</script>
	</body>
</html>