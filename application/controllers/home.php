<?php

class Home_Controller extends Base_Controller {

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/
	public $restful = true;

	public function get_index()
	{
		/*for ($i=1; $i<=10; $i++)                                  
		{
		$experience = new Experience();
		$experience->nom="entreprise $i";
		$experience->adresse="adresse $i";
		$experience->site="site $i";
		$experience->description="description $i";
		$experience->debut=date("m.d.y");
		$experience->fin=date("m.d.y");
		$experience->save();

	}*/
	$experiences=Experience::all();
	return View::make('home.index')->with('experiences',$experiences);
}

public function get_contact()
{
	return View::make('home.contact');
}

public function post_contact()
{
	$nom = Input::get('nom');
	$prenom = Input::get('prenom');
	$email = Input::get('email');
	$message = Input::get('message');

		$contact = new Contact();
		$contact->nom=$nom;
		$contact->prenom=$prenom;
		$contact->email=$email;
		$contact->contenu=$message;
		$contact->save();


	$mailer = IoC::resolve('mailer');
	$message = Swift_Message::newInstance("Message de $nom ($email)")
	->setFrom(array('webmaster@agnus.me'=>'site cv'))
	->setTo(array('ariane@agnus.me'=>'Ariane'))
	->setBody($message,'text/html');
		// Send the email

	 	//echo $nom $email;
	Input::flash();

	if (empty($nom) OR empty($prenom) OR empty($email) OR empty($message))
	{
		Session::flash('status_error', 'Une erreur est survenue. Veillez à remplir tous les champs.');

	}

	else
	{
		
		if($mailer->send($message))
		{
			Session::flash('status_success', 'Message envoyé');
		}
		else
		{
			Session::flash('status_error', "Une erreur d'envoi a eu lieu");
		}
		
	}
	return  Redirect::to('home/contact');
}

}
