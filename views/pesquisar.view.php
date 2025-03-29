<section >
    <form class="text-xs my-8 font-medium flex justify-center uppercase gap-3">
        <h3 class="py-1 h-full">Você buscou por</h3>
        <span class="py-1 px-2 bg-zinc-900 font-semibold h-full rounded-2xl text-gray-200"><?= $pesquisa ?></span>
    </form>

    <ul class="flex flex-wrap gap-[1vh]">
        <?php foreach ($produtos as $produto): ?>
            <li class="w-[calc(50%-1vh)] md:w-[calc(33.33%-1vh)] lg:w-[calc(25%-1vh)] cursor-pointer">
                <?php require "views/template/cardProduto.php"; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</section>