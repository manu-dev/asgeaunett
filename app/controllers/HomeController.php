<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('frontend.accueil');
	}
	public function contactForm(){
		return View::make('frontend.contact');
	}
	public function sendmail(){
		$nom = Input::get('nom');
		$prenom = Input::get('prenom');
		$mail = Input::get('email');
		$obj = Input::get('obj');
		$mess = Input::get('message');
		$mess = "Nom : $nom Prenom: $prenom mail: $mail ".$mess;
	$test = mail($mail,$obj,$mess);


	}

}
