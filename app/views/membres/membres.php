<?php
	



	function displayUsers($data ='')
	{
		$output = "";
		$output  = $output ."
		<div class=\"latestcars\">
			<h1 class=\"text-center\">&bullet; NOS   MEMBRES &bullet;</h1>
			<ul class=\"nav nav-tabs navbar-left latest-navleft\">
				<li role=\"presentation\" class=\"li-sortby\"><span class=\"sortby\">LISTE PAR: </span></li>
				<li data-filter=\".RECENT\" role=\"presentation\"><a href=\"#mostrecent\" class=\"prcBtnR\">PLUS RECENT </a></li>
				<li data-filter=\".POPULAR\" role=\"presentation\"><a href=\"#mostpopular\" class=\"prcBtnR\">PLUS POPULAIRE </a></li>
				<li  role=\"presentation\"><a href=\"#\" class=\"alphSort\">ALPHABETIQUE </a></li>
				<li id=\"hideonmobile\">
			</ul>
		</div>
		<br>
		<br>
			<div class=\"grid\">
		<div class=\"row\">
			";
		$i = count($data);
		$j =0;
		while ($j < $i) {
			$output = $output . "
			<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
				<div class=\"txthover\">
					<img class=\"img-responsive\" src=\"/framework_MVC/app/views/includes/image_association/nosPartenaires/part1.png\" alt=\"part1\">
						<div class=\"txtcontent\">
							<div class=\"stars\">
								<div class=\"glyphicon glyphicon-star\"></div>
								<div class=\"glyphicon glyphicon-star\"></div>
								<div class=\"glyphicon glyphicon-star\"></div>
							</div>
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
<?php require_once("../app/views/includes/headers.php");
 echo displayUsers($data);
?>


<?php require_once("../app/views/includes/footer.php");?>

