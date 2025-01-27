<?php

require 'dados.php';

$modelo = $_GET['modelo'] ?? 'todos';

$calcas = array_filter($produtos, function ($produto) use ($modelo) {
    return $produto['tipo'] === 'calcas' && 
           ($modelo === 'todos' || $produto['modelo'] === $modelo);
});

// $calcasJson = json_encode($calcas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

view('calcas', [
    'calcas' => $calcas,
]);