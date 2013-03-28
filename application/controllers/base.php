<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */

	public function __construct()
	{
		//assets
		Asset::add('style', 'css/patternizer.min.js');
		Asset::add('style', 'css/style.css');
	    	Asset::add('js', 'js/jquery.colorbox-min.js');
		parent::__construct();
	}

	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}
