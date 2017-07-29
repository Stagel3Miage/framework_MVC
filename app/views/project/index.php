<?php
 	if (!isset($_SESSION["user_connected"]))
    {

 	    $var = getcwd() . "/../app/views/includes/headers.php";
    }
    else if (isset($_SESSION["user_connected"]) && $_SESSION["user_connected"] == 1 ){
    	$var = getcwd() . "/../app/views/includes/headers_connected.php";
    	$_SESSION["user_connected"] = 1;
      
    }
  	require_once($var);

?>






<br><br><br><br><br><br>

<?php require_once("../app/views/includes/footer.php");?>