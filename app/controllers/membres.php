<?php

class Membres extends Controller
{
  public function index($data = '')
  {
      $this->view('membres/index', ['name' => $data]);
  }

}