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