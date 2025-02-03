<?php

require 'dados.php';

$filtroModelo = $_GET['modelo'] ?? 'todos';

$casacos = array_filter($produtos, function ($produto) use ($filtroModelo) {
    return $produto['tipo'] === 'casacos' && 
           ($filtroModelo === 'todos' || $produto['idModelo'] === $filtroModelo);
});

$modeloCalcas = array_filter($produtos, fn($item) => $item['tipo'] == 'casacos');
$modelos = [
    'idModelo' => [],
    'itemModelo' => [],
];

foreach ($modeloCalcas as $item) {
    if (!in_array($item['modelo'], $modelos['itemModelo'])) {
        $modelos['idModelo'][] = $item['idModelo'];
        $modelos['itemModelo'][] = $item['modelo'];
    }
}

view('casacos', [
    'casacos' => $casacos,
    'modelos' => $modelos,
]);