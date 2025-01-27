<?php

require 'dados.php';

$modelo = $_GET['modelo'] ?? 'todos';

$calcas = array_filter($produtos, function ($produto) use ($modelo) {
    return $produto['tipo'] === 'calcas' && 
           ($modelo === 'todos' || $produto['modelo'] === $modelo);
});

view('calcas', [
    'calcas' => $calcas,
]);