<?php

class Project extends Controller
{
  public function index($data = '')
  {
      $this->view('project/index', ['name' => $data]);
  }


  public function create($username ='', $email = ''){
    /*
  			User::create([
  		    	'username' => $username,
      			'email' => $email
  			]);
        */
  }
  
}