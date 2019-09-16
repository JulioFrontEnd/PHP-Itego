<?php 
	$project = "php-itego";
	define("DOMINIO","http://".$_SERVER["SERVER_NAME"]."/".$project);

	function titleMenu($Titulo)
	{
		echo "<head><title>".$Titulo."</title></head>";
	}