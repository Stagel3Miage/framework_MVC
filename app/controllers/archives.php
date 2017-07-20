<?php

class Archives extends Controller
{
  public function index($data = '')
  {
      $this->view('archives/index', ['name' => $data]);
  }


  public function create($username ='', $email = ''){
    /*
  			User::create([
  		    	'username' => $username,
      			'email' => $email
  			]);*/
  }
  
}
