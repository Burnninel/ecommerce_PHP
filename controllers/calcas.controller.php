<?php

require 'dados.php';

$calcas = array_filter($produtos, fn($l) => $l['tipo'] == 'calcas');

view('calcas', [
    'calcas' => $calcas
]);