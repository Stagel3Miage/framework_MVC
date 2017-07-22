<?php

class Project extends Controller
{
  public function index($data = '')
  {
      $this->view('project/index', []);
  }


  public function project($data = '')
  {
     $this->view('project/project', []);
  }
/*
  public function create($username ='', $email = ''){
    
  			User::create([
  		    	'username' => $username,
      			'email' => $email
  			]);
        
  }*/
  
}