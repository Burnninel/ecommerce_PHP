<?php

$pesquisar = $_REQUEST['p'];

$produtoService = new ProdutoServices($database);
$produtos = $produtoService->getProdutos(null, null, $pesquisar);

view('pesquisar', [
    'produtos' => $produtos,
]);