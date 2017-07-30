<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Association ARME</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>/source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>/source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href='<?php echo CSS_PATH; ?>/style/mystyle.css'>
  
  	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">	
	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>/source/bootstrap-datepicker/css/bootstrap-datepicker.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <!--link rel="stylesheet" href="/resources/demos/style.css"-->


</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
	
			<ul class="logreg">
				<li><a data-toggle="modal" data-target="#loginModal"> Se connecter </a> </li>
				<li><a data-toggle="modal" data-target="#Registration" id="botModal"> S'enregistrer </a></li>
			</ul>
	</div>

		<!--modal login -->
			<?php include("forms/login.php"); ?>
		<!-- mdp oublié -->
			<?php include("forms/mdp_oublie.php"); ?>
		<!-- modal register-->
			<?php include("forms/registration.php"); ?>

	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<a class="logo" href="/framework_MVC/public/home/"><img src="<?php echo CSS_PATH; ?>image_association/logo/arme_logo_4.png" alt="logo"></a>
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>


			</div>
		</div>

	</nav>
</div>
<!-- fin header -->
