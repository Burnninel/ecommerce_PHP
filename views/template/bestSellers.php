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