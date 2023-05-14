<?php

namespace App\Controllers;

abstract class BaseController {

    public $requestMethod;

    public function __construct() {
        $this->requestMethod = $_SERVER["REQUEST_METHOD"];
    }
    public function view(string $view, array $data = []) {
        extract($data);
        $file = dirname(__FILE__,2) . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . $view . ".php";
        if (file_exists($file)) {
            require_once $file;
        }
    }
}