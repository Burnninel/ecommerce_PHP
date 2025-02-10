<?php

$composicao = [
    'estampa' => 'Camiseta manga curta preta com silk colorido na frente, e preto e branco costas.',
    'tecido' => 'Composição: 100% algodão, pré-encolhido com gramatura de 0,175g. que pode variar 3% para mais ou para menos.',
    'medidas' => 'As medidas podem variar em 1cm para mais ou para menos em comparação com a grade de tamanhos.',
    'obs' => '_Obs: A coloração dos produtos em fotos externas ou de campanha podem apresentar alterações. Na dúvida sobre a cor real do produto, veja a foto com fundo branco._'
];

function gerarMedidas(array $params)
{
    $medidas = [
        'tamanhos' => $params['tamanhos'] ?? [],
        'comprimento' => $params['comprimento'] ?? [],
        'peito' => $params['peito'] ?? null,
        'manga' => $params['manga'] ?? null,
        'cintura' => $params['cintura'] ?? null
    ];

    return $medidas;
}

$medidasCamisetas = gerarMedidas(
    [
        'tamanhos' => ['p', 'm', 'g', 'gg', 'xgg'],
        'peito' => ['72 cm', '74 cm', '76 cm', '80 cm', '84 cm'],
        'comprimento' => ['53 cm', '56 cm', '59 cm', '62 cm', '65 cm'],
        'manga' => ['22 cm', '23 cm', '24 cm', '25 cm', '26 cm'],
    ]
);

$medidasCasacos = gerarMedidas(
    [
        'tamanhos' => ['p', 'm', 'g', 'gg', 'xgg'],
        'comprimento' => ['69 cm', '70 cm', '72 cm', '74 cm', '75 cm'],
        'peito' => ['56 cm', '58 cm	', '60 cm', '62 cm', '64 cm'],
        'manga' => ['63 cm', '64 cm', '65 cm', '66 cm', '67 cm'],
    ]
);

$medidasCalcas = gerarMedidas(
    [
        'tamanhos' => ['p', 'm', 'g', 'gg', 'xgg'],
        'comprimento' => ['103 cm', '104 cm', '105 cm', '106 cm', '107 cm'],
        'cintura' => ['76 cm', '80 cm', '84 cm', '88 cm', '92 cm'],
    ]
);

$medidasBermudas = gerarMedidas(
    [
        'tamanhos' => ['p', 'm', 'g', 'gg', 'xgg'],
        'comprimento' => ['53 cm', '56 cm', '59 cm', '62 cm', '65 cm'],
        'cintura' => ['75 cm', '79 cm', '83 cm', '87 cm', '91 cm'],
    ]
);

// $medidas = [
//     'tamanhos' => ['p', 'm', 'g', 'gg', 'xgg'],
//     'peito' => ['p' => '53 cm', 'm' => '56 cm', 'g' => '59 cm', 'gg' => '62 cm', 'xgg' => '65 cm'],
//     'comprimento' => ['p' => '72 cm', 'm' => '74 cm', 'g' => '76 cm', 'gg' => '80 cm', 'xgg' => '84 cm'],
//     'manga' => ['p' => '22 cm', 'm' => '23 cm', 'g' => '24 cm', 'gg' => '25 cm', 'xgg' => '26 cm'],
// ];

$produtos = [

    // camisetas

    // manga curta
    // 1
    [
        'id' => 1,
        'nome' => 'Camiseta Always Time Off White',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-curta',
        'modelo' => 'Manga Curta',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'always-branca-frente',
            'costas' => 'always-branca-costas',
            'zoom' => 'always-branca-zoom',
            'adicional' => 'always-branca-frente-inteira',
            'adicional2' => 'always-branca-costas-inteira',
        ]
    ],
    // 2
    [
        'id' => 2,
        'nome' => 'Camiseta Chefinho Casino Royale Off White',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-curta',
        'modelo' => 'Manga Curta',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => true,
        'imagens' => [
            'frente' => 'chefinho-branca-frente',
            'costas' => 'chefinho-branca-costas',
            'zoom' => 'chefinho-branca-zoom',
            'adicional' => 'chefinho-branca-frente-inteira',
        ]
    ],
    // 3
    [
        'id' => 3,
        'nome' => 'Camiseta Departamento Criativo Marrom',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-curta',
        'modelo' => 'Manga Curta',
        'banner' => false,
        'bestSeller' => true,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'criativo-marrom-frente',
            'costas' => 'criativo-marrom-costas',
            'zoom' => 'criativo-marrom-zoom',
            'adicional' => 'criativo-marrom-frente-inteira',
            'adicional2' => 'criativo-marrom-costas-inteira',
        ]
    ],
    // 4
    [
        'id' => 4,
        'nome' => 'Camiseta Departamento Criativo Listrada',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-curta',
        'modelo' => 'Manga Curta',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'criativo2-listras-frente',
            'costas' => 'criativo2-listras-costas',
            'zoom' => 'criativo2-listras-zoom',
            'adicional' => 'criativo2-listras-frente-inteira',
            'adicional2' => 'criativo2-listras-costas-inteira',
        ]
    ],
    // 5
    [
        'id' => 5,
        'nome' => 'Camiseta Explore Off White',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-curta',
        'modelo' => 'Manga Curta',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'explore-branca-frente',
            'costas' => 'explore-branca-costas',
            'zoom' => 'explore-branca-zoom',
            'adicional' => 'explore-branca-costas-inteira',
        ]
    ],
    // 6
    [
        'id' => 6,
        'nome' => 'Camiseta Bolovo Day Frames',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-curta',
        'modelo' => 'Manga Curta',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'frames-branca-frente',
            'costas' => 'frames-branca-costas',
            'zoom' => 'frames-branca-zoom',
            'adicional' => 'frames-branca-frente-inteira',
        ]
    ],
    // 7
    [
        'id' => 7,
        'nome' => 'Camiseta Loucuras de Acostamento',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-curta',
        'modelo' => 'Manga Curta',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'locuras-branca-frente',
            'costas' => 'locuras-branca-costas',
            'zoom' => 'locuras-branca-zoom',
            'adicional' => 'locuras-branca-costas-inteira',
        ]
    ],
    // 8
    [
        'id' => 8,
        'nome' => 'Camiseta Smoking Team Preta',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-curta',
        'modelo' => 'Manga Curta',
        'banner' => false,
        'bestSeller' => true,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'smoking-preta-frente',
            'costas' => 'smoking-preta-costas',
            'zoom' => 'smoking-preta-zoom',
            'adicional' => 'smoking-preta-frente-inteira',
            'adicional2' => 'smoking-preta-costas-inteira',
        ]
    ],
    // 9
    [
        'id' => 9,
        'nome' => 'Camiseta Souvenir BLV Litoral',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-curta',
        'modelo' => 'Manga Curta',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'souvenir-azul-frente',
            'costas' => 'souvenir-azul-costas',
            'zoom' => 'souvenir-azul-zoom',
            'adicional' => 'souvenir-azul-frente-inteira',
        ]
    ],
    // 10
    [
        'id' => 10,
        'nome' => 'Camiseta Departamento Criativo Listrada',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-curta',
        'modelo' => 'Manga Curta',
        'modelo' => 'Manga Curta',
        'categoria' => 'lancamento',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'criativo2-listras-frente',
            'costas' => 'criativo2-listras-costas',
            'zoom' => 'criativo2-listras-zoom',
            'adicional' => 'criativo2-listras-frente-inteira',
            'adicional2' => 'criativo2-listras-costas-inteira',
        ]
    ],

    // Classicas
    // 11
    [
        'id' => 11,
        'nome' => 'Camiseta Atomic Research Preta',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'classicas',
        'modelo' => 'Classicas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'atomic-preta-frente',
            'costas' => 'atomic-preta-costas',
            'zoom' => 'atomic-preta-zoom',
            'adicional' => 'atomic-preta-frente-inteira',
            'adicional2' => 'atomic-preta-costas-inteira',
        ]
    ],
    // 12
    [
        'id' => 12,
        'nome' => 'Camiseta Expeditions Team Marrom',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'classicas',
        'modelo' => 'Classicas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'expeditions-marrom-frente',
            'costas' => 'expeditions-marrom-costas',
            'zoom' => 'expeditions-marrom-zoom',
            'adicional' => 'expeditions-marrom-frente-inteira',
            'adicional2' => 'expeditions-marrom-costas-inteira',
        ]
    ],
    // 13
    [
        'id' => 13,
        'nome' => 'Camiseta Expeditions Team Azul Marinho',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'classicas',
        'modelo' => 'Classicas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => true,
        'imagens' => [
            'frente' => 'expeditions-azul-frente',
            'costas' => 'expeditions-azul-costas',
            'zomm' => 'expeditions-azul-zoom',
            'adicional' => 'expeditions-azul-frente-inteira',
            'adicional2' => 'expeditions-azul-costas-inteira',
        ]
    ],
    // 14
    [
        'id' => 14,
        'nome' => 'Camiseta Atomic Research Preta',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'classicas',
        'modelo' => 'Classicas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'atomic-preta-frente',
            'costas' => 'atomic-preta-costas',
            'zoom' => 'atomic-preta-zoom',
            'adicional' => 'atomic-preta-frente-inteira',
            'adicional2' => 'atomic-preta-costas-inteira',
        ]
    ],

    // manga longa
    // 15
    [
        'id' => 15,
        'nome' => 'Camiseta Manga Longa Expedition Views',
        'preco' => 'R$ 209,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Brincadeira. Bem o tipo de brincadeira que alguém faria depois de algumas dezenas de quilômetros naquela viagem aparentemente interminável.</p>
                <p>Já passou do terceiro pit stop no Graal pra um xixi e uma coxinha de 30 conto que arranca o carisma de qualquer um.</p>
                <p>Alguém no carro começa um "Fulano roubou pão na casa do João" e alguém rosna em resposta. (Você considera entoar um "a cobra não tem pé, a cobra não tem mão, então como é que ela sobe no pezinho de limão?", mas corre o risco de tomar uma mordida)</p>
                <p>O que resta é observar com olhos apertados, quase dormindo, a estrada e a paisagem pela janela do carro em alta velocidade.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-longa',
        'modelo' => 'Manga Longa',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'expedition-branca-frente',
            'costas' => 'expedition-branca-costas',
            'zoom' => 'expedition-branca-zoom',
            'adicional' => 'expedition-branca-adicional',
        ]
    ],
    // 16
    [
        'id' => 16,
        'nome' => 'Camiseta BLV Data Manga Longa Preta',
        'preco' => 'R$209,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Pode por essa camiseta nos arquivos que já é um clássico.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-longa',
        'modelo' => 'Manga Longa',
        'banner' => false,
        'bestSeller' => true,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'blv-preta-frente',
            'costas' => 'blv-preta-costas',
            'zomm' => 'blv-preta-zoom',
            'adicional' => 'blv-preta-adicional',
        ]
    ],
    // 17
    [
        'id' => 17,
        'nome' => 'Camiseta Manga Longa Perigo em Ação',
        'preco' => 'R$209,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>NARRADOR: É um dia ensolarado para contar boas histórias. Seja em VHS, mini DV, super 8, celular ou digital, um Pulta Take pode ser captado em qualquer mídia. Nada como juntar bons amigos para criar belas imagens e uma boa ficção. Alguém segura a câmera na mão, outro com a ideia na cabeça, alguém com braços fortes segura o microfone. Aquele parceiro com os dentes mais brancos e a dicção menos pior pode atuar, e a namorada dele até fez aula de teatro. O catering é um bolovo do boteco e uma coca-cola.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-longa',
        'modelo' => 'Manga Longa',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'perigoemação-preta-frente',
            'costas' => 'perigoemação-preta-costas',
            'zoom' => 'perigoemação-preta-zoom',
            'adicional' => 'perigoemação-preta-adicional',
        ]
    ],
    // 18
    [
        'id' => 18,
        'nome' => 'Camiseta Manga Longa Sol & Flores',
        'preco' => 'R$209,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Só luz natural, aí solta a máquina de fumaça, câmera vai fazendo uma panzinha da direita pra esquerda no dolly até a cara dele, enquanto fecha no olho. Muda pra câmera na mão e vai fechando ainda mais no olho, até preencher o quadro.</p>
                <p class="mt-1">Acha que rola? Num plano sequência?</p>
                <p class="mt-1">Bolovo® Video Crew. Pulta takes por profissionais amadores.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-longa',
        'modelo' => 'Manga Longa',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => true,
        'imagens' => [
            'frente' => 'sol-branca-frente',
            'costas' => 'sol-branca-costas',
            'zoom' => 'sol-branca-zoom',
            'adicional' => 'sol-branca-adicional',
        ]
    ],
    // 19
    [
        'id' => 19,
        'nome' => 'Camiseta Blossom Shirt Manga Longa',
        'preco' => 'R$209,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>A tensão dos opostos. Forças que atuam em direções diferentes. Me faz pensar sobre o meu tempo que devagar vai se extinguindo, mas que aprecio a oportunidade que ele me dá de ganhar experiência e fazer acertos. Como é maneiro observar uma bela vista. Que você tenha um bom dia :)</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavagem manual com água fria e sabão neutro. Secar no varal. Não usar alvejante. Não deixar de molho. Não lavar na máquina. Não colocar na secadora. Não lavar a seco. Não passar.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-longa',
        'modelo' => 'Manga Longa',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => true,
        'imagens' => [
            'frente' => 'blossom-branca-frente',
            'costas' => 'blossom-branca-costas',
            'zoom' => 'blossom-branca-zoom',
            'adicional' => 'blossom-branca-adicional',
        ]
    ],
    // 20
    [
        'id' => 20,
        'nome' => 'Camiseta Manga Longa Temple Of Memories Royal',
        'preco' => 'R$209,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p class="text-xs">Oh, céus! Uma avalanche de novo. Um dos eventos mais lindos e avassaladores da natureza… mas espere! DAFT PUNK PLAYS SOFTLY IN THE BACKGROUND O que é aquilo que vem, montado numa prancha em alta velocidade em meio à nevasca? E que peita insana é aquela?! Nova peita 100% algodão com estampa exclusiva da Bolovo. Para férias em Bariloche, festas e encontros invernais, radicalidades e experimentos em geral.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'manga-longa',
        'modelo' => 'Manga Longa',
        'banner' => false,
        'bestSeller' => true,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'temple-royal-frente',
            'costas' => 'temple-royal-costas',
            'zoom' => 'temple-royal-zoom',
            'adicional' => 'temple-royal-adicional',
        ]
    ],

    // Basicas
    // 21
    [
        'id' => 21,
        'nome' => 'Camiseta Doggy Style',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Assim que são feitos os vira-latas. We Love Pets. Não compre, adote.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'basicas',
        'modelo' => 'Básicas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'doggy-branca-frente',
            'costas' => 'doggy-branca-costas',
            'zoom' => 'doggy-branca-zoom',
            'adicional' => 'doggy-branca-adicional',
        ]
    ],
    // 22
    [
        'id' => 22,
        'nome' => 'Camiseta The Good Times Are Killing Me Off White',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>São 6h da tarde, olha pro relógio. Já já cai a caneta. Melhor ir pra casa descansar. Alguém comenta que vai tomar uma pra refrescar. Faz calor, aquele ar-condicionado véio nem dá conta mais. Só uma para passar o calor. Outra porque parece que esquentou depois de perder no truco. Ih, eu conheço aquela galera. Estamos no carro de quem? Acho que é a Liberdade. Tá tocando "Creed", depois de "Evidências". Deve ser um karaokê. Daqui a pouco preciso trabalhar de novo. Minha cabeça. Ramela ou bafo? Não vejo a hora do dia acabar. São 6h da tarde. Já já cai a caneta.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'basicas',
        'modelo' => 'Básicas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'killing-branca-frente',
            'costas' => 'killing-branca-costas',
            'zomm' => 'killing-branca-zoom',
            'adicional' => 'killing-branca-adicional',
        ]
    ],
    // 23
    [
        'id' => 23,
        'nome' => 'Camiseta O Ciclo da Vida Preta',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você vê um diagrama, uma organização do ciclo da vida. Ali todas as decisões, oportunidades, emoções vão definindo que rumo estamos tomando nesse grande mapa, nesse espetáculo cósmico em que viajamos por essas escolhas e vivenciamos bons e maus momentos. É preciso lembrar de rir um pouco para lidar com todas as curvas e reviravoltas.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'basicas',
        'modelo' => 'Básicas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'ciclo-preta-frente',
            'costas' => 'ciclo-preta-costas',
            'zoom' => 'ciclo-preta-zoom',
            'adicional' => 'ciclo-preta-adicional',
        ]
    ],
    // 24
    [
        'id' => 24,
        'nome' => 'Camiseta Dias Memoráveis Verde',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Camiseta para vestir nos dias memoráveis! Com alguma boa vontade e um punhado de sabão em pó, você pode vesti-la todos os dias :) E bons momentos pra você, sempre!</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'basicas',
        'modelo' => 'Básicas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'memoraveis-verde-frente',
            'costas' => 'memoraveis-verde-costas',
            'zoom' => 'memoraveis-verde-zoom',
            'adicional' => 'memoraveis-verde-adicional',
        ]
    ],
    // 25
    [
        'id' => 25,
        'nome' => 'Camiseta Básica Bolovo Preta',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Nos pediram tanto camisetas básicas com nosso tecido e caimento, que resolvemos atender. Você nunca erra com essas.</p>
                <p>Bolovo Classics com logo mokadinho do jeito que a gente gosta, mais básico que isso não tem. 100% algodão fio .40, mais leve pra você suar sem abrir uma pizzaria em cada axila :)</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'basicas',
        'modelo' => 'Básicas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'basica-preta-frente',
            'costas' => 'basica-preta-costas',
            'zoom' => 'basica-preta-zoom',
            'adicional' => 'basica-preta-adicional',
        ]
    ],
    // 26
    [
        'id' => 26,
        'nome' => 'Camiseta Manga Longa Temple Of Memories Royal',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você vê um diagrama, uma organização do ciclo da vida. Ali todas as decisões, oportunidades, emoções vão definindo que rumo estamos tomando nesse grande mapa, nesse espetáculo cósmico em que viajamos por essas escolhas e vivenciamos bons e maus momentos. É preciso lembrar de rir um pouco para lidar com todas as curvas e reviravoltas.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'basicas',
        'modelo' => 'Básicas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'ciclo-branca-frente',
            'costas' => 'ciclo-branca-costas',
            'zoom' => 'ciclo-branca-zoom',
            'adicional' => 'ciclo-branca-adicional',
        ]
    ],
    // 27
    [
        'id' => 27,
        'nome' => 'Camiseta Dias Memoráveis Off White',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Camiseta para vestir nos dias memoráveis! Com alguma boa vontade e um punhado de sabão em pó, você pode vesti-la todos os dias :) E bons momentos pra você, sempre!</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'basicas',
        'modelo' => 'Básicas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'memoraveis-branca-frente',
            'costas' => 'memoraveis-branca-costas',
            'zoom' => 'memoraveis-branca-zoom',
            'adicional' => 'memoraveis-branca-adicional',
        ]
    ],
    // 28
    [
        'id' => 28,
        'nome' => 'Camiseta Expeditions Team Basics Off White',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>O Departamento de Expedições da Bolovo®, em conjunto com o Time de Expedições, fez um requerimento de camisetas básicas para nossos exploradores contemporâneos.</p>
                <p class="mt-1">O pedido foi atendido.</p>
                <p class="mt-1">Att. Sabato Pomerigio Diretor Geral de Expedições</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCamisetas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'camisetas',
        'idModelo' => 'basicas',
        'modelo' => 'Básicas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'expeditions-off-frente',
            'costas' => 'expeditions-off-costas',
            'zoom' => 'expeditions-off-zoom',
            'adicional' => 'expeditions-off-adicional',
        ]
    ],

    // Casacos

    // Jaquetas
    // 29
    [
        'id' => 29,
        'nome' => 'Jaqueta BLVideo Broadcast',
        'preco' => 'R$ 1.299,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Esta é a pérola que todo aspirante a film maker sempre sonhou. Jaqueta pesadassa pra nunca passar frio no ar condicionado do estúdio ou nas externas noturnas. Em resistente sarja marrom com marca registrada BLVision bordada e aplicação de cetim nas costas. O verdadeiro Amazing Technicolor Dreamcoat. Bolsos em todo canto, dois fora, um dentro. Gancho pra chaves e forro em nylon macio. Para o conforto e elegância do profissional audiovisual.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCasacos,
        'composicao' => $composicao,
        'lavagem' => 'Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não lavar na máquina. Não colocar na secadora. Não lavar a seco. Não passar.',
        'categoria' => 'casacos',
        'idModelo' => 'jaquetas',
        'modelo' => 'Jaquetas',
        'banner' => true,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'jaqueta-marrom-frente',
            'costas' => 'jaqueta-marrom-costas',
            'zoom' => 'jaqueta-marrom-zoom',
            'adicional' => 'jaqueta-marrom-adicional',
        ]
    ],
    // 30
    [
        'id' => 30,
        'nome' => 'Jaqueta Classic RR Azul',
        'preco' => 'R$ 899,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p class="text-xs">Nossa jaqueta clássica está de volta em novas cores</p>
                <p class="text-xs mt-1">Mágica pra noites de cerveja em copo alto em Berlim ou em viagens de trem onde você pensa que vai viajar desse jeito pelo resto da vida, ahhh se tivesse mais trem no Brasil.</p>
                <p class="text-xs mt-1">Com um cachecol e o pulôver certo, você pode até ir pra Antártica, com o bigode certo, comandar um time de ice hockey ou simplesmente estar sempre bem vestido.</p>
                <p class="text-xs mt-1">As possibilidades são infinitas.</p>
                <p class="text-xs mt-1">Aqui em tom azul marinho, pra rolar uma colorimetria linda diante de paisagens secas. Mas as úmidas também. Viu só, vai bem com tudo.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCasacos,
        'composicao' => $composicao,
        'lavagem' => 'Lavar com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Passar em temperatura baixa Não lavar a seco.',
        'categoria' => 'casacos',
        'idModelo' => 'jaquetas',
        'modelo' => 'Jaquetas',
        'banner' => false,
        'bestSeller' => true,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'jaqueta-azul-frente',
            'costas' => 'jaqueta-azul-costas',
            'zoom' => 'jaqueta-azul-zoom',
            'adicional' => 'jaqueta-azul-adicional',
        ]
    ],
    // 31
    [
        'id' => 31,
        'nome' => 'Jaqueta Mountain Dins',
        'preco' => 'R$ 899,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p class="text-xs">Uma Jaqueta Mountain Dins combina a estilera do jeans com o conforto e elegância da gola de lã, e um leve tempero de seis bolsos e etiqueta de couro. Isso mesmo, cowboy. Deliciosa para você enfrentar o frio tradicional das festas juninas e de quaisquer outras várias festas que que possam surgir em seguida, torcemos que assim seja.</p>
                <p class="text-xs mt-1">Para passeios, viagens, expedições e jornadas. Assista à lua em frente a uma fogueira, durma na grama ou cavalgue por aí com a nova Jaqueta Mountain Dins.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCasacos,
        'composicao' => $composicao,
        'lavagem' => 'Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não lavar na máquina. Não colocar na secadora. Não lavar a seco. Não passar.',
        'categoria' => 'casacos',
        'idModelo' => 'jaquetas',
        'modelo' => 'Jaquetas',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => true,
        'imagens' => [
            'frente' => 'jaqueta-dins-frente',
            'costas' => 'jaqueta-dins-costas',
            'zoom' => 'jaqueta-dins-zoom',
            'adicional' => 'jaqueta-dins-adicional',
        ]
    ],
    // 32
    [
        'id' => 32,
        'nome' => 'Jaqueta Stay Classy De Niro',
        'preco' => 'R$ 599,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p class="text-xs">Coloque esse Jaco e espere para se encarar no espelho e dizer: You talkin’ to me? Then who the hell else are you talkin’ to? You talkin’ to me? Well I’m the only one here. Who the fk do you think you’re talking to?</p>
                <p class="text-xs mt-1">O maior atalho para se parecer com o De Niro e garantir sua vaga dentro da famiglia!</p>
                <p class="text-xs mt-1">Bucketzin dupla face em tactel e em tecido atoalhado macio pra humanizar esse coração de pedra. Não é porque você é da máfia que não pode fazer carinho em um gato.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCasacos,
        'composicao' => $composicao,
        'lavagem' => 'Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não lavar na máquina. Não colocar na secadora. Não lavar a seco. Não passar.',
        'categoria' => 'casacos',
        'idModelo' => 'jaquetas',
        'modelo' => 'Jaquetas',
        'banner' => false,
        'bestSeller' => true,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'jaqueta-stay-frente',
            'costas' => 'jaqueta-stay-costas',
            'zoom' => 'jaqueta-stay-zoom',
            'adicional' => 'jaqueta-stay-adicional',
        ]
    ],

    // fleeces
    // 33
    [
        'id' => 33,
        'nome' => 'Camp Fleece Expedição Túnel do Tempo',
        'preco' => 'R$ 499,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Encare as trilhas com seus Mullets e óculos pendurados no pescoço. Deixe seus véios orgulhosos.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCasacos,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'casacos',
        'idModelo' => 'fleeces',
        'modelo' => 'Fleeces',
        'banner' => false,
        'bestSeller' => true,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'fleece-expedicao-frente',
            'costas' => 'fleece-expedicao-costas',
            'zoom' => 'fleece-expedicao-zoom',
            'adicional' => 'fleece-expedicao-adicional',
        ]
    ],
    // 34
    [
        'id' => 34,
        'nome' => 'Camp Fleece Dark Nights',
        'preco' => 'R$ 529,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p class="text-xs">O casaco clássico das expedições. Nossa peça mais quentinha. Parece que você está de volta no útero da sua mãe.</p>
                <p class="text-xs mt-1">Fleece médio, finalização em Tactel para cortar um pouco do vento. Com bolsos laterais - as mãos não congelam!</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCasacos,
        'composicao' => $composicao,
        'lavagem' => 'Lavagem manual com água fria e sabão neutro. Secar no varal. Não usar alvejante. Não deixar de molho. Não lavar na máquina. Não colocar na secadora. Não lavar a seco. Não passar.',
        'categoria' => 'casacos',
        'idModelo' => 'fleeces',
        'modelo' => 'Fleeces',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'fleece-dark-frente',
            'costas' => 'fleece-dark-costas',
            'zoom' => 'fleece-dark-zoom',
            'adicional' => 'fleece-dark-adicional',
        ]
    ],
    // 35
    [
        'id' => 35,
        'nome' => 'Soft Fleece Grafite',
        'preco' => 'R$ 429,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p class="text-xs">O Fleece, vocês sabem, é um casaco que mais parece um abraço. Um clássico das expedições, tecido leve e quentin.</p>
                <p class="text-xs mt-1">Nossos Fleeces fazem o “Kit Master Expedição Congelante”, é só usar fleece por baixo e adicionar uma Parka por cima. Um segura a bronca do vento e chuva o outro te faz sentir no sofá assistindo um filme numa tarde inverno depois da escola. Dá até pra ir pra neve, Luiza Xaparral agarantche.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCasacos,
        'composicao' => $composicao,
        'lavagem' => 'Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não lavar na máquina. Não colocar na secadora. Não lavar a seco. Não passar.',
        'categoria' => 'casacos',
        'idModelo' => 'fleeces',
        'modelo' => 'Fleeces',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'fleece-grafite-frente',
            'costas' => 'fleece-grafite-costas',
            'zoom' => 'fleece-grafite-zoom',
            'adicional' => 'fleece-grafite-adicional',
        ]
    ],
    // 36
    [
        'id' => 36,
        'nome' => 'Camp Fleece Mountain Trip Azul',
        'preco' => 'R$ 529,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p class="text-xs">Novo fleece Mountain Trip! Talvez não ideal para subir o Everest, mas mais do que suficiente pro Pico do Jaraguá.</p>
                <p class="text-xs mt-1">Seja para tomar chocolate quente em Campos ou quentão na Festa Junina do bairro, o Camp Fleece é feito com tecido de edredom, macio ao toque e quentinho como se enrolar num cobertor. Quantas vezes você já não quis poder fazer isso no Inverno? Chegou a oportunidade de sair aquecido e sofisticado, sem ser julgado pela sociedade.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCasacos,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'casacos',
        'idModelo' => 'fleeces',
        'modelo' => 'Fleeces',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'fleece-trip-frente',
            'costas' => 'fleece-trip-costas',
            'zoom' => 'fleece-trip-zoom',
            'adicional' => 'fleece-trip-adicional',
        ]
    ],

    // moletons
    // 37
    [
        'id' => 37,
        'nome' => 'Moletom Hoodie Bolovo Clássico',
        'preco' => 'R$ 399,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Friozin, né? Pega um casaco, fiote! As mãos não congelam.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCasacos,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco.',
        'categoria' => 'casacos',
        'idModelo' => 'moletom',
        'modelo' => 'Moletom',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => true,
        'imagens' => [
            'frente' => 'moletom-hoodie-frente',
            'costas' => 'moletom-hoodie-costas',
            'zoom' => 'moletom-hoodie-zoom',
            'adicional' => 'moletom-hoodie-adicional',
        ]
    ],
    // 38
    [
        'id' => 38,
        'nome' => 'Moletom Basics Cinza',
        'preco' => 'R$ 329,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p class="text-xs">Friozin né? Pega um casaco fiote! Na dúvida vai qual? Aquele que você nunca erra! Esse é o nosso moletom Basic. Good Times Bro :) Vai que vai</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCasacos,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco.',
        'categoria' => 'casacos',
        'idModelo' => 'moletom',
        'modelo' => 'Moletom',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'moletom-cinza-frente',
            'costas' => 'moletom-cinza-costas',
            'zoom' => 'moletom-cinza-zoom',
            'adicional' => 'moletom-cinza-adicional',
        ]
    ],
    // 39
    [
        'id' => 39,
        'nome' => 'Moletom Since 2006 Crewneck',
        'preco' => 'R$ 329,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p class="text-xs">Preto no Preto.</p>
                <p class="text-xs mt-1">Bolovo Productions Good Times Co. Since 2006</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCasacos,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco.',
        'categoria' => 'casacos',
        'idModelo' => 'moletom',
        'modelo' => 'Moletom',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'moletom-crewneck-frente',
            'costas' => 'moletom-crewneck-costas',
            'zoom' => 'moletom-crewneck-zoom',
            'adicional' => 'moletom-crewneck-adicional',
        ]
    ],

    // calças 

    // Good times
    // 40
    [
        'id' => 40,
        'nome' => 'Calça Good Times Preta',
        'preco' => 'R$329,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quer sair de casa bem arrumado, mas no conforto que você pediu pra Jah? A gente também quer. Por isso desenvolvemos nossa Good Times Pants.</p>
            <p class="text-xs mt-1">Parece que você ta usando uma Chino, mas o nível de conforto é outro.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCalcas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não colocar na máquina de lavar. Não colocar na secadora. Não lavar a seco. Passar em temperatura média.',
        'categoria' => 'calcas',
        'idModelo' => 'good-times',
        'modelo' => 'Good Times',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'preta-frente',
            'costas' => 'preta-costas',
            'zoom' => 'preta-zoom',
            'adicional' => 'preta-adicional',
        ]
    ],
    // 41
    [
        'id' => 41,
        'nome' => 'Calça Good Times Chumbo',
        'preco' => 'R$ 329,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quer sair de casa bem arrumado, mas no conforto que você pediu pra Jah? A gente também quer. Por isso desenvolvemos nossa Good Times Pants.</p>
            <p class="text-xs mt-1">Parece que você ta usando uma Chino, mas o nível de conforto é outro. Em sarja 100% algodão cinza chumbo, elegante e versátil para férias de inverno e rolês com amigos em geral.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCalcas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não colocar na máquina de lavar. Não colocar na secadora. Não lavar a seco. Passar em temperatura média.',
        'categoria' => 'calcas',
        'idModelo' => 'good-times',
        'modelo' => 'Good Times',
        'banner' => false,
        'bestSeller' => true,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'chumbo-frente',
            'costas' => 'chumbo-costas',
            'zoom' => 'chumbo-zoom',
            'adicional' => 'chumbo-adicional',
        ]
    ],
    // 42
    [
        'id' => 42,
        'nome' => 'Calça Good Times Cargo Pants Bege',
        'preco' => 'R$ 399,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quer sair de casa bem arrumado, mas no conforto que você pediu pra Jah? A gente também quer. Por isso desenvolvemos nossa Good Times Pants Cargo. Parece que você ta usando uma Chino, mas o nível de conforto é outro. Em tecido ripstop, elegante e versátil para todas as ocasiões. Tem ainda bolsos laterais pra largar as chaves e um lanchinho pra depois.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCalcas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não colocar na máquina de lavar. Não colocar na secadora. Não lavar a seco. Passar em temperatura média.',
        'categoria' => 'calcas',
        'idModelo' => 'good-times',
        'modelo' => 'Good Times',
        'banner' => true,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'cargo-bege-frente',
            'costas' => 'cargo-bege-costas',
            'zoom' => 'cargo-bege-zoom',
            'adicional' => 'cargo-bege-adicional',
        ]
    ],
    // 43
    [
        'id' => 43,
        'nome' => 'Calça Good Times Bege',
        'preco' => 'R$ 329,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quer sair de casa bem arrumado, mas no conforto que você pediu pra Jah? A gente também quer. Por isso desenvolvemos nossa Good Times Pants.</p>
            <p class="text-xs mt-1">Parece que você ta usando uma Chino, mas o nível de conforto é outro.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCalcas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não colocar na máquina de lavar. Não colocar na secadora. Não lavar a seco. Passar em temperatura média.',
        'categoria' => 'calcas',
        'idModelo' => 'good-times',
        'modelo' => 'Good Times',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'bege-frente',
            'costas' => 'bege-costas',
            'zoom' => 'bege-zoom',
            'adicional' => 'bege-adicional',
        ]
    ],

    // Vira shorts
    // 44
    [
        'id' => 44,
        'nome' => 'Calça Que Vira Shorts Em Alta Velocidade',
        'preco' => 'R$ 389,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Calça que vira shorts, já começa sendo um benefício, porque é dois em um. Você me parece alguém que adora multifuncionalidade.</p>
            <p class="text-xs mt-1">Calça de tactel é ótima pra atividades ao ar livre e esportes radicais, porque é leve e protege dos mosquitos.</p>
            <p class="text-xs mt-1">Mas se passar um repelente e estiver se sentindo sortudo, ou só pro caso de esquentar demais… Vira um shorts! E aí fica mais confortável pra correr, escalar, trotar, como preferir.</p>
            <p class="text-xs mt-1">Faça do seu jeito!</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCalcas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não colocar na máquina de lavar. Não colocar na secadora. Não lavar a seco. Passar em temperatura média.',
        'categoria' => 'calcas',
        'idModelo' => 'vira-shorts',
        'modelo' => 'Vira Shorts',
        'banner' => false,
        'bestSeller' => true,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'vira-shorts-frente',
            'costas' => 'vira-shorts-costas',
            'zoom' => 'vira-shorts-zoom',
            'adicional' => 'vira-shorts-adicional',
        ]
    ],

    // velvet
    // 45
    [
        'id' => 45,
        'nome' => 'Calça Velvet Caqui',
        'preco' => 'R$ 399,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quando você veste essa calça se torna instantaneamente 3x mais elegante e fluente em francês. É o veludo. Perfeito para confraternizações ao ar livre.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCalcas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não colocar na máquina de lavar. Não colocar na secadora. Não lavar a seco. Passar em temperatura média.',
        'categoria' => 'calcas',
        'idModelo' => 'velvet',
        'modelo' => 'velvet',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => true,
        'imagens' => [
            'frente' => 'caqui-frente',
            'costas' => 'caqui-costas',
            'zoom' => 'caqui-zoom',
            'adicional' => 'caqui-adicional',
        ]
    ],
    // 46
    [
        'id' => 46,
        'nome' => 'Calça Velvet Preta',
        'preco' => 'R$ 399,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quando você veste essa calça se torna instantaneamente 3x mais elegante e fluente em francês. É o veludo. Perfeito para confraternizações ao ar livre.</p>
            <p class="text-xs mt-1">Agora na versão preta pros góticos e emos de plantão. Peça chave essencial pro seu guarda-roupas, que combina com tudo e de quebra ainda esquenta suas lindas pernas nesse frio de inverno.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCalcas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não colocar na secadora. Não lavar a seco. Passar em temperatura média.',
        'categoria' => 'calcas',
        'idModelo' => 'velvet',
        'modelo' => 'velvet',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'velvet-preta-frente',
            'costas' => 'velvet-preta-costas',
            'zoom' => 'velvet-preta-zoom',
            'adicional' => 'velvet-preta-adicional',
        ]
    ],

    // dins
    // 47
    [
        'id' => 47,
        'nome' => 'Calça Dins Preta',
        'preco' => 'R$ 429,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Esse Jeans é um pau pra toda obra! Só precisa lavar em caso de catinga extrema, do contrário, é uma parceira em forma de calças pra você usar todo dia até ela sair andando sozinha. Testado e aprovado em rolês de skate, cavalo e mutirões de laje.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasCalcas,
        'composicao' => $composicao,
        'lavagem' => 'Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não colocar na máquina de lavar. Não colocar na secadora. Não lavar a seco. Passar em temperatura média.',
        'categoria' => 'calcas',
        'idModelo' => 'dins',
        'modelo' => 'dins',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => true,
        'imagens' => [
            'frente' => 'dins-preta-frente',
            'costas' => 'dins-preta-costas',
            'zoom' => 'dins-preta-zoom',
            'adicional' => 'dins-preta-adicional',
        ]
    ],

    // bermudas

    // fds
    // 48
    [
        'id' => 48,
        'nome' => 'FDS Shorts Preto com Contraste',
        'preco' => 'R$269,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Vista esse shorts na 6ª e você só vai querer tirar ele no domingo.</p>
            <p class="text-xs">Os Shorts da Bolovo® foram modelados para ficar levemente acima do joelho. Não somos europeus aqui.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'bermudas',
        'idModelo' => 'fds',
        'modelo' => 'fds',
        'banner' => false,
        'bestSeller' => true,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'fds-preto-frente',
            'costas' => 'fds-preto-costas',
            'zoom' => 'fds-preto-zoom',
            'adicional' => 'fds-preto-adicional',
        ]
    ],
    // 49
    [
        'id' => 49,
        'nome' => 'FDS Shorts Caqui',
        'preco' => 'R$269,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Vista esse shorts na 6ª e você só vai querer tirar ele no domingo.</p>
            <p class="text-xs">Os Shorts da Bolovo® foram modelados para ficar levemente acima do joelho. Não somos europeus aqui.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'bermudas',
        'idModelo' => 'fds',
        'modelo' => 'fds',
        'banner' => false,
        'bestSeller' => true,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'fds-caqui-frente',
            'costas' => 'fds-caqui-costas',
            'zoom' => 'fds-caqui-zoom',
            'adicional' => 'fds-caqui-adicional',
        ]
    ],
    // 50
    [
        'id' => 50,
        'nome' => 'FDS Jeans Shorts',
        'preco' => 'R$289,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Vista esse shorts na 6ª e você só vai querer tirar ele no domingo.</p>
            <p class="text-xs">Feito em Jeans leve e lavado = extremamente confortável. High Quality Goods</p>
            <p class="text-xs">Os Shorts da Bolovo® foram modelados para ficar levemente acima do joelho. Não somos europeus aqui.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'bermudas',
        'idModelo' => 'fds',
        'modelo' => 'fds',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'fds-jeans-frente',
            'costas' => 'fds-jeans-costas',
            'zoom' => 'fds-jeans-zoom',
            'adicional' => 'fds-jeans-adicional',
        ]
    ],
    // 51
    [
        'id' => 51,
        'nome' => 'FDS Shorts Verde',
        'preco' => 'R$269,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Vista esse shorts na 6ª e você só vai querer tirar ele no domingo.</p>
            <p class="text-xs">Os Shorts da Bolovo® foram modelados para ficar levemente acima do joelho. Não somos europeus aqui.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'bermudas',
        'idModelo' => 'fds',
        'modelo' => 'fds',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => true,
        'imagens' => [
            'frente' => 'fds-verde-frente',
            'costas' => 'fds-verde-costas',
            'zoom' => 'fds-verde-zoom',
            'adicional' => 'fds-verde-adicional',
        ]
    ],
    // 52
    [
        'id' => 52,
        'nome' => 'FDS Shorts Caramelo',
        'preco' => 'R$269,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Vista esse shorts na 6ª e você só vai querer tirar ele no domingo.</p>
            <p class="text-xs">Os Shorts da Bolovo® foram modelados para ficar levemente acima do joelho. Não somos europeus aqui.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'bermudas',
        'idModelo' => 'fds',
        'modelo' => 'fds',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'fds-caramelo-frente',
            'costas' => 'fds-caramelo-costas',
            'zoom' => 'fds-caramelo-zoom',
            'adicional' => 'fds-caramelo-adicional',
        ]
    ],
    // 53
    [
        'id' => 53,
        'nome' => 'FDS Shorts Dins Preto',
        'preco' => 'R$269,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Vista esse shorts na 6ª e você só vai querer tirar ele no domingo. Os Shorts da Bolovo® foram modelados para ficar levemente acima do joelho. Não somos europeus aqui.</p>
            <p class="text-xs">O clássico FDS Shorts de sarja da Bolovo® agora na versão jeans preto. Pra cavalgar com mais elasticidade e dar um ollie, mas também para ocasiões formais e rolês comuns.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'bermudas',
        'idModelo' => 'fds',
        'modelo' => 'fds',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => true,
        'imagens' => [
            'frente' => 'fds-dins-frente',
            'costas' => 'fds-dins-costas',
            'zoom' => 'fds-dins-zoom',
            'adicional' => 'fds-dins-adicional',
        ]
    ],

    // dads
    // 54
    [
        'id' => 54,
        'nome' => 'Dads Shorts Preto Tactel',
        'preco' => 'R$249,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Esse é aquele Shorts pra sair em fotos com a galera agora e depois mostrar para seus filhos quem era o mestre do estilo! Uma bigodera fera combina muito com essa berma.</p>
            <p class="text-xs">Shorts básico de tactel, não tem como errar. É simplesmente impossível.</p>
            <p class="text-xs">Os Shorts da Bolovo® foram modelados para ficar levemente acima do joelho. Não somos europeus aqui.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não lavar na máquina. Não colocar na secadora. Não lavar a seco.',
        'categoria' => 'bermudas',
        'idModelo' => 'dads',
        'modelo' => 'dads',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'dads-preto-frente',
            'costas' => 'dads-preto-costas',
            'zoom' => 'dads-preto-zoom',
            'adicional' => 'dads-preto-adicional',
        ]
    ],
    // 55
    [
        'id' => 55,
        'nome' => 'Dads Shorts Always Time Azul',
        'preco' => 'R$249,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">É sempre tempo para viver os Bons Momentos. Não precisa esperar a hora perfeita ou o alinhamento dos astros. Não tem segredo e nem receita, e essa é a maior preciosidade deles. Qualquer um pode vivenciar, seja numa tarde qualquer com os amigos de longa data, seja numa ida ao parque no feriado ou no caos das viagens em família, os Bons Momentos estão aí pra lembrar a gente que a vida é dahora!</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'bermudas',
        'idModelo' => 'dads',
        'modelo' => 'dads',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'dads-azul-frente',
            'costas' => 'dads-azul-costas',
            'zoom' => 'dads-azul-zoom',
            'adicional' => 'dads-azul-adicional',
        ]
    ],
    // 56
    [
        'id' => 56,
        'nome' => 'Dads Shorts Good Times',
        'preco' => 'R$269,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Básico, mas um pouquinho não básico.</p>
            <p class="text-xs">_Já faz um tempinho que a gente fala de "Good Times Co." e temos evoluído nossa percepção sobre o seu significado. Não pensamos mais em Bons Momentos só como aquelas explosões máximas de euforia! Às vezes buscar o ápice pode fazer a gente não estar tão presente na jornada até ele. Queremos desfrutar de forma plena e consciente cada momento, enquanto eles acontecem e deixá-los virarem memórias quando chega a hora de desapegar. Foram bons momentos, mas bora seguir e abrir espaço para os novos que vem pela frente :)_</p>
            <p class="text-xs">_Nessa caminhada ficaríamos com um sorriso no rosto se a Bolovo® puder, de alguma forma, ser uma companheira dos bons momentos para você e sua jornada._</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não lavar na máquina. Não colocar na secadora. Não lavar a seco. Não passar.',
        'categoria' => 'bermudas',
        'idModelo' => 'dads',
        'modelo' => 'dads',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'dads-times-frente',
            'costas' => 'dads-times-costas',
            'zoom' => 'dads-times-zoom',
            'adicional' => 'dads-times-adicional',
        ]
    ],
    // 57
    [
        'id' => 57,
        'nome' => 'Dads Shorts Open Title Verde',
        'preco' => 'R$249,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p>Bolovo Prod Classics Since 2006</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora.',
        'categoria' => 'bermudas',
        'idModelo' => 'dads',
        'modelo' => 'dads',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'dads-verde-frente',
            'costas' => 'dads-verde-costas',
            'zoom' => 'dads-verde-zoom',
            'adicional' => 'dads-verde-adicional',
        ]
    ],
    // 58
    [
        'id' => 58,
        'nome' => 'Dads Shorts Tec Trip',
        'preco' => 'R$249,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Agora você mora em Cayo Largo. Entre um Mojito ou uma Michelada, mas pra beber pelo resto da sua estadia, qual você escolhe?</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora.',
        'categoria' => 'bermudas',
        'idModelo' => 'dads',
        'modelo' => 'dads',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'dads-trip-frente',
            'costas' => 'dads-trip-costas',
            'zoom' => 'dads-trip-zoom',
            'adicional' => 'dads-trip-adicional',
        ]
    ],
    // 59
    [
        'id' => 59,
        'nome' => 'Dads Shorts Born To Travel Rosa',
        'preco' => 'R$269,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Os pais também nasceram pra viajar. Esse é aquele Shorts pra sair sem rumo com a sua família por aí por aí. Ele combina com um motor home, acampamento, atividades aquáticas e demais aventuras.</p>
            <p class="text-xs">O álbum de fotos da viagem vai ter outro sabor, os seus filhos, em algum momento vão reconhecer que o pai tinha uma estilera foda e vào lamentar por você não ter guardado esse short.</p>
            <p class="text-xs">Os Shorts de Tactel da Bolovo® foram modelados para ficar levemente acima do joelho. Não somos europeus aqui.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'bermudas',
        'idModelo' => 'dads',
        'modelo' => 'dads',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'dads-rosa-frente',
            'costas' => 'dads-rosa-costas',
            'zoom' => 'dads-rosa-zoom',
            'adicional' => 'dads-rosa-adicional',
        ]
    ],

    // velvet
    // 60
    [
        'id' => 60,
        'nome' => 'Dads Shorts Open Title Verde',
        'preco' => 'R$299,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quando você veste esse shorts se torna instantaneamente 3x mais elegante e fluente em francês. É o veludo. Perfeito para confraternizações ao ar livre.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar em temperatura média.',
        'categoria' => 'bermudas',
        'idModelo' => 'velvet',
        'modelo' => 'Velvet',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'velvet-preto-frente',
            'costas' => 'velvet-preto-costas',
            'zoom' => 'velvet-preto-zoom',
            'adicional' => 'velvet-preto-adicional',
        ]
    ],
    // 61
    [
        'id' => 61,
        'nome' => 'Velvet Shorts Verde Musgo',
        'preco' => 'R$299,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quando você veste esse shorts se torna instantaneamente 3x mais elegante e fluente em francês. É o veludo. Perfeito para confraternizações ao ar livre.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora.',
        'categoria' => 'bermudas',
        'idModelo' => 'velvet',
        'modelo' => 'Velvet',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'velvet-verde-frente',
            'costas' => 'velvet-verde-costas',
            'zoom' => 'velvet-verde-zoom',
            'adicional' => 'velvet-verde-adicional',
        ]
    ],
    // 62
    [
        'id' => 62,
        'nome' => 'Velvet Shorts Smoke',
        'preco' => 'R$299,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">O clássico Velvet Shorts da Bolovo agora em um formoso tom cinza claro, como a fumaça que paira na sua sala quando você dá um rolê em casa.</p>
            <p class="text-xs mt-1">Quando você veste esse shorts se torna instantaneamente 3x mais elegante e fluente em francês. É o veludo. Perfeito para confraternizações ao ar livre.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidasBermudas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'categoria' => 'bermudas',
        'idModelo' => 'velvet',
        'modelo' => 'Velvet',
        'banner' => false,
        'bestSeller' => false,
        "lancamento" => false,
        'imagens' => [
            'frente' => 'velvet-smoke-frente',
            'costas' => 'velvet-smoke-costas',
            'zoom' => 'velvet-smoke-zoom',
            'adicional' => 'velvet-smoke-adicional',
        ]
    ],
];
