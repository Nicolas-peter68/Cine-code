<?php

namespace App\Controllers;
use App\Controllers\Database;

$db = new Database ('root', '', 'crud');

class PageController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        /*$movieModel = new MovieModel();
        $movies = $movieModel->getAllMovies();*/

        $template = $this->twig->load('index.html.twig');
        echo $template->render();
    }

    public function error404()
    {
        /*
        $template = $this->twig->load('Page/error404.html.twig');
        echo $template->render();*/
        echo "404";
    }

    public function registerPage()
    {
        $template = $this->twig->load('register.html.twig');
        echo $template->render();

    }

    public function loginPage()
    {
        $template = $this->twig->load('login.html.twig');
        echo $template->render();

    }

    public function registerUser() 
    {

        

        if(!empty($_POST)){

            /*if($_POST['username']){
                $req = $pdo->prepare('select id FROM users WHERE username = ?');
                $req->execute([$_POST['username']]);
                $user = $req->fetch();
                if($user){
                    //$errors['username'] = 'Nom utilisateur déjà utiliser';
                    echo "nom utilisateur déjà utiliser";
                }
            } */ 



            if($_POST['password'] === $_POST['password_confirm']) {
                $sql = "INSERT INTO users (`id`, `username`, `password`) VALUES (NULL, :username, :password)";
                $req = $this->pdo->prepare($sql);
                $req->execute(["username" => $username, "email" => $email, "password" => $password]);
            }else {
                //$errors['password'] = "Les mots de passe ne correspondent pas";
                echo "erreur";
            }





        }
    }


    public function registerAccount(){

    }

}