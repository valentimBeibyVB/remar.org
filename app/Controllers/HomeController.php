<?php

namespace App\Controllers;

use App\Models\User;
use App\Models;

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
        $form=filter_input_array(INPUT_POST,FILTER_DEFAULT);
        if(isset($form['logar'])){
            $dados=['email'=>trim($form['email']),'senha'=>trim($form['senha']),'error_e'=>'','error_s'=>''];
            if(in_array("",$form)){
                if(empty($form['email'])){
                    $dados['error_e']="Preencha o campo email";
                }
                if(empty($form['senha'])){
                    $dados['error_s']="Preencha o campo senha";
                }
            }else{
                if(!filter_var($form['email'],FILTER_SANITIZE_EMAIL)){
                    $dados['error_e']="Preencha correctamente o campo email";
                }elseif(''){

                }else{

                }
            }
        }else{
            $dados=[];
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

