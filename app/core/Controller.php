<?php

class Controller
{
  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    echo " MODEL = " . '../app/models/' . $model . '.php';
    return new $model();
  }

  public function view($view, $data = [])
  {
  	echo " VIEW = " . '../app/views/' . $view . '.php'; 
    require_once '../app/views/' . $view . '.php';
  }
  
}
