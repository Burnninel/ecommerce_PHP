<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if ($_REQUEST['dados'] == 'produto') {
        $resultado = $database->query(
            query: "INSERT INTO produtos (nome, preco, marca_id, descricao, fabricacao, lavagem, especificacao_id, composicao, banner, best_seller, lancamento) 
                    VALUES (:nome, :preco, :marca, :descricao, :fabricacao, :lavagem, :especificacao, :composicao, :banner, :bestSeller, :lancamento)",
            params: [
                'nome' => $_POST['nome'],
                'preco' => $_POST['preco'],
                'marca' => $_POST['marca'],
                'descricao' => $_POST['descricao'],
                'fabricacao' => $_POST['fabricacao'],
                'lavagem' => $_POST['lavagem'],
                'especificacao' => $_POST['especificacao'],
                'composicao' => $_POST['composicao'],
                'banner' => $_POST['banner'],
                'bestSeller' => $_POST['bestSeller'],
                'lancamento' => $_POST['lancamento'],
            ]
        );

        $produtoId = $database->lastInsertId();

        foreach ($_POST['caminho'] as $index => $caminho) {
            $tipo = $_POST['tipo'][$index];
            if (!empty($caminho) && !empty($tipo)) {
                $resultado = $database->query(
                    query: "INSERT INTO imagens (produto_id, caminho, tipo) VALUES (:produtoId, :caminho, :tipo)",
                    params: [
                        'produtoId' => $produtoId,
                        'caminho' => $caminho,
                        'tipo' => $tipo,
                    ]
                );
            }
        }

        header('location: /retornoProduto?retorno=Produto registrado com sucesso!');
        exit();
    }


    if ($_REQUEST['dados'] == 'medidas') {
        if (isset($_POST['tamanhos'])) {
            $tamanhos = $_POST['tamanhos'];
            foreach ($tamanhos as $medidas) {
                $tamanhos = $medidas['tamanho'];
                $comprimento = $medidas['comprimento'];
                $peito = $medidas['peito'];
                $manga = $medidas['manga'];
                $cintura = $medidas['cintura'];

                $resultado = $database->query(
                    query: "INSERT INTO tabela_medidas (produto_id, tamanho, comprimento, peito, manga, cintura) 
                        VALUES (:produtoId, :tamanho, :comprimento, :peito, :manga, :cintura)",
                    params: [
                        'produtoId' => $_POST['id'],
                        'tamanho' => $tamanhos,
                        'comprimento' => $comprimento ? $comprimento : null,
                        'peito' => $peito ? $peito : null,
                        'manga' => $manga ? $manga : null,
                        'cintura' => $cintura ? $cintura : null
                    ]
                );
            }
        }

        header('location: /admin?retornoMedidas=Tabela de medidas adicionada com sucesso!');
        exit();
    }
}
