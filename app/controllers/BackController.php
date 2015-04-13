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
        return Redirect::to('admin');
    }


    //Partie gestion des comptes:

    public function listeRoot(){
        $users = Player::where('statut','=','admin')->get();
        return View::make('backend.listeRoot')->with('users',$users);
        
    }
    public function addRoot(){
        return View::make('backend.admin');
    }
    public function ajouterAdmin(){
        $username = Input::get('login');
        $pwd = Input::get('mdp');
        $pw2 = Input::get('mdp2');
        $email = Input::get('mail');
        $statut ='admin';
            $player = new Player;
            $player->username = $username;
            $player->password = Hash::make($pwd);
            $player->email = $email;
            $player->statut = $statut;
            $player->save();
            $users = Player::where('statut','=','admin')->get();
            return View::Make('backend.listeAdmin')->with('users',$users);
        }   
}