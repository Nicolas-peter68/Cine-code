<?php

namespace App\Controllers;

use App\Models\UsersModel;


class PageController extends GeneralController
{

    
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $template = $this->twig->load('index.html.twig');
        echo $template->render();
    }

    public function error404()
    {
        $template = $this->twig->load('404.html.twig');
        echo $template->render();
    }

    public function movie()
    {
        $template = $this->twig->load('movie.html.twig');
        echo $template->render();

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

    public function accountPage()
    {
        $template = $this->twig->load('account.html.twig');
        echo $template->render();

    }

    public function moviePage()
    {
        $template = $this->twig->load('movie.html.twig');
        echo $template->render();

    }

    public function newsPage()
    {
        $template = $this->twig->load('news.html.twig');
        echo $template->render();

    }

    public function actorPage()
    {
        $template = $this->twig->load('actor.html.twig');
        echo $template->render();

    }

    public function directorPage()
    {
        $template = $this->twig->load('director.html.twig');
        echo $template->render();

    }

    public function registerUser() 
    {
        $userModel = new UsersModel();
        $userModel->registerAccount();
        
    }

    public function loginUser() 
    {
        $userModel = new UsersModel();
        $userModel->loginAccount();
        
    }

    public function confirmUser($confirmation_token){
        $userModel = new UsersModel();
        $token = $userModel->accountConfirm($confirmation_token);
        $template = $this->twig->load('confirm.html.twig');
        echo $template->render(["token" => $token]);
    }

    public function filmPage(){
        $template = $this->twig->load('addfilm.html.twig');
        echo $template->render();
    }

    public function confirmFilm(){
        $userModel = new UsersModel();
        $userModel->addFilm();

    }

    public function listPage(){
        $template = $this->twig->load('listfilm.html.twig');
        echo $template->render();
    }


}