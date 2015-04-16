<?php
/**
 * Created by PhpStorm.
 * User: Manu
 * Date: 04/02/2015
 * Time: 17:32
 */

class BackController extends BaseController
{

    public function index()
    {
        return View::make('backend.login');
    }

   
      public function logMe(){

        $datas = array(
            'username' => Input::get('login'),'password'=> Input::get('pwd'));
        if (Auth::attempt($datas))
        {
            return View::make('backend.accueilBack');
        }
        else{
            return Redirect::to('admin');
        }
    }

    public function logout(){

        Auth::logout();
        return Redirect::to('/');
    }
    // Partie gestion des articles

    public function listeArticle(){
        $articles = Article::all();
        return View::make('backend.listeArticle')->with('articles',$articles);  
    }
    public function addArticle(){
        return View::make('backend.addArticle');
    }
    public function article_added(){
            $titre = Input::get('titre');
            $mess = Input::get('mess');
            $actif = Input::get('actif');
            if($actif == 'on'){
                $actif = 1;
            }
            else{
                $actif = 0;
            }
            $article = new Article;
            $article->title = $titre;
            $article->content = $mess;
            $article->actif = $actif;
            $article->save();   
            return Redirect::to('/liste_articles');
    }
    public function delete_article($id){
        Article::find($id)->delete();
        return Redirect::to('/liste_articles');
    }
    public function modif_article($id){
        $article = Article::find($id);
        return View::make('backend.modifArticle')->with('article',$article);
    }
    public function article_modified(){
        $title = Input::get('titre');
        $content = Input::get('mess');
        $actif = Input::get('actif');
        $id = Input::get('id');

        $article = Article::find($id);
        $article->title = $title;
        $article->content = $content;
        $article->actif = $actif;
        $article->save();

        return Redirect::to('/liste_articles');
    }
}