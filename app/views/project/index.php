<?php
	$var = getcwd() . "/../app/views/includes/headers.php";
	require_once($var);?>

<style type="text/css">

a { 
    color: #8D0D19; 
}
a:hover { 
    color: #1A446C; 
}
  
#main { 
  height: 600px; width: 100%; 
  margin: 0; padding: 0; 
  background: #EEE4B9;
}

#navigation { 
    float: left;
  width: 150px; 
    height: 100%; 
  margin: 0; 
    padding: 0 2em; 
  color: #D4E6F4; 
    background: #8D0D19;
}

#navigation a { 
    color: #D4E6F4; 
    text-decoration: none; 
}
#navigation a:hover { 
    color: #FFFFFF; 
}

ul.subjects { 
  margin: 1em 0; 
    padding-left: 0; 
    list-style: none;
    
}

.selected { 
    font-weight: bold; 
}

</style>

    <div id= "navigation">
        <br/>
            <!--a href="admin.php">&laquo; Main Menu</a-->
        <ul class="subjects">
              <li>
                <a href="/framework_MVC/public/project/contenu_project">Projet 1</a>
              </li>

              <li>
                <a href="#">Projet 2</a>
              </li>



              <li>
                <a href="#">Projet 3</a>
              </li>
        </ul>
              <br/>
        <!--a href="#">+ Add a project</a-->
    </div>

    <div id="page">
                please select a project    
    </div>




<br><br><br><br><br><br>

<?php require_once("../app/views/includes/footer.php");?>