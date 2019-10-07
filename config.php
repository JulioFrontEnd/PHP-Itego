<?php 
	$project = "php-itego";
	define("DOMINIO","http://".$_SERVER["SERVER_NAME"]."/".$project);

	function titleMenu($Titulo)
	{
		echo "<head><title>".$Titulo."</title></head>";
	}

	function timeZone(){
		
		date_default_timezone_set('America/Sao_Paulo');
		$data = date("d/m/y",time());
		$hora = date("H:m",time());
		$msg = date("H",time());

		if($msg > 0 and $msg <= 6){
			$msg = "Boa Madrugada.";
		}else if($msg >6 and $msg <= 12){
			$msg = "Bom Dia.";
		}else if($msg > 12 and $msg <= 18){
			$msg = "Boa Tarde.";
		}else{
			$msg = "Boa Noite.";
		}

		return (object) ["data"=>$data,"hora"=>$hora,"msg"=>$msg];
	}