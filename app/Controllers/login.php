<?php

namespace App\Controllers;

use App\Models\User;
$user = new User();
$verifyUserExists= $user->find("email = :email",$_POST['email'])->fetch();
if($verifyUserExists){
    $dados['error']='Email ou senha incorrecta!';
}if(password_verify($verifyUserExists->password,$_POST["senha"])){
    $dados['error']='Email ou senha incorrecta!';
}else{

}