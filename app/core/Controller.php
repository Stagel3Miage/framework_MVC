<?php
class Controller
{
  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    //echo " MODEL = " . '../app/models/' . $model . '.php';
    return new $model();
  }

/*
  $view ne contient jamais l'extension .php
  car il est toujours traité dans la classe App,

  dans la barre url, s'il y a une extension .php (ou pas )dans la methode
  appelé après le controller => $view ne contient jamais d'extension php

  par exemple: http://localhost/framework_MVC/public/home/index.php
  réagit pareil que http://localhost/framework_MVC/public/home/index,
  le $view sera toujours index
*/
  public function view($view, $data = [])
  {
    //echo '|||||||  '. $view . '|||||||<br>';
    // si oui enlever 
    //if (strstr($view, '.php')) {     // verifier si $view contient une extension php

      //echo 'extension php OKKK <br>';
    //}
    //else{
    //  echo ' ne contient pas l extension php <br> '. $view;
    //}

    // tester si '../app/views/' . $view . '.php' est un fichier qui existe.
    //echo '../app/views/' . $view . '.php'. 'avec les donnee ' . $_GET['name'] ;
    require_once '../app/views/' . $view . '.php';

  }
  
}
