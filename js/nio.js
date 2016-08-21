$(document).ready(function()
{
	if(!nio.esMovil())
	{
		jQuery.preloadCssImages();
		nio.calculaAlto();
		nio.parallax();

	}
});
var nio =
{
	calculaAlto:function()
	{
		//alert("kjhdjashdkjhk");
		var altoVentana = $("#myCarousel").height();
		var medio 		= ((parseInt(altoVentana) / 2) - 300);
	},
	parallax:function(){
		//alert("dlfhsdkfjh")
		$('.amenities').parallax("100%", 0.10);
	},
	esMovil:function()
	{
		var salida = false;
	  	var dispositivo = navigator.userAgent.toLowerCase();
      	if( dispositivo.search(/iphone|ipod|ipad|android/) > -1 )
      	{
	      	salida = true;
  		}
  		return salida;
	},
	validarEmail:function(email) 
	{
	    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	    if (!expr.test(email))
	    {
	       return false;
	    }
	    else
	    {
	    	return true;
	    }

	}
}