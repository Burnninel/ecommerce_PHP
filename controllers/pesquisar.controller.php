<?php

$produtoService = new ProdutoServices($database);
$bestSellers = $produtoService->getProdutos(null, 'best_seller');

view('pesquisar', [
    'bestSellers' => $bestSellers,
]);