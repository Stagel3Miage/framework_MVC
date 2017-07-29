<?php
 	  if (!isset($_SESSION["user_connected"]))
    {

 	    $var = getcwd() . "/../app/views/includes/headers.php";
    }
    else if (isset($_SESSION["user_connected"]) && $_SESSION["user_connected"] == 1 ){
    	$var = getcwd() . "/../app/views/includes/headers_connected.php";
    	$_SESSION["user_connected"] = 1;
      
    }
	require_once($var);?>
<?php require_once("../app/views/includes/carousel.php");?>
<?php require_once("../app/views/includes/actualites.php");?>
<?php //require_once("../app/views/includes/partenaires.php");?>
<?php //require_once("../app/views/includes/newsletter.php");?>
<?php require_once("../app/views/includes/footer.php");?>
