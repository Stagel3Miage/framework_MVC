<?php
	$var = getcwd() . "/../app/views/includes/headers.php";
//echo $var;
	if ($_SESSION["user_connected"] == true){
    	$var = getcwd() . "/../app/views/includes/headers_connected.php";
  	}
  	//echo '--------->' . $_SESSION["user_connected"];
	require_once($var);?>
<?php require_once("../app/views/includes/carousel.php");?>
<?php require_once("../app/views/includes/actualites.php");?>
<?php //require_once("../app/views/includes/partenaires.php");?>
<?php //require_once("../app/views/includes/newsletter.php");?>
<?php require_once("../app/views/includes/footer.php");?>
