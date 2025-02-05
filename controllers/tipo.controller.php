<?php

require 'dados.php';

$tipo = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

$filtroModelo = $_GET['modelo'] ?? 'todos';

$produtoTipo = array_filter($produtos, function ($produto) use ($filtroModelo, $tipo) {
    return $produto['tipo'] === $tipo && 
           ($filtroModelo === 'todos' || $produto['idModelo'] === $filtroModelo);
});

$tipoProduto = array_filter($produtos, fn($item) => $item['tipo'] == $tipo);
$modelos = [
    'idModelo' => [],
    'itemModelo' => [],
];

foreach ($tipoProduto as $item) {
    if (!in_array($item['modelo'], $modelos['itemModelo'])) {
        $modelos['idModelo'][] = $item['idModelo'];
        $modelos['itemModelo'][] = $item['modelo'];
    }
}

view('tipo', [
    'produtoTipo' => $produtoTipo,
    'modelos' => $modelos,
    'tipo' => $tipo
]);