<?php

class Home extends Controller
{
  // $view()  et $controller()

  public function index($data = '')
  {
      $this->view('home/index', []);
  }

  public function test()
  {
  	echo 'ceci est un test dans la classe home ';
  }
  
}
