<?php
class Controller
{
  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    //echo " MODEL = " . '../app/models/' . $model . '.php';
    return new $model();
  }

  public function view($view, $data = [])
  {
    
    // verifier si $view contient une extension php
    // si oui enlever 

    // tester si '../app/views/' . $view . '.php' est un fichier qui existe.
    //echo '../app/views/' . $view . '.php'. 'avec les donnee ' . $_GET['name'] ;
    require_once '../app/views/' . $view . '.php';

  }
  
}
