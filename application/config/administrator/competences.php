<?php
return array(

	'title' => 'Compétences',

	'single' => 'competence',

	'model' => 'Competence',

	'columns' => array(
		'id',
		'nom',
		'niveau',
		'categorie' => array(
			'title' => 'Catégorie',
			'relationship' => 'categorie',
			'select' => 'titre',
		),

	),

	'edit_fields' => array(
		'id',
		'nom',
		'niveau',
		'categorie' => array(
			'type' => 'relationship',
			'title' => 'Catégorie',
			'name_field' => 'titre', //what column or getter on the other table you want to use to represent this object
			),	
	),

);
