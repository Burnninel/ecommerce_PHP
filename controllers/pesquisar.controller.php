<?php

$pesquisar = $_REQUEST['produto'];

$produtoService = new ProdutoServices($database);
$produtos = $produtoService->getProdutos(null, null, $pesquisar);

view('pesquisar', [
    'produtos' => $produtos,
    'pesquisa' => $pesquisar
]);