<?php

namespace App\Controllers;

use App\Models\User;

class HomeController extends BaseController{
    private $user;
    public function __construct() {
        $this->user = new User();
    }
    public function index() {
        $title ="Pagina Inícial";
        $name = $this->requestMethod;
        return $this->view("index", compact("name", "title"));
    }

    public function about() {
        var_dump($this->user->find()->fetch(true));
    }
    public function login() {
        $title ="Pagina home";
        $name = $this->requestMethod;
        return $this->view("login", compact("name", "title"));
        // var_dump("Pagina de loga");
    }
    public function CadastrarDoador(){
        $title ="Regista-se";
        $name = $this->requestMethod;
        return $this->view("registo", compact("name", "title"));
    }
}

