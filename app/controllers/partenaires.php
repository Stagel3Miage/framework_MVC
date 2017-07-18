<?php

class Partenaires extends Controller
{
  public function index($data = '')
  {
      $this->view('partenaires/index', ['name' => $data]);
  }

}