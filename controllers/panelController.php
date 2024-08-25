<?php 

	// se muestra el contenido de SESSION (para debug)

	// crea el objeto con la vista
	$tpl = new Kiwi("panel");

	// carga la vista
	$tpl->loadTPL();

	// Reemplaza las variables de la vista
	// $tpl->setVarsTPL();

	// imprime en la vista en la página
	$tpl->printTPL();

 ?>