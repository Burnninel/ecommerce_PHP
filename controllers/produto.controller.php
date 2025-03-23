<?php

require 'dados.php';

$id = $_REQUEST['id'];

$produto = (new DB())->produto($id);

$tabelaDeMedidas = (new DB())->medidas($id);

$medidas = array_filter($tabelaDeMedidas, fn($item) => $item !== null);

$colunas = (new DB())->colunas();

$imagens = (new DB())->imagens($id);

$bestSellers = filtrarprodutos($produtos, 'bestSeller', 8, $id);

view('produto', [
    'produto' => $produto,
    'imagens' => $imagens,
    'bestSellers' => $bestSellers,
    'tabelaDeMedidas' => $medidas,
    'colunas' => $colunas,
]);
