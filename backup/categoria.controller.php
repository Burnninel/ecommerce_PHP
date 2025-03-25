<?php

require 'dados.php';

$categoria = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

$filtroModelo = $_GET['modelo'] ?? 'todos';

$produtoCategoria = array_filter($produtos, function ($produto) use ($filtroModelo, $categoria) {
    return $produto['categoria'] === $categoria && 
           ($filtroModelo === 'todos' || $produto['idModelo'] === $filtroModelo);
});

$categoriaProduto = array_filter($produtos, fn($item) => $item['categoria'] == $categoria);
$modelos = [
    'idModelo' => [],
    'itemModelo' => [],
];

foreach ($categoriaProduto as $item) {
    if (!in_array($item['modelo'], $modelos['itemModelo'])) {
        $modelos['idModelo'][] = $item['idModelo'];
        $modelos['itemModelo'][] = $item['modelo'];
    }
}

view('categoria', [
    'produtoCategoria' => $produtoCategoria,
    'modelos' => $modelos,
    'categoria' => $categoria
]);