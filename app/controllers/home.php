<?php

class Home extends Controller
{
  // $view()  et $controller()


  public function index($data = '')
  {
      $this->view('home/index', []);
  }
  
}
