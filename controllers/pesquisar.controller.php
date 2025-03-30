<?php

$pesquisar = $_REQUEST['produto'];

$produtoService = new ProdutoServices($database);
$produtos = $produtoService->getProdutos(null, null, $pesquisar);
$bestSellers = $produtoService->getProdutos(null, 'best_seller', null);

view('pesquisar', [
    'produtos' => $produtos,
    'pesquisa' => $pesquisar,
    'bestSellers' => $bestSellers,
]);