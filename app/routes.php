<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array('uses'=>'HomeController@index'));
// LOGIN
Route::get('/admin',array('uses'=>'BackController@index' , 'as' => 'login'));
Route::get('/logout',array('uses'=>'BackController@logout','as'=>'logout'));
Route::post('/logMe',array('uses'=>'BackController@logMe','as'=>'log'));
//Admins
Route::get('/addRoot',array('before'=>'auth', 'uses'=>'BackController@addRoot', 'as' => 'check.root'));
Route::post('/listeAdmin',array('before'=>'auth','uses'=>'BackController@ajouterAdmin','as'=>'listeAdmin'));
Route::get('/listeRoot',array('before'=>'auth','uses'=>'BackController@listeRoot', 'as' => 'listeRoot'));

