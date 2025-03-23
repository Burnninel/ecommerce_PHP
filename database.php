<?php

class DB
{
    public function produto($id = null)
    {
        $db = new PDO('sqlite:database.sqlite');

        $query = "
            SELECT 
                p.*, 
                c.nome AS categoria, 
                m.nome AS marca,
                mo.nome AS modelo,
                l.instrucoes AS lavagem
            FROM 
                produtos AS p
            JOIN categorias AS c ON c.id = p.categoria_id
            JOIN marcas AS m ON m.id = p.marca_id
            JOIN modelos AS mo ON c.id = p.modelo_id
            JOIN lavagem AS l ON l.id = p.lavagem_id
        ";
        if ($id) $query .= " WHERE p.id = :id";

        $prepare = $db->prepare($query);
        if ($id) $prepare->bindParam(':id', $id);

        $prepare->execute();

        $produtos = $prepare->fetchAll();

        foreach ($produtos as $item) {
            $produto = new Produto;

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

            return $produto;
        }

        return null;
    }

    public function imagens($id = null)
    {
        $db = new PDO('sqlite:database.sqlite');

        $query = "SELECT * FROM imagens";
        if ($id) $query .= " WHERE produto_id = :id";
        $prepare = $db->prepare($query);
        if ($id) $prepare->bindParam(':id', $id);
        $prepare->execute();
        $imagens = $prepare->fetchAll();

        foreach ($imagens as $item) {
            $imagens = new Imagens;

            $imagens->tipo = $item['tipo'];
            $imagens->caminho = $item['caminho'];

            return $imagens;
        }

        return null;
    }

    public function medidas($id = null)
    {
        $db = new PDO('sqlite:database.sqlite');

        $query = "SELECT * FROM tabela_medidas";
        if ($id) $query .= " WHERE produto_id = :id";
        $prepare = $db->prepare($query);
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
        $db = new PDO('sqlite:database.sqlite');
        $colunas = $db->query("SELECT name FROM pragma_table_info('tabela_medidas');")->fetchAll(PDO::FETCH_COLUMN);

        return array_filter($colunas, function ($coluna) use ($db) {
            return $db->query("SELECT COUNT(*) FROM tabela_medidas WHERE $coluna IS NULL")->fetchColumn() == 0;
        });
    }
}
