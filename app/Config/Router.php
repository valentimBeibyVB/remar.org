<?php

const BASE_URL =  "http://localhost/ong/";

$routers = [
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
      "route" => "/registo",
      "type" => "GET",
      "controller" => "HomeController:CadastrarDoador",
    ],
    [
      "route" => "/registo",
      "type" => "GET",
      "controller" => "HomeController:doar",
    ]
];