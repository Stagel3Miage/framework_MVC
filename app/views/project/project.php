<?php
	$var = getcwd() . "/../app/views/includes/headers.php";
	require_once($var);

	echo "Test de la page projet dans la vue";

	require_once("../app/views/includes/footer.php");

?>