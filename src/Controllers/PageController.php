<?php

namespace App\Controllers;

use App\Models\MovieModel;

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
        //echo "index";
    }

    public function register()
    {
        /*$movieModel = new MovieModel();
        $movies = $movieModel->getAllMovies();*/

        $template = $this->twig->load('register.html.twig');
        echo $template->render();
        //echo "index";
    }

    public function error404()
    {
        /*
        $template = $this->twig->load('Page/error404.html.twig');
        echo $template->render();*/
        echo "404";
    }
}