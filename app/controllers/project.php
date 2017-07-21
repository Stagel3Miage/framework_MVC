<?php

class Project extends Controller
{
  public function index($data = '')
  {
      echo "<br>" . "UUUUU" . $_GET['url'] . "<br>";
      $this->view('project/index', []);
  }

/*
  public function create($username ='', $email = ''){
    
  			User::create([
  		    	'username' => $username,
      			'email' => $email
  			]);
        
  }*/
  
}