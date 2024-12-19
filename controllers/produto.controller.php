<?php

require 'dados.php';

$id = $_REQUEST['id'];

$filtrado = array_filter($produtos, fn($l) => $l['id'] == $id);
$produto = array_pop($filtrado);

if(!isset($produto)) {
    return abort(404); 
};

view('produto', [
    'produto' => $produto,
    'produtos' => $produtos
]);