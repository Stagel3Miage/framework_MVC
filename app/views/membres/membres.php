<?php
	



	function displayUsers($data ='')
	{
		$output = "";
		$output  = $output ."
		<div class=\"latestcars\">
			<h1 class=\"text-center\">&bullet; NOS   MEMBRES &bullet;</h1>
			<ul class=\"nav nav-tabs navbar-left latest-navleft\">
				<li role=\"presentation\" class=\"li-sortby\"><span class=\"sortby\">LISTE PAR: </span></li>
				<li data-filter=\".ANCIEN\" role=\"presentation\"><a href=\"#mostrecent\" class=\"prcBtnR\">ANCIENNETE </a></li>
							<li  role=\"presentation\"><a href=\"#\" class=\"alphSort\">ALPHABETIQUE </a></li>
				<li id=\"hideonmobile\">
			</ul>
		</div>
		<br>
		<br>
			<div class=\"grid\" id=\"grid_membres\">
		<div class=\"row\">
			";
		$i = count($data);
		$j =0;
		while ($j < $i) {
			$output = $output . "
			<div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\">
				<div class=\"txthover\">
								$data[$j]
							<div class=\"stars2\">
								<div class=\"glyphicon glyphicon-star\"></div>
								<div class=\"glyphicon glyphicon-star\"></div>
								<div class=\"glyphicon glyphicon-star\"></div>
							</div>
						</div>
				</div>
			</div>
			";
			$j = $j + 1;
		}

		$output = $output . "</div> </div>";
	return $output;
	}

?>
<?php //require_once("../app/views/includes/headers.php");
 	if (!isset($_SESSION["user_connected"]))
    {

 	    $var = getcwd() . "/../app/views/includes/headers.php";
    }
    else if (isset($_SESSION["user_connected"]) && $_SESSION["user_connected"] == 1 ){
    	$var = getcwd() . "/../app/views/includes/headers_connected.php";
    	$_SESSION["user_connected"] = 1;
      
    }
  	require_once($var);
 echo displayUsers($data);
?>



<?php require_once("../app/views/includes/footer.php");?>

