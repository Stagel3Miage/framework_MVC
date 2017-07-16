<?php

class Home extends Controller
{
  public function index($data = '')
  {
      $this->view('home/index', ['name' => $data]);
  }


  public function create($username ='', $email = ''){
  			/*User::create([
  		    	'username' => $username,
      			'email' => $email
  			]);*/
  }
}
