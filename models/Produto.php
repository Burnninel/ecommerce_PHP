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

    public function setImagens($imagem1, $imagem2, $imagem3, $imagem4, $imagem5) {
        $this->imagens = [$imagem1, $imagem2, $imagem3, $imagem4, $imagem5];
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
    public $tamanho;
    public $comprimento;
    public $peito;
    public $manga;
}