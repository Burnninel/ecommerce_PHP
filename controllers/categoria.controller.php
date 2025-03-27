<?php

$categoria = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);
$filtroModelo = $_GET['modelo'] ?? 'todos';

$produtos = (new DB())->query(
    query: "
        SELECT 
            p.id AS id, p.nome AS nome, p.preco AS preco,
            p.banner AS banner, p.best_seller AS bestSeller, p.lancamento AS lancamento,  
            e.categoria AS categoria, e.modelo AS modelo,
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

foreach ($produtos as $item) {
    $item->setImagens($item->imagens);
}

$produtoCategoria = array_filter($produtos, function ($produto) use ($filtroModelo, $categoria) {
    return $produto->categoria === $categoria && 
           ($filtroModelo === 'todos' || $produto->modelo === $filtroModelo);
});

$categoriaProduto = array_filter($produtos, fn($item) => $item->categoria == $categoria);
$modelos = [
    'idModelo' => [],
    'itemModelo' => [],
];

foreach ($categoriaProduto as $item) {
    if (!in_array($item->modelo, $modelos['itemModelo'])) {
        $modelos['idModelo'][] = $item->modelo;
        $modelos['itemModelo'][] = $item->modelo;
    }
}

view('categoria', [
    'produtoCategoria' => $produtoCategoria,
    'modelos' => $modelos,
    'categoria' => $categoria
]);