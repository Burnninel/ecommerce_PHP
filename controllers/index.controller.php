<?php


$produto = (new DB())->query(
    query: "
        SELECT 
            p.id AS id, p.nome AS nome, p.preco AS preco,
            p.banner AS banner, p.best_seller AS bestSeller, p.lancamento AS lancamento,  
            e.categoria AS categoria,
            (SELECT GROUP_CONCAT(caminho || '.' || tipo, ',') 
            FROM imagens 
            WHERE produto_id = p.id 
            ORDER BY id) AS imagens
        FROM produtos AS p
        JOIN especificacao AS e ON e.id = p.especificacao_id
        GROUP BY p.id
    ",
    class: $class = Produto::class,
)->fetchAll();

foreach ($produto as $item) {
    $item->setImagens($item->imagens);
}

$bestSellers = array_filter($produto, fn($item) => $item->bestSeller === 1);
$lancamentos = array_filter($produto, fn($item) => $item->lancamento === 1);
$banner = array_filter($produto, fn($item) => $item->banner === 1);

view('index', [
    'bestSellers' => $bestSellers,
    'lancamentos' => $lancamentos,
    'banner' => $banner,
]);