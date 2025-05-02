<section class="bannerInitial pt-[0.3vh]">
    <a href="#lancamentos"><img src="./img/bolovoBanner.jpg" alt="Lançamentos 2025" class="w-full"></a>
</section>

<section class="swiper bannerAutoLoop flex text-[2vh] font-semibold text-zinc-400 h-[13vh]">
    <div class="swiper-wrapper">
        <div class="swiper-slide flex justify-around">
            <figure class="flex text-center items-center">
                <img src="/img/skate.png" alt="Icone Skateboarding" class="h-[4vh] mr-2">
                <figcaption>5% de desconto no Pix</figcaption>
            </figure>
        </div>
        <div class="swiper-slide flex justify-around">
            <figure class="flex text-center items-center">
                <img src="/img/girafa.png" alt="Icone Girafa LRG" class="h-[4vh] mr-2">
                <figcaption>Sua 1ª troca é grátis</figcaption>
            </figure>
        </div>
        <div class="swiper-slide flex justify-around">
            <figure class="flex text-center items-center">
                <img src="/img/chave.png" alt="Icone Chave" class="h-[4vh] mr-2">
                <figcaption>Compre 10x Sem Juros</figcaption>
            </figure>
        </div>
        <div class="swiper-slide flex justify-around">
            <figure class="flex text-center items-center">
                <img src="/img/girafa.png" alt="Icone Chave" class="h-[4vh] mr-2">
                <figcaption>Atendimento Online</figcaption>
            </figure>
        </div>
    </div>
</section>

<section class="swiper bannerBestSellers mb-[4vh] text-center">
    <h1 class="text-[2.5vh] font-bold text-gray-900 uppercase mb-[4vh]">mais vendidos</h1>
    <?php require "views/template/bestSellers.php"; ?>
</section>

<section class="flex justify-center items-center gap-[1vh]">
    <?php foreach ($banner as $index => $item): ?>
        <div class="relative h-[50vw] w-1/2 cursor-pointer">
            <a href="produto?id=<?= $item->id ?>">
                <img src="/img/<?= $item->categoria ?>/<?= ($index % 2 === 0) ? $item->imagens[0] : $item->imagens[3] ?>"
                    alt="Imagem da frente"
                    class="absolute inset-0 w-full h-full object-cover 
                            transition-opacity duration-500 hover:opacity-0">
                <img src="/img/<?= $item->categoria ?>/<?= ($index % 2 === 0) ? $item->imagens[3] : $item->imagens[1] ?>"
                    alt="Imagem de costas"
                    class="absolute inset-0 w-full h-full object-cover 
                            transition-opacity duration-500 opacity-0 hover:opacity-100">
            </a>
        </div>
    <?php endforeach; ?>
</section>

<section class="flex justify-center items-center" id="lancamentos">
    <div class="w-full">
        <h1 class="text-[2.5vh] font-bold text-gray-900 uppercase my-[4vh] text-center">Lançamentos</h1>
        <ul class="flex flex-wrap gap-[1vh]">
            <?php foreach (array_slice($lancamentos, 0, 8) as $produto): ?>
                <li class="w-[calc(50%-1vh)] md:w-[calc(33.33%-1vh)] lg:w-[calc(25%-1vh)] cursor-pointer">
                    <?php require "views/template/cardProduto.php"; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>