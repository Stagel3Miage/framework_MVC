<?php

class Membres extends Controller
{
  public function index($data = '')
  {
      $this->view('membres/index', ['name' => $data]);
  }

  public function display($data = '')
  {
  		$this->model('Membresmodel');
  		$data = Membresmodel::all();
      $this->view('membres/membres', $data);
  }

}

