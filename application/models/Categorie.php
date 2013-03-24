<?php

class Categorie extends Eloquent{

	public function competences()
	{
		return $this->has_many('Competence');
	}
}

?>