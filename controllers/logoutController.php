<?php 

	// ejecuta el metodo de logout en el objeto User
	$_SESSION['morphyx']['user']->logout();

	// Borra las variables de sesión
	session_unset();

	// Elimina la sesión
	session_destroy();
	
	header("Location: landing");
 ?>