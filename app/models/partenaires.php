<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Partenaires extends Eloquent
{
  public $name;

  public $timestamps = [];

  protected $fillable = ['username', 'email'];
}
