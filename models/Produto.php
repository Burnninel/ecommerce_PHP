<?php

class Produto 
{
    public $id;
    public $nome;
    public $preco;
    public $marca;
    public $descricao;
    public $fabricacao;
    public $lavagem;
    public $categoria;
    public $modelo;
    public $composicao;
    public $banner;
    public $bestSeller;
    public $lancamento;
    public $imagens = [];

    public function setImagens($imagens)
    {
        $this->imagens = explode(',', $imagens);
        return $this->imagens;
    }
}

class Imagens 
{
    public $produtoId;
    public $tipo;
    public $caminho;
}

class Medidas 
{
    public $produto_id;
    public $tamanho;
    public $comprimento;
    public $peito;
    public $manga;
    public $cintura;
}

class Colunas 
{
    public $name;
}