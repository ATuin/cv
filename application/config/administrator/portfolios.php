<?php
return array(

	'title' => 'Portfolios',

	'single' => 'portfolio',

	'model' => 'Portfolio',

	'columns' => array(
		'id',
		'titre',
		'description',
		'screenshot' => array(
			'title' => 'Image',
			'type' => 'image',
			'location' => path('public') . 'uploads/portfolios/',
			'naming' => 'random',
			'length' => 20,
			'sizes' => array(
				array(65, 57, 'crop', path('public') . 'uploads/portfolios/thumbs/small/', 100),
				array(220, 138, 'landscape', path('public') . 'uploads/portfolios/thumbs/medium/', 100),
				array(383, 276, 'fit', path('public') . 'uploads/portfolios/thumbs/full/', 100)
				)
			)
		),

	'edit_fields' => array(
		'id',
		'titre',
		'description',
		'screenshot' => array(
			'title' => 'Image',
			'type' => 'image',
			'location' => path('public') . 'uploads/portfolios/',
			'naming' => 'random',
			'length' => 20,
			'sizes' => array(
				array(65, 57, 'crop', path('public') . 'uploads/portfolios/thumbs/small/', 100),
				array(220, 138, 'landscape', path('public') . 'uploads/portfolios/thumbs/medium/', 100),
				array(383, 276, 'fit', path('public') . 'uploads/portfolios/thumbs/full/', 100)
				)
			)
		),


	);

