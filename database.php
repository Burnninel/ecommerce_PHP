<?php 

class DB 
{
    public function medidas($id = null) {
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

            $retorno []= $medidas;
        }

        return $retorno;
    }

    public function colunas() {
        $db = new PDO('sqlite:database.sqlite');
        $queryColunas = $db->query("SELECT name FROM pragma_table_info('tabela_medidas');");
        return array_column($queryColunas->fetchAll(), 'name');
    }
}