<?php
	$var = getcwd() . "/../app/views/includes/headers.php";
	require_once($var);?>


<style type="text/css">
	p
	{
		color: red;
	}
/*
  .toggler {
    width: 500px;
    height: 200px;
  }
  */

  #button {
    padding: .5em 1em;
    text-decoration: none;
  }
  #effect {
    position: relative;
    width: 240px;
    height: 170px;
    padding: 0.4em;
  }
  #effect h3 {
    margin: 0;
    padding: 0.4em;
    text-align: center;
  }


</style>


<script type="text/javascript">


	$(function (){
		function runEffect(){
			var effect = "blind";
			var options = {};
			$("#effect").toggle(effect,options,500);
		};
		$("#button").on("click", function(){
			runEffect();
		});
	});




</script>


<!-- Container (Pricing Section) -->
<div class="container-fluid">
  <div class="text-center">
    <h2>Projets</h2>
    <!--h4>Choose a payment plan that works for you</h4-->
  </div>

  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Nom / avancement</h1>
        </div>
        <div class="panel-body">
          <a href = "#">Projet 1	</a> 50% <br>
          <a href = "#">Projet 2	</a> 36% <br>
          <a href = "#">Projet 3	</a> 28% <br>
          <a href = "#">Projet 4	</a> 90% <br>
          <a href = "#">Projet 5	</a> 78% <br>
          <a href = "#">Projet 6	</a> 90% <br>
          <a href = "#">Projet 7	</a> 78% <br>
          <a href = "#">Projet 8	</a> 78% <br>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg" id="button" class="ui-state-default ui-corner-all" >Sign Up</button>
        </div>
      </div>      
    </div>     

    <div class="col-sm-4 col-xs-12 toggler ">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg" id="button" class="ui-state-default ui-corner-all" >Sign Up</button>
        </div>
      </div>      
    </div>    

    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div>


<?php require_once("../app/views/includes/footer.php");?>