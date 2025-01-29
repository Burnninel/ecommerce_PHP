<?php

require 'dados.php';

$filtroModelo = $_GET['modelo'] ?? 'todos';

$camisetas = array_filter($produtos, function ($produto) use ($filtroModelo) {
    return $produto['tipo'] === 'camisetas' && 
           ($filtroModelo === 'todos' || $produto['idModelo'] === $filtroModelo);
});

$modeloCalcas = array_filter($produtos, fn($item) => $item['tipo'] == 'camisetas');
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

view('camisetas', [
    'camisetas' => $camisetas,
    'modelos' => $modelos,
]);