<section class="w-full lg:flex justify-center">
    <div class="flex w-full lg:w-1/2 justify-center lg:py-[6vh]">
        <div class="swiper bannerProductImg h-full lg:h-[80vh]">
            <div class="swiper-wrapper lg:ml-[4vh]">
                <?php foreach ($produto->imagens as $img): ?>
                    <div class="swiper-slide">
                        <img src="/img/<?= $produto->categoria ?>/<?= $img ?>" class="h-full">
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination">
                <span class="swiper-pagination-progressbar-fill"></span>
            </div>
        </div>
    </div>
    <div class="flex flex-col lg:w-1/3 mt-[8vh] px-[4vh]">
        <h2 class="text-md font-semibold"><?= $produto->nome ?></h2>
        <span class="text-md">R$ <?= $produto->preco ?></span>
        <?php if (!empty($dimensoes)): ?>
            <ul class="flex justify-between py-[4vh] uppercase text-sm">
                <?php foreach ($dimensoes as $tamanhos): ?>
                    <li tabindex="0" class="border rounded-lg px-2 cursor-pointer" id="<?= $tamanhos->tamanho ?>"><?= $tamanhos->tamanho ?></li>
                <?php endforeach; ?>
            </ul>
            <button class="w-full font-medium uppercase border-2 border-gray-900 rounded-xl p-1 hover:bg-gray-900 hover:text-gray-50">
                comprar
            </button>
        <?php else: ?>
            <span class="uppercase text-[0.8rem] py-[4vh]">Produto indisponível</span>
            <button class="w-full border-2 border-gray-500 text-gray-500 rounded-xl p-1 font-medium uppercase cursor-no-drop" disabled>
                comprar
            </button>
        <?php endif; ?>
        <div class="flex flex-col pt-[4vh]">
            <div class="text-sm"><?= $produto->descricao ?></div>
            <p class="uppercase pt-4"><?= $produto->fabricacao ?></p>
        </div>
        <ul class="flex uppercase gap-4 mt-[3vh]">
            <li id="medidas" class="cursor-pointer">medidas</li>
            <li id="composicao" class="cursor-pointer">composição</li>
            <li id="lavagem" class="cursor-pointer">lavagem</li>
        </ul>

        <div class="my-6">
            <?php if (!empty($dimensoes)): ?>
                <table id="medidasProduto" class="w-full uppercase text-[0.6rem] hidden">
                    <thead>
                        <tr class="text-sm">
                            <th class="p-1 text-left"></th>
                            <?php foreach ($dimensoes as $tamanho): ?>
                                <th class="p-1 text-center"><?= $tamanho->tamanho ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (array_slice($medidas, 2) as $linha): ?>
                            <tr>
                                <td class="border border-black p-1 text-left"><?= ucfirst($linha) ?></td>
                                <?php foreach ($dimensoes as $coluna): ?>
                                    <td class="border border-black p-1 text-left"><?= $coluna->{$linha} ?></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <span id="medidasProduto" class="hidden uppercase text-[0.8rem] my-4">Dados indisponíveis</span>
            <?php endif; ?>

            <div id="composicaoPorduto" class="hidden space-y-1 text-sm">
                <p><?= $produto->composicao ?></p>
            </div>

            <div id="lavagemProduto" class="hidden text-sm">
                <p><?= $produto->lavagem ?></p>
            </div>
        </div>
    </div>
</section>

<section class="swiper bannerBestSellers my-[6vh]">
    <h1 class="text-[1.5vh] font-bold text-gray-900 uppercase mb-[2vh]">mais vendidos</h1>
    <?php require "views/template/bestSellers.php"; ?>
</section>