<?php

class ProdutoServices
{

    private $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getProdutos($id = null, $definicao = null)
    {

        $aplicarFiltro = [];

        if ($id !== null) {
            $aplicarFiltro[] = "p.id = :id";
        }

        if ($definicao !== null) {
            $aplicarFiltro[] = "p.$definicao = 1";
        }

        $filtro = $aplicarFiltro ? "WHERE " . implode(' OR ', $aplicarFiltro) : "";

        $query = "
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
            $filtro
            GROUP BY p.id
        ";

        $params = [];

        if ($id) {
            $param[] = ['id' => $id];
        }

 
        $produtos = $this->db->query($query, Produto::class, $params)->fetchAll();


        foreach ($produtos as $item) {
            $item->setImagens($item->imagens);
        }

        return $produtos;
    }
}
