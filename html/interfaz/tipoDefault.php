<?php
global $funciones;
global $core;
global $id;
global $migas;
$infoId	=	$core->info_id;

//$hijosQuienes			=	$db->GetAll(sprintf("SELECT * FROM principal WHERE id_padre=%s and id!=%s AND eliminado=0 AND visible=1  ORDER BY orden ASC",$infoId[0]['id_padre'],$id));

$ssql	=	sprintf("SELECT * FROM principal WHERE id_padre=1320 AND eliminado=0 AND id != %s AND visible=1 ORDER BY orden ASC",$id);

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
	$numver=1;
}
$paging->porPagina($numver);
$paging->agregarConsulta($ssql);
$paging->ejecutar();
if(!$paging->numTotalRegistros())
 {
	$no_encon="No hay regitros con este criterio de b&uacute;squeda!!!";
}

$links = $paging->fetchNavegacion();

include(_PLANTILLAS.'interfaz/default.html');
?>