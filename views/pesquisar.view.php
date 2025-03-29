<section class="mb-[4vh]">
    <div class="text-xs my-8 font-medium flex justify-center uppercase gap-3">
         <h3 class="py-1 h-full">Você buscou por</h3>
         <span class="py-1 px-2 bg-zinc-900 font-semibold h-full rounded-2xl text-gray-200">camisa muito louca do carai</span>
    </div>

    <div class="flex items-center h-full w-full">
        <?php foreach ($bestSellers as $produto): ?>
            <article class="swiper-slide flex w-[calc(25%)] justify-around cursor-pointer">
                <?php require "views/template/cardProduto.php"; ?>
            </article>
        <?php endforeach; ?>
    </div>
   
</section>