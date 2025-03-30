<section>
    <form class="text-xs my-8 font-medium flex justify-center uppercase gap-3">
        <h3 class="py-1 h-full">Você buscou por</h3>
        <span class="py-1 px-2 bg-zinc-900 font-semibold h-full rounded-2xl text-gray-200"><?= htmlspecialchars($pesquisa) ?></span>
    </form>
    <?php if (empty($produtos)): ?>
        <div class="flex p-6 justify-center items-center gap-4 grid grid-cols-6">
            <div class="flex justify-center col-start-2 col-span-4 mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-20" viewBox="100 100 200 200" fill="none">
                    <path d="M158.883 171.858C157.302 163.63 157.661 155.331 157.661 147.001" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M243.182 168.082C244.769 160.655 243.182 152.692 243.182 145" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M149 263C175.051 221.917 226.044 220.551 255 257.987" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="flex bg-zinc-900 p-2 rounded-3xl gap-2 
                col-span-2 col-start-3 relative justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-gray-200" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <span class="text-gray-50 absolute left-1/2 transform -translate-x-1/2 "><?= htmlspecialchars($pesquisa) ?></span>
            </div>
            <div class="col-start-1 col-end-7 text-center">
                <h1 class="text-md font-bold">Vishhh, catamo até na deep web e não rolou! Manda outra busca aí!</h1>
            </div>
        </div>
    <?php endif ?>

    <ul class="flex flex-wrap gap-[1vh]">
        <?php foreach ($produtos as $produto): ?>
            <li class="w-[calc(50%-1vh)] md:w-[calc(33.33%-1vh)] lg:w-[calc(25%-1vh)] cursor-pointer">
                <?php require "views/template/cardProduto.php"; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<section class="swiper bannerBestSellers my-[6vh] text-center">
    <h1 class="text-[3vh] font-bold text-gray-900 uppercase mb-[4vh]">mais vendidos</h1>
    <div class="swiper-wrapper flex items-center h-full w-full">
        <?php foreach ($bestSellers as $produto): ?>
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