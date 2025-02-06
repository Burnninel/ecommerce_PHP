<section class="flex py-6 text-xs gap-6">
    <div class="font-medium uppercase cursor-pointer focus:bg-gray-900 focus:text-gray-50 rounded-xl p-2">
        <span class="mr-1"> Calças </span>
        <span> > </span>
    </div>
    <a href="/<?= $categoria ?>" class="font-normal uppercase cursor-pointer focus:bg-gray-900 focus:text-gray-50 rounded-xl p-2">Ver todos</a>
    <?php foreach ($modelos['idModelo'] as $item => $id): ?>
        <a href="/<?= $categoria ?>?modelo=<?= $id ?>" class="font-normal uppercase cursor-pointer focus:bg-gray-900 focus:text-gray-50 rounded-xl p-2"><?= $modelos['itemModelo'][$item] ?></a>
    <?php endforeach; ?>
</section>

<section class="flex justify-center items-center">
    <ul class="flex flex-wrap w-full gap-[1vh]">
        <?php foreach ($produtoCategoria as $item): ?>
            <li class="w-[calc(50%-1vh)] md:w-[calc(33.33%-1vh)] lg:w-[calc(25%-1vh)] cursor-pointer">
                <a href="produto?id=<?=$item['id'] ?>">
                    <div class="relative h-[45vw] sm:h-[45vw] md:h-[30vw] lg:h-[25vw]">
                        <img src="/img/<?= $categoria ?>/<?= $item['imagens']['frente'] ?>.png" alt="Imagem da frente" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 hover:opacity-0">
                        <img src="/img/<?= $categoria ?>/<?= $item['imagens']['adicional'] ?>.png" alt="Imagem de costas" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0 hover:opacity-100">
                    </div>
                    <div class="flex flex-col sm:flex-row justify-between uppercase sm:text-[1.4vh] text-[1vh] text-zinc-800 py-[0.5vh]">
                        <h2 class="font-bold"><?= $item['nome'] ?></h2>
                        <p><?= $item['preco'] ?></p>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>