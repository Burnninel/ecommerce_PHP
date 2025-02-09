<?php

require 'dados.php';

$bestSellers = filtrarprodutos($produtos, 'bestSeller', 8);
$lancamentos = filtrarprodutos($produtos, 'lancamento', 8);

view('index', [
    'produtos' => $produtos,
    'bestSellers' => $bestSellers,
    'lancamentos' => $lancamentos,
]);