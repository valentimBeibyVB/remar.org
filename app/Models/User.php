<?php


namespace App\Models;
use CoffeeCode\DataLayer\DataLayer;
 

class User extends DataLayer
{
    public function __construct() {
        parent::__construct("t_Usuario", ["Nome", "Email", "senha"], "IdUsuario");

    }
}   