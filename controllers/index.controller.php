<?php

$produto = (new DB())->produto();

$bestSellers = array_filter($produto, fn($item) => $item->bestSeller === 1);
$lancamentos = array_filter($produto, fn($item) => $item->lancamento === 1);
$banner = array_filter($produto, fn($item) => $item->banner === 1);

view('index', [
    'bestSellers' => $bestSellers,
    'lancamentos' => $lancamentos,
    'banner' => $banner,
]);