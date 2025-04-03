<?php

$retorno = $_REQUEST['retorno'] ?? '';

view('admin', [
    'retorno' => $retorno
]);
