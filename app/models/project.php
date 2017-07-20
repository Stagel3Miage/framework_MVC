<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Project extends Eloquent
{
  public $name;

  public $timestamps = [];

  protected $fillable = ['NOM_PRO', 'REF_PRO', 'DUREE_PRO', 'DETEDEBUT_PRO', 'GESTINONAIRE_PRO', '	INITIATEUR_PRO'];

/*
duree : int;
date : date;
le reste : varchar
*/  
}