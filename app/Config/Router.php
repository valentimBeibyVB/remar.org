<?php

const BASE_URL =  "http://localhost/ong/";

$routers = [

  // rotas para pagina visitante
    [
       "route" => "/",
       "type" => "GET",
       "controller" => "HomeController:index",
    ],
    [
        "route" => "/sobre",
        "type" => "GET",
        "controller" => "HomeController:about",
    ],
    [
      "route" => "/login",
      "type" => "GET",
      "controller" => "HomeController:login",
    ],
    [
      "route" => "/login",
      "type" => "POST",
      "controller" => "HomeController:login",
    ],
    [
      "route" => "/registo",
      "type" => "GET",
      "controller" => "HomeController:CadastrarDoador",
    ],
    [
      "route" => "/Doar",
      "type" => "GET",
      "controller" => "HomeController:doar",
    ],

    // rotas para area do administrador
    [
      "route" => "/Admin",
      "type" => "GET",
      "controller" => "AdminController:login",
    ],
    [
      "route" => "/Admin/home",
      "type" => "GET",
      "controller" => "AdminController:home",
    ]
];