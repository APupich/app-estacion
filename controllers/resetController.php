<?php 
	
	// crea el objeto con la vista
	$tpl = new Kiwi("reset");

	$tpl->setVarsTPL(["TOKEN"=>explode("=", $_SERVER["REQUEST_URI"])[1]]);
	// imprime en la página la vista
	$tpl->printTPL();

 ?>