<?php
	$var = getcwd() . "/../app/views/includes/headers.php";
	require_once($var);?>

<div class="container">

	<div class="page-header">
    	<h1 class="h2">Les partenaires</h1>
    </div>

<br />


<div class="row">
  <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
    <p class="page-header" style="text-align: center;">ADIDAS</p>
    <img src="<?php echo INCLUDES_PATH;?>/image_association/parts/adidas.jpg" class="img-rounded img-responsive" width="250px" height="250px" />
    <p class="page-header">
    </p>
  </div>

  <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
    <p class="page-header" style="text-align: center;">AXA</p>
    <img src="<?php echo INCLUDES_PATH;?>/image_association/parts/AXA.jpg" class="img-rounded img-responsive" width="250px" height="250px" />
    <p class="page-header">
    </p>
  </div>

  <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
    <p class="page-header" style="text-align: center;">Caisse d'epargne</p>
    <img src="<?php echo INCLUDES_PATH;?>/image_association/parts/CE.jpg" class="img-rounded img-responsive" width="250px" height="250px" />
    <p class="page-header">
    </p>
  </div>

  <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
    <p class="page-header" style="text-align: center;">CNRS</p>
    <img src="<?php echo INCLUDES_PATH;?>/image_association/parts/CNRS.jpg" class="img-rounded img-responsive" width="250px" height="250px" />
    <p class="page-header">
    </p>
  </div>

  <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
    <p class="page-header" style="text-align: center;">Cultura</p>
    <img src="<?php echo INCLUDES_PATH;?>/image_association/parts/Cultura-4.jpg" class="img-rounded img-responsive" width="250px" height="250px" />
    <p class="page-header">
    </p>
  </div>

  <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
    <p class="page-header" style="text-align: center;">SNCF</p>
    <img src="<?php echo INCLUDES_PATH;?>/image_association/parts/SNCF.png" class="img-rounded img-responsive" width="250px" height="250px" />
    <p class="page-header">
    </p>
  </div>

</div>
</div>

<?php require_once("../app/views/includes/footer.php");?>