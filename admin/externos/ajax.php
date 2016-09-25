<?php 
extract($_POST);
if($accion == 1)
{
	$url = str_replace("á","a",strtolower($texto));
	$url = str_replace("é","e",$url);
	$url = str_replace("í","i",$url);
	$url = str_replace("ó","o",$url);
	$url = str_replace("ú","u",$url);
	$url = str_replace("ñ","n",$url);
	$url = str_replace(" ","-",$url);
	$url = str_replace("_","-",$url);
	$url = str_replace(".","",$url);
	$url = str_replace("?","",$url);
	$url = str_replace("¿","",$url);
	$url = str_replace("!","",$url);
	$url = str_replace("¡","",$url);

	echo $url;
}
?>