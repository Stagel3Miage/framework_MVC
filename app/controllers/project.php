<?php

class Project extends Controller
{
  public function index($data = '')
  {
      $this->view('project/index', ['name' => $data]);
  }


  public function create($NOM_PRO ='', $REF_PRO = '', $DUREE_PRO = '', $DETEDEBUT_PRO = '', $GESTINONAIRE_PRO = '', $INITIATEUR_PRO = ''){
    
  			User::create([
  		    	'NOM_PRO' => $NOM_PRO,
      			'REF_PRO' => $REF_PRO,
            'DUREE_PRO' => $DUREE_PRO,
            'DETEDEBUT_PRO' => $DETEDEBUT_PRO,
            'GESTINONAIRE_PRO' => $GESTINONAIRE_PRO,
            'INITIATEUR_PRO' => $INITIATEUR_PRO
  			]);
        
  }
  
}