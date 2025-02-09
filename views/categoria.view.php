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
                <?php require "views/template/cardProduto.php"; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</section>