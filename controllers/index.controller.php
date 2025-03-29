<?php

$produtoService = new ProdutoServices($database);

$bestSellers = $produtoService->getProdutos(null, 'best_seller');
$lancamentos = $produtoService->getProdutos(null, 'lancamento');
$banner = $produtoService->getProdutos(null, 'banner');

view('index', [
    'bestSellers' => $bestSellers,
    'lancamentos' => $lancamentos,
    'banner' => $banner,
]);