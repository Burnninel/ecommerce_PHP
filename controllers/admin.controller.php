<?php

$retornoProduto = $_REQUEST['retornoProduto'] ?? '';
$retornoMedidas = $_REQUEST['retornoMedidas'] ?? '';

$produtos = $database->query(
    query: "SELECT id, nome  FROM produtos",
    class: Produto::class
);

view('admin', [
    'retornoProduto' => $retornoProduto,
    'retornoMedidas' => $retornoMedidas,
    'produtos' => $produtos
]);
