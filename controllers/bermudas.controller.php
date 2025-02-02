<?php

require 'dados.php';

$filtroModelo = $_GET['modelo'] ?? 'todos';

$bermudas = array_filter($produtos, function ($produto) use ($filtroModelo) {
    return $produto['tipo'] === 'bermudas' && 
           ($filtroModelo === 'todos' || $produto['idModelo'] === $filtroModelo);
});

$modeloCalcas = array_filter($produtos, fn($item) => $item['tipo'] == 'bermudas');
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

view('bermudas', [
    'bermudas' => $bermudas,
    'modelos' => $modelos,
]);