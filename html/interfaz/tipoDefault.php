<?php
global $funciones;
global $core;
global $id;
global $migas;
$infoId	=	$core->info_id;

$hijosQuienes			=	$db->GetAll(sprintf("SELECT * FROM principal WHERE id_padre=%s and id!=%s AND eliminado=0 AND visible=1  ORDER BY orden ASC",$infoId[0]['id_padre'],$id));

include(_PLANTILLAS.'interfaz/default.html');
?>