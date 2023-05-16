<?php

namespace App\Controllers;

use App\Models\User;

class AdminController extends BaseController{

    public function login(){
        $title='Login-Admin';
        $name = $this->requestMethod;
        return $this->view("Admin/login", compact("name", "title"));
    }
    public function home(){
        $title='Administrador';
        $name = $this->requestMethod;
        return $this->view("Admin/home", compact("name", "title"));
    }
}