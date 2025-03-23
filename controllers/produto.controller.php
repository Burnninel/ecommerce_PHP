<?php

require 'dados.php';

$id = $_REQUEST['id'];

$filtrado = array_filter($produtos, fn($item) => $item['id'] == $id);
$produto = array_pop($filtrado);

if (!isset($produto)) {
    return abort(404);
};

$tabelaDeMedidas = (new DB())->medidas($id);
$colunas = (new DB())->colunas();

$bestSellers = filtrarprodutos($produtos, 'bestSeller', 8, $id);

view('produto', [
    'produto' => $produto,
    'bestSellers' => $bestSellers,
    'tabelaDeMedidas' => $tabelaDeMedidas,
    'colunas' => $colunas,
]);