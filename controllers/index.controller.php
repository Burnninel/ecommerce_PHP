<?php

require 'dados.php';

$filtroBestSellers = array_filter($produtos, function($item) {
    return isset($item['bestSeller']) && $item['bestSeller'] === true;
});

$contadorBestSellers  = min(count($filtroBestSellers), 8);

$indicesBestSellers = array_rand($filtroBestSellers, $contadorBestSellers);
$bestSeller = is_array($indicesBestSellers) ? array_intersect_key($filtroBestSellers, array_flip($indicesBestSellers)) : [$filtroBestSellers[$indices]];

view('index', [
    'produtos' => $produtos,
    'bestSeller' => $bestSeller
]);