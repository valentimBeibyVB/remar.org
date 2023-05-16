<?php

namespace App\Controllers;

use App\Models\User;

class LoginController {
    public function login() {
        $user = new User();
        $verifyUserExists= $user->findById(1)->fetch();
        var_dump($verifyUserExists);
    }
}