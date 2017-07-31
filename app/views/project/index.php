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
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Projet 1</a></p>
      <p><a href="#">Projet 2</a></p>
      <p><a href="#">Projet 3</a></p>
      <p><a href="#">Projet 4</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <?php require_once 'contenu_project.php'; ?>
    </div>
  </div>
</div>

<?php require_once("../app/views/includes/footer.php");?>