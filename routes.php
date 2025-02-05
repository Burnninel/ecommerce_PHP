<?php

$routes = [
    '' => 'index',
    'produto' => 'produto',
    'camisetas' => 'tipo',
    'casacos' => 'tipo',
    'calcas' => 'tipo',
    'bermudas' => 'tipo',
];

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

if (isset($routes[$controller])) {
    require "controllers/{$routes[$controller]}.controller.php"; 
    exit();
};

abort(404);