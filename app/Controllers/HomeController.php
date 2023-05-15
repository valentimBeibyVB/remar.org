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
        $user = new User();
        $verifyUserExists= $user->find("email = :email",$_POST['email'])->fetch();
        if($verifyUserExists){
            $dados['error']='Email ou senha incorrecta!';
        }if(password_verify($verifyUserExists->password,$_POST["senha"])){
            $dados['error']='Email ou senha incorrecta!';
        }else{

        }
        
        $title ="Pagina home";
        $name = $this->requestMethod;
        return $this->view("login", compact("name", "title","dados"));
        // var_dump("Pagina de loga");
    }
    public function CadastrarDoador(){
        $title ="Regista-se";
        $name = $this->requestMethod;
        return $this->view("registo", compact("name", "title"));
    }
    public function doar(){
        $title ="Regista-se";
        $name = $this->requestMethod;
        return $this->view("doar", compact("name", "title"));
    }
    
}

