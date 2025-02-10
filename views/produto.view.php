<section class="w-full lg:flex justify-center">
    <div class="flex w-full lg:w-1/2 justify-center lg:py-[6vh]">
        <div class="swiper bannerProductImg h-full lg:h-[80vh]">
            <div class="swiper-wrapper lg:ml-[4vh]">
                <?php foreach ($produto['imagens'] as $imagens): ?>
                    <div class="swiper-slide">
                        <img src="/img/<?= $produto['categoria'] ?>/<?= $imagens ?>.png" class="h-full">
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination">
                <span class="swiper-pagination-progressbar-fill"></span>
            </div>
        </div>
    </div>
    <div class="flex flex-col lg:w-1/3 mt-[8vh] px-[4vh]">
        <h2 class="text-md font-semibold"><?= $produto['nome'] ?></h2>
        <span class="text-md"><?= $produto['preco'] ?></span>
        <ul class="flex justify-between py-[4vh] uppercase text-sm">
            <?php foreach ($produto['medidas']['tamanhos'] as $tamanhos): ?>
                <li tabindex="0" class="border rounded-lg px-2 cursor-pointer" id="<?= $tamanhos ?>"><?= $tamanhos ?></li>
            <?php endforeach; ?>
        </ul>
        <button class="w-full border-2 border-gray-900 rounded-xl border-gray-900 p-1 hover:bg-gray-900 hover:text-gray-50 font-medium uppercase">comprar</button>
        <div class="flex flex-col pt-[4vh]">
            <div class="text-sm"><?= $produto['descricao'] ?></div>
            <p class="uppercase pt-4"><?= $produto['fabricacao'] ?></p>
        </div>
        <ul class="flex uppercase gap-4 mt-[3vh]">
            <li id="medidas" class="cursor-pointer">medidas</li>
            <li id="composicao" class="cursor-pointer">composição</li>
            <li id="lavagem" class="cursor-pointer">lavagem</li>
        </ul>

        <div class="my-6">
            <table id="medidasProduto" class="hidden w-full uppercase text-[0.6rem]">
                <thead>
                    <tr class="text-sm">
                        <th class="p-1 text-left"></th>
                        <?php foreach ($tabelaDeMedidas['tamanhos'] as $tamanhos): ?>
                            <th class="p-1 text-center"><?= $tamanhos ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                <?php foreach (array_slice($tabelaDeMedidas, 1) as $key => $value): ?>
                    <tr>
                        <td class="border border-black p-1 text-left"><?= $key ?></td>
                        <?php foreach ($value as $item): ?>
                            <td class="border border-black p-1 text-center"><?= $item ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <div id="composicaoPorduto" class="hidden space-y-1 text-sm">
                <?php foreach ($produto['composicao'] as $composicao): ?>
                    <p><?= $composicao ?></p>
                <?php endforeach; ?>
            </div>

            <div id="lavagemProduto" class="hidden text-sm">
                <p><?= $produto['lavagem'] ?></p>
            </div>
        </div>
    </div>
</section>

<section class="swiper bannerBestSellers my-[6vh]">
    <h1 class="text-[1.5vh] font-bold text-gray-900 uppercase mb-[2vh]">mais vendidos</h1>
    <div class="swiper-wrapper flex items-center h-full w-full">
        <?php foreach ($bestSellers as $item): ?>
            <article class="swiper-slide flex w-[calc(25%)] justify-around cursor-pointer">
                <?php require "views/template/cardProduto.php"; ?>
            </article>
        <?php endforeach; ?>
    </div>
    <button class="swiper-button-next nextBannerBestSellers">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
        </svg>
    </button>
    <button class="swiper-button-prev prevBannerBestSellers">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
        </svg>
    </button>
</section>
