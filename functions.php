<?php

function view($view, $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    require "views/template/app.php";
}

function filtrarprodutos($produtos, $chave, $quantidade, $id = null)
{
    $filtroProdutos = array_filter($produtos, function ($item) use ($chave, $id) {
        return isset($item[$chave]) && $item[$chave] === true && $item['id'] != $id;
    });

    $contadorProdutos  = min(count($filtroProdutos), $quantidade);

    $indicesProdutos = array_rand($filtroProdutos, $contadorProdutos);
    return is_array($indicesProdutos) ? array_intersect_key($filtroProdutos, array_flip($indicesProdutos)) : [$filtroProdutos[$indicesProdutos]];
}

function dd(...$dump)
{
    echo '<pre>';
    var_dump($dump);
    echo '<pre>';
    die();
}

function abort($code)
{
    http_response_code($code);
    view($code);
    die();
}
