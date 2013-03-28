<?php

class Categorie extends Eloquent{

    	public static $timestamps = true;
	public function competences()
	{
		return $this->has_many('Competence');
	}
}

?>