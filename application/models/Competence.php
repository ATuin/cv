<?php

class Competence extends Eloquent{

    	public static $timestamps = true;

	public function categorie()
	{
		return $this->belongs_to('Categorie');
	}
    
  	public static $rules = array(
	    'niveau' => 'integer|min:1|max:5'
    	);
}


