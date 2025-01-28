<?php

require 'dados.php';

$filtroModelo = $_GET['modelo'] ?? 'todos';

$calcas = array_filter($produtos, function ($produto) use ($filtroModelo) {
    return $produto['tipo'] === 'calcas' && 
           ($filtroModelo === 'todos' || $produto['idModelo'] === $filtroModelo);
});

$modeloCalcas = array_filter($produtos, fn($item) => $item['tipo'] == 'calcas');
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

view('calcas', [
    'calcas' => $calcas,
    'modelos' => $modelos,
]);