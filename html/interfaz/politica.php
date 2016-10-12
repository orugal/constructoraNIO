<div class="row">
    <div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12 paddingInt1">
        <h3 style="text-transform: uppercase;"><?php echo $info_id[0]['titulo']?></h3>
        <img src="<?php echo $funciones->imagenCorrecta($info_id[0]['imagen']);?>" class="thumbnail" style="float:left;margin:0 5% 5% 0"/>
        <p class="parrafosInternos textoGlobal">
           <?php echo $info_id[0]['contenido']?>
        </p>
        <!--<img src="images/diseno/btn1.gif" />-->
    </div>
</div>