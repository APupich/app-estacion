<?php


	session_start();

	// motor de plantillas
	include 'lib/kiwi/Kiwi.php';  

	// para pasar variables a las plantillas
	$vars = [];

	// por defecto se va a landing
	$controlador = "landing";

	// si pidieron una seccion lo llevamos a ella
	if(strlen($_GET['slug'])!=0){
		$aux = explode("/",$_GET['slug']);
		$controlador = $aux[0];	
	}

	// averiguamos si existe el controlador
	if(!is_file('controllers/'.$controlador.'Controller.php')){
		$controlador = "error404";
	}

	//=== firewall


	include 'controllers/'.$controlador.'Controller.php';

 ?>