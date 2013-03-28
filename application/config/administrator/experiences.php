<?php
return array(

	'title' => 'Expériences',

	'single' => 'experience',

	'model' => 'Experience',

	'columns' => array(
			'id',
			'adresse',
			'nom',
			'site',
			'description',
			'debut',
			'fin',
	),

	'edit_fields' => array(
			'id',
			'adresse',
			'nom',
			'site',
			'description',
			'debut' => array(
			    'type' => 'date',
			    'title' => 'Début',
			    'date_format' => 'dd-mm-yy',
			),
			'fin' => array(
			    'type' => 'date',
			    'title' => 'Fin',
			    'date_format' => 'dd-mm-yy',
			),
	),



);