<?php
	$var = getcwd() . "/../app/views/includes/headers.php";
	require_once($var);?>

<?php 
	echo "je suis la page partenaire";
?>

<?php //echo "<br>" . "Le dossier courant se trouve au :" . getcwd() . "<br>"; ?>
<?php require_once("../app/views/includes/footer.php");?>