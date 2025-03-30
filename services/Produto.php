<?php

class ProdutoServices
{

    private $db;

    public function __construct(DB $database)
    {
        $this->db = $database;
    }

    public function getProdutos($id = null, $definicao = null, $pesquisa = null)
    {

        $aplicarFiltro = [];

        if ($id !== null) {
            $aplicarFiltro[] = "p.id = :id";
        }

        if ($definicao !== null) {
            $aplicarFiltro[] = "p.$definicao = 1";
        }

        if ($pesquisa !== null) {
            $aplicarFiltro[] = "p.nome like :pesquisa";
            $aplicarFiltro[] = "m.nome like :pesquisa";
            $aplicarFiltro[] = "e.categoria like :pesquisa";
            $aplicarFiltro[] = "e.modelo like :pesquisa";
        }

        $filtro = $aplicarFiltro ? "WHERE " . implode(' OR ', $aplicarFiltro) : "";

        $query = "
            SELECT 
                p.id AS id, p.nome AS nome, p.preco AS preco, p.descricao AS descricao,
                p.fabricacao as fabricacao, p.composicao AS composicao, p.lavagem,
                p.banner AS banner, p.best_seller AS bestSeller, p.lancamento AS lancamento,
                e.categoria AS categoria, e.modelo AS modelo, 
                m.nome AS marca,
                (SELECT GROUP_CONCAT(caminho || '.' || tipo, ',') 
                FROM imagens 
                WHERE produto_id = p.id 
                ORDER BY id) AS imagens
            FROM produtos AS p
            JOIN especificacao AS e ON e.id = p.especificacao_id
            JOIN marcas AS m ON m.id = p.marca_id
            $filtro
            GROUP BY p.id
        ";

        $params = [];

        if ($id) {
            $params['id'] = $id;
        }

        if ($pesquisa) {
            $params['pesquisa'] = "%$pesquisa%";
        }

        $produtos = $this->db->query($query, Produto::class, $params)->fetchAll();

        foreach ($produtos as $item) {
            $item->setImagens($item->imagens);
        }

        return $produtos;
    }
}
