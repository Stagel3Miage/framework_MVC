<?php

class Partenaires extends Controller
{
  public function index($data = '')
  {
      $this->view('partenaires/index', []);
  }

  public function affiche($data = '')
  {
      $this->view('partenaires/affiche_partenaire', ['name' => $data]);
  }


}