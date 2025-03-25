<?php

class DB
{
    private $db;

    public function __construct() {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    public function produto($id = null)
    {
        // $db = new PDO('sqlite:database.sqlite');

        $query = "
            WITH ImagensClassificadas AS (
                SELECT 
                    produto_id, 
                    caminho,
                    tipo,
                    ROW_NUMBER() OVER (PARTITION BY produto_id ORDER BY id) AS posicao_imagem
            FROM imagens
            )
            SELECT 
                p.*, 
                e.categoria AS categoria, 
                e.modelo AS modelo, 
                m.nome AS marca,
                l.instrucoes AS lavagem,
                MAX(CASE WHEN posicao_imagem = 1 THEN i.caminho || '.' || i.tipo END) AS imagem1,
                MAX(CASE WHEN posicao_imagem = 2 THEN i.caminho || '.' || i.tipo END) AS imagem2,
                MAX(CASE WHEN posicao_imagem = 3 THEN i.caminho || '.' || i.tipo END) AS imagem3,
                MAX(CASE WHEN posicao_imagem = 4 THEN i.caminho || '.' || i.tipo END) AS imagem4,
                MAX(CASE WHEN posicao_imagem = 5 THEN i.caminho || '.' || i.tipo END) AS imagem5
            FROM produtos AS p
            JOIN especificacao AS e ON e.id = p.especificacao_id
            JOIN marcas AS m ON m.id = p.marca_id
            JOIN lavagem AS l ON l.id = p.lavagem_id
            LEFT JOIN ImagensClassificadas AS i ON i.produto_id = p.id

        ";

        if ($id) $query .= " WHERE p.id = :id";
        $query .= " GROUP BY p.id";

        $prepare = $this->db->prepare($query);
        if ($id) $prepare->bindParam(':id', $id);

        $prepare->execute();

        $produtos = $prepare->fetchAll();

        $retorno = [];

        foreach ($produtos as $item) {
            $produto = new Produto;

            $produto->id = $item['id'];
            $produto->nome = $item['nome'];
            $produto->preco = $item['preco'];
            $produto->marca = $item['marca'];
            $produto->descricao = $item['descricao'];
            $produto->fabricacao = $item['fabricacao'];
            $produto->lavagem = $item['lavagem'];
            $produto->categoria = $item['categoria'];
            $produto->modelo = $item['modelo'];
            $produto->composicao = $item['composicao'];
            $produto->banner = $item['banner'];
            $produto->bestSeller = $item['best_seller'];
            $produto->lancamento = $item['lancamento'];

            $produto->setImagens(
                $item['imagem1'], 
                $item['imagem2'], 
                $item['imagem3'], 
                $item['imagem4'], 
                $item['imagem5']
            );

            $retorno[] = $produto;
        }

        if ($id) {
            return $retorno[0];
            exit();
        }

        return $retorno;
    }

    public function medidas($id = null)
    {
        $query = "SELECT * FROM tabela_medidas";
        if ($id) $query .= " WHERE produto_id = :id";
        $prepare = $this->db->prepare($query);
        if ($id) $prepare->bindParam(':id', $id);
        $prepare->execute();
        $tabelaMedidas = $prepare->fetchAll();

        $retorno = [];

        foreach ($tabelaMedidas as $item) {
            $medidas = new Medidas;

            $medidas->tamanho = $item['tamanho'];
            $medidas->comprimento = $item['comprimento'];
            $medidas->peito = $item['peito'];
            $medidas->manga = $item['manga'];

            $retorno[] = $medidas;
        }

        return $retorno;
    }

    public function colunas()
    {
        $colunas = $this->db->query("SELECT name FROM pragma_table_info('tabela_medidas');")->fetchAll(PDO::FETCH_COLUMN);

        return array_filter($colunas, function ($coluna) {
            return $this->db->query("SELECT COUNT(*) FROM tabela_medidas WHERE $coluna IS NULL")->fetchColumn() == 0;
        });
    }
}
