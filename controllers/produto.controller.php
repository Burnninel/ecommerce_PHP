<?php

$id = $_REQUEST['id'];

$listaProdutos = (new DB())->query(
    query: "
        SELECT 
            p.id AS id, p.nome AS nome, p.preco AS preco, p.descricao AS descricao,
            p.fabricacao as fabricacao, p.composicao AS composicao,
            p.banner AS banner, p.best_seller AS bestSeller, p.lancamento AS lancamento,
            e.categoria AS categoria, e.modelo AS modelo, 
            m.nome AS marca, l.instrucoes AS lavagem,
            (SELECT GROUP_CONCAT(caminho || '.' || tipo, ',') 
            FROM imagens 
            WHERE produto_id = p.id 
            ORDER BY id) AS imagens
        FROM produtos AS p
        JOIN especificacao AS e ON e.id = p.especificacao_id
        JOIN marcas AS m ON m.id = p.marca_id
        JOIN lavagem AS l ON l.id = p.lavagem_id
        WHERE p.id = :id
        GROUP BY p.id
    ",
    class: $class = Produto::class, 
    params: $params = ['id' => "$id"]
)->fetchAll();

$produto = $listaProdutos[0] ?? null;

foreach ($listaProdutos as $item) {
    $item->setImagens($item->imagens);
}

$tabelaDeMedidas = (new DB())->query(
    query: "SELECT produto_id, tamanho, comprimento, peito, manga, cintura  FROM tabela_medidas WHERE produto_id = :id",
    class: $class = Medidas::class, 
    params: $params = ['id' => "$id"]
)->fetchAll();

$tabelaProduto = array_filter($tabelaDeMedidas, fn($item) => $item->produto_id === $produto->id);

$medidas = array_unique(
    array_reduce($tabelaDeMedidas, function ($carry, $item) {
        foreach (get_object_vars($item) as $key => $value) {
            if ($value !== null) $carry[] = $key;
        }
        return $carry;
    }, [])
);

$bestSellers = (new DB())->query(
    query: "
        SELECT p.id, p.nome, p.preco, e.categoria AS categoria, 
            (SELECT GROUP_CONCAT(caminho || '.' || tipo, ',')  
            FROM imagens 
            WHERE produto_id = p.id 
            ORDER BY id) AS imagens
        FROM produtos AS p
        JOIN especificacao AS e ON e.id = p.especificacao_id
        WHERE p.best_seller = 1
        GROUP BY p.id, p.nome, p.preco
    ", 
    class: $class = Produto::class, 
)->fetchAll();

foreach ($bestSellers as $item) {
    $item->setImagens($item->imagens);
}


$dimensoes = array_filter($tabelaDeMedidas, fn($item) => $item !== null);

view('produto', [
    'produto' => $produto,
    'bestSellers' => $bestSellers,
    'dimensoes' => $dimensoes,
    'medidas' => $medidas,
]);