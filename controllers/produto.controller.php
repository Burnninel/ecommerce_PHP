<?php

$id = $_REQUEST['id'];

$listaProdutos = (new DB())->produto();
$produto = array_values(array_filter($listaProdutos, fn($item) => $item->id == $id));

$produto = !empty($produto) ? $produto[0] : null;

$tabelaDeMedidas = (new DB())->medidas($id);
$dimensoes = array_filter($tabelaDeMedidas, fn($item) => $item !== null);
$medidas = (new DB())->colunas();

$bestSellers = array_filter($listaProdutos, fn($item) => $item->bestSeller !== 0);

view('produto', [
    'produto' => $produto,
    'bestSellers' => $bestSellers,
    'dimensoes' => $dimensoes,
    'medidas' => $medidas,
]);
