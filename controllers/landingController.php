<?php



	// crea el objeto con la vista
	$tpl = new Kiwi("landing");

	// carga la vista
	$tpl->loadTPL();

	// array para pasar variables a la vista

	// reemplaza las variables en la vista
	// $tpl->setVarsTPL();

	// imprime en la página la vista
	$tpl->printTPL();

 ?>