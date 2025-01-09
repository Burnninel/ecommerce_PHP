<?php

$composicao = [
    'estampa' => 'Camiseta manga curta preta com silk colorido na frente, e preto e branco costas.',
    'tecido' => 'Composição: 100% algodão, pré-encolhido com gramatura de 0,175g. que pode variar 3% para mais ou para menos.',
    'medidas' => 'As medidas podem variar em 1cm para mais ou para menos em comparação com a grade de tamanhos.',
    'obs' => '_Obs: A coloração dos produtos em fotos externas ou de campanha podem apresentar alterações. Na dúvida sobre a cor real do produto, veja a foto com fundo branco._'
];

$medidas = [
    'tamanhos' => ['p', 'm','g', 'gg', 'xgg'],
    'peito' => ['p' => '53 cm', 'm' => '56 cm', 'g' => '59 cm', 'gg' => '62 cm', 'xgg' => '65 cm'],
    'comprimento' => ['p' => '72 cm', 'm' => '74 cm', 'g' => '76 cm', 'gg' => '80 cm', 'xgg' => '84 cm'],
    'manga' => ['p' => '22 cm', 'm' => '23 cm', 'g' => '24 cm', 'gg' => '25 cm', 'xgg' => '26 cm'],
];

$produtos = [
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
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'bestSellers',
        'banner' => true,
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
        'nome' => 'Camiseta Expeditions Team Azul Marinho',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'bestSellers',
        'banner' => true,
        'imagens' => [
            'frente' => 'expeditions-azul-frente',
            'costas' => 'expeditions-azul-costas',
            'zomm' => 'expeditions-azul-zoom',
            'adicional' => 'expeditions-azul-frente-inteira',
            'adicional2' => 'expeditions-azul-costas-inteira',
        ]
    ],
    // 3
    [
        'id' => 3,
        'nome' => 'Camiseta Atomic Research Preta',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'bestSellers',
        'banner' => true,
        'imagens' => [
            'frente' => 'atomic-preta-frente',
            'costas' => 'atomic-preta-costas',
            'zoom' => 'atomic-preta-zoom',
            'adicional' => 'atomic-preta-frente-inteira',
            'adicional2' => 'atomic-preta-costas-inteira',
        ]
    ],
    // 4
    [
        'id' => 4,
        'nome' => 'Camiseta Chefinho Casino Royale Off White',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'bestSellers',
        'banner' => true,
        'imagens' => [
            'frente' => 'chefinho-branca-frente',
            'costas' => 'chefinho-branca-costas',
            'zoom' => 'chefinho-branca-zoom',
            'adicional' => 'chefinho-branca-frente-inteira',
        ]
    ],
    // 5
    [
        'id' => 5,
        'nome' => 'Camiseta Departamento Criativo Marrom',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'bestSellers',
        'banner' => true,
        'imagens' => [
            'frente' => 'criativo-marrom-frente',
            'costas' => 'criativo-marrom-costas',
            'zoom' => 'criativo-marrom-zoom',
            'adicional' => 'criativo-marrom-frente-inteira',
            'adicional2' => 'criativo-marrom-costas-inteira',
        ]
    ],
    // 6
    [
        'id' => 6,
        'nome' => 'Camiseta Departamento Criativo Listrada',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'bestSellers',
        'banner' => true,
        'imagens' => [
            'frente' => 'criativo2-listras-frente',
            'costas' => 'criativo2-listras-costas',
            'zoom' => 'criativo2-listras-zoom',
            'adicional' => 'criativo2-listras-frente-inteira',
            'adicional2' => 'criativo2-listras-costas-inteira',
        ]
    ],

    // 9
    [
        'id' => 9,
        'nome' => 'Camiseta Explore Off White',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'lancamento',
        'banner' => true,
        'imagens' => [
            'frente' => 'explore-branca-frente',
            'costas' => 'explore-branca-costas',
            'zoom' => 'explore-branca-zoom',
            'adicional' => 'explore-branca-costas-inteira',
        ]
    ],
    // 11
    [
        'id' => 11,
        'nome' => 'Camiseta Bolovo Day Frames',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'lancamento',
        'banner' => true,
        'imagens' => [
            'frente' => 'frames-branca-frente',
            'costas' => 'frames-branca-costas',
            'zoom' => 'frames-branca-zoom',
            'adicional' => 'frames-branca-frente-inteira',
        ]
    ],
    // 12
    [
        'id' => 12,
        'nome' => 'Camiseta Loucuras de Acostamento',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'lancamento',
        'banner' => true,
        'imagens' => [
            'frente' => 'locuras-branca-frente',
            'costas' => 'locuras-branca-costas',
            'zoom' => 'locuras-branca-zoom',
            'adicional' => 'locuras-branca-costas-inteira',
        ]
    ],
    // 13
    [
        'id' => 13,
        'nome' => 'Camiseta Expeditions Team Marrom',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'lancamento',
        'banner' => true,
        'imagens' => [
            'frente' => 'expeditions-marrom-frente',
            'costas' => 'expeditions-marrom-costas',
            'zoom' => 'expeditions-marrom-zoom',
            'adicional' => 'expeditions-marrom-frente-inteira',
            'adicional2' => 'expeditions-marrom-costas-inteira',
        ]
    ],
    // 14
    [
        'id' => 14,
        'nome' => 'Camiseta Smoking Team Preta',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'lancamento',
        'banner' => true,
        'imagens' => [
            'frente' => 'smoking-preta-frente',
            'costas' => 'smoking-preta-costas',
            'zoom' => 'smoking-preta-zoom',
            'adicional' => 'smoking-preta-frente-inteira',
            'adicional2' => 'smoking-preta-costas-inteira',
        ]
    ],
    // 15
    [
        'id' => 15,
        'nome' => 'Camiseta Souvenir BLV Litoral',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'lancamento',
        'banner' => true,
        'imagens' => [
            'frente' => 'souvenir-azul-frente',
            'costas' => 'souvenir-azul-costas',
            'zoom' => 'souvenir-azul-zoom',
            'adicional' => 'souvenir-azul-frente-inteira',
        ]
    ],
    // 16
    [
        'id' => 16,
        'nome' => 'Camiseta Departamento Criativo Listrada',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'lancamento',
        'banner' => true,
        'imagens' => [
            'frente' => 'criativo2-listras-frente',
            'costas' => 'criativo2-listras-costas',
            'zoom' => 'criativo2-listras-zoom',
            'adicional' => 'criativo2-listras-frente-inteira',
            'adicional2' => 'criativo2-listras-costas-inteira',
        ]
    ],
    // 17
    [
        'id' => 17,
        'nome' => 'Camiseta Atomic Research Preta',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
                <p>Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                <p>#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'camisetas',
        'categoria' => 'lancamento',
        'banner' => true,
        'imagens' => [
            'frente' => 'atomic-preta-frente',
            'costas' => 'atomic-preta-costas',
            'zoom' => 'atomic-preta-zoom',
            'adicional' => 'atomic-preta-frente-inteira',
            'adicional2' => 'atomic-preta-costas-inteira',
        ]
    ],

    // 18
    [
        'id' => 18,
        'nome' => 'Calça Good Times Preta',
        'preco' => 'R$329,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quer sair de casa bem arrumado, mas no conforto que você pediu pra Jah? A gente também quer. Por isso desenvolvemos nossa Good Times Pants.</p>
            <p class="text-xs mt-1">Parece que você ta usando uma Chino, mas o nível de conforto é outro.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Peça colorida, lavar separadamente. Lavagem manual com água fria. Secar no varal. Não usar alvejante. Não colocar na máquina de lavar. Não colocar na secadora. Não lavar a seco. Passar em temperatura média.',
        'tipo' => 'calcas',
        'categoria' => 'lancamento',
        'banner' => false,
        'imagens' => [
            'frente' => 'explore-branca-frente',
            'costas' => 'explore-branca-costas',
            'zoom' => 'explore-branca-zoom',
            'adicional' => 'explore-branca-costas-inteira',
        ]
    ],
    // 19
    [
        'id' => 19,
        'nome' => 'Camiseta Bolovo Day Frames',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quer sair de casa bem arrumado, mas no conforto que você pediu pra Jah? A gente também quer. Por isso desenvolvemos nossa Good Times Pants.</p>
            <p class="text-xs mt-1">Parece que você ta usando uma Chino, mas o nível de conforto é outro.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'calcas',
        'categoria' => 'lancamento',
        'banner' => false,
        'imagens' => [
            'frente' => 'frames-branca-frente',
            'costas' => 'frames-branca-costas',
            'zoom' => 'frames-branca-zoom',
            'adicional' => 'frames-branca-frente-inteira',
        ]
    ],
    // 20
    [
        'id' => 20,
        'nome' => 'Camiseta Loucuras de Acostamento',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quer sair de casa bem arrumado, mas no conforto que você pediu pra Jah? A gente também quer. Por isso desenvolvemos nossa Good Times Pants.</p>
            <p class="text-xs mt-1">Parece que você ta usando uma Chino, mas o nível de conforto é outro.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'calcas',
        'categoria' => 'lancamento',
        'banner' => false,
        'imagens' => [
            'frente' => 'locuras-branca-frente',
            'costas' => 'locuras-branca-costas',
            'zoom' => 'locuras-branca-zoom',
            'adicional' => 'locuras-branca-costas-inteira',
        ]
    ],
    // 21
    [
        'id' => 21,
        'nome' => 'Camiseta Expeditions Team Marrom',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quer sair de casa bem arrumado, mas no conforto que você pediu pra Jah? A gente também quer. Por isso desenvolvemos nossa Good Times Pants.</p>
            <p class="text-xs mt-1">Parece que você ta usando uma Chino, mas o nível de conforto é outro.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'calcas',
        'categoria' => 'lancamento',
        'banner' => false,
        'imagens' => [
            'frente' => 'expeditions-marrom-frente',
            'costas' => 'expeditions-marrom-costas',
            'zoom' => 'expeditions-marrom-zoom',
            'adicional' => 'expeditions-marrom-frente-inteira',
            'adicional2' => 'expeditions-marrom-costas-inteira',
        ]
    ],
    // 22
    [
        'id' => 22,
        'nome' => 'Camiseta Smoking Team Preta',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quer sair de casa bem arrumado, mas no conforto que você pediu pra Jah? A gente também quer. Por isso desenvolvemos nossa Good Times Pants.</p>
            <p class="text-xs mt-1">Parece que você ta usando uma Chino, mas o nível de conforto é outro.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'calcas',
        'categoria' => 'lancamento',
        'banner' => false,
        'imagens' => [
            'frente' => 'smoking-preta-frente',
            'costas' => 'smoking-preta-costas',
            'zoom' => 'smoking-preta-zoom',
            'adicional' => 'smoking-preta-frente-inteira',
            'adicional2' => 'smoking-preta-costas-inteira',
        ]
    ],
    // 23
    [
        'id' => 23,
        'nome' => 'Camiseta Souvenir BLV Litoral',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quer sair de casa bem arrumado, mas no conforto que você pediu pra Jah? A gente também quer. Por isso desenvolvemos nossa Good Times Pants.</p>
            <p class="text-xs mt-1">Parece que você ta usando uma Chino, mas o nível de conforto é outro.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'calcas',
        'categoria' => 'lancamento',
        'banner' => false,
        'imagens' => [
            'frente' => 'souvenir-azul-frente',
            'costas' => 'souvenir-azul-costas',
            'zoom' => 'souvenir-azul-zoom',
            'adicional' => 'souvenir-azul-frente-inteira',
        ]
    ],
    // 24
    [
        'id' => 24,
        'nome' => 'Camiseta Departamento Criativo Listrada',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quer sair de casa bem arrumado, mas no conforto que você pediu pra Jah? A gente também quer. Por isso desenvolvemos nossa Good Times Pants.</p>
            <p class="text-xs mt-1">Parece que você ta usando uma Chino, mas o nível de conforto é outro.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'calcas',
        'categoria' => 'lancamento',
        'banner' => false,
        'imagens' => [
            'frente' => 'criativo2-listras-frente',
            'costas' => 'criativo2-listras-costas',
            'zoom' => 'criativo2-listras-zoom',
            'adicional' => 'criativo2-listras-frente-inteira',
            'adicional2' => 'criativo2-listras-costas-inteira',
        ]
    ],
    // 25
    [
        'id' => 25,
        'nome' => 'Camiseta Atomic Research Preta',
        'preco' => 'R$189,00',
        'marca' => 'bolovo',
        'descricao' => '
            <p class="text-xs">Quer sair de casa bem arrumado, mas no conforto que você pediu pra Jah? A gente também quer. Por isso desenvolvemos nossa Good Times Pants.</p>
            <p class="text-xs mt-1">Parece que você ta usando uma Chino, mas o nível de conforto é outro.</p>
        ',
        'fabricacao' => 'FABRICADO NO BRASIL',
        'medidas' => $medidas,
        'composicao' => $composicao,
        'lavagem' => 'Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.',
        'tipo' => 'calcas',
        'categoria' => 'lancamento',
        'banner' => false,
        'imagens' => [
            'frente' => 'atomic-preta-frente',
            'costas' => 'atomic-preta-costas',
            'zoom' => 'atomic-preta-zoom',
            'adicional' => 'atomic-preta-frente-inteira',
            'adicional2' => 'atomic-preta-costas-inteira',
        ]
    ],
];