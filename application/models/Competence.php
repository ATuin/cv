<?php

class Competence extends Eloquent{

	public function categorie()
	{
		return $this->belongs_to('Categorie');
	}

}


