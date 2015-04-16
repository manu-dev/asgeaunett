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
Route::get('/login',array('uses'=>'BackController@index' , 'as' => 'login'));
Route::get('/logout',array('uses'=>'BackController@logout','as'=>'logout'));
Route::post('/user/me',array('uses'=>'BackController@logMe','as'=>'log'));
//CONTACT
Route::get('/contact',array('uses'=>'HomeController@contactForm','as'=>'contact'));
Route::post('/envoyerMail',array('uses'=>'HomeController@sendmail','as'=>'sendmail'));
// ARTICLES
Route::get('/liste_articles',array('uses'=>'BackController@listeArticle','as'=>'liste_articles'));
Route::get('/add_article',array('uses'=>'BackController@addArticle','as'=>'form_articles'));
Route::post('/article_added',array('uses'=>'BackController@article_added','as'=>'article_added'));
Route::get('/delete_article/{id}',array('uses'=>'BackController@delete_article','as'=>'delete_article'));
Route::get('/modif_article/{id}',array('uses'=>'BackController@modif_article','as'=>'modif_article'));
Route::post('/article_modified',array('uses'=>'BackController@article_modified','as'=>'article_modified'));