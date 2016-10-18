<?php
ini_set('display_errors',0);
global $funciones;
global $core;
global $id;
global $migas;
$infoId =   $core->info_id;
?>
<div class="row">
    <div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12"></div>
    <div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12">
        <h3><?php echo $infoId[0]['titulo'] ?></h3>
        <div class="row"><br>
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                <?php echo $infoId[0]['issuu'] ?>                 
            </div>
        </div>
    </div>
    <div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12"></div>
</div>