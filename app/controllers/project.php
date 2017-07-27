<?php

class Project extends Controller
{
  public function index($data = '')
  {
      $this->view('project/index', []);
  }


  public function contenu_project($data = '')
  {
     $this->view('project/contenu_project', []);
  }

  
}