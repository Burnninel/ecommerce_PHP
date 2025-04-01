<?php

$id = $_REQUEST['id'];

$produtoService = new ProdutoServices($database);
$produto = $produtoService->getProdutos($id)[0];
$bestSellers = $produtoService->getProdutos(null, 'best_seller');

$tabelaDeMedidas = $database->query(
    query: "SELECT produto_id, tamanho, comprimento, peito, manga, cintura  FROM tabela_medidas WHERE produto_id = :id",
    class: $class = Medidas::class,
    params: $params = ['id' => "$id"]
)->fetchAll();

$medidas = $tabelaDeMedidas ? array_unique(
    array_reduce($tabelaDeMedidas, function ($carry, $item) {
        foreach ($item as $key => $value) {
            if ($value !== null) {
                $carry[] = $key;
            }
        }
        return $carry;
    })
) : [];

$dimensoes = array_filter($tabelaDeMedidas, fn($item) => $item !== null);

view('produto', [
    'produto' => $produto,
    'bestSellers' => $bestSellers,
    'dimensoes' => $dimensoes,
    'medidas' => $medidas,
]);
