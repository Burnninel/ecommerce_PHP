<a href="produto?id=<?= $produto->id ?>" class="w-full">
    <div class="relative h-[45vw] md:h-[30vw] lg:h-[25vw]">
        <img src="/img/<?= $produto->categoria ?>/<?= $produto->imagens[0] ?>"
            alt="Imagem da frente"
            class="absolute inset-0 w-full h-full transition-opacity duration-500 hover:opacity-0">

        <img src="/img/<?= $produto->categoria ?>/<?= $produto->imagens[4] ?? $produto->imagens[4] ?? $produto->imagens[3] ?? 'fallback.png' ?>"
            alt="Imagem de costas"
            class="absolute inset-0 w-full h-full transition-opacity duration-500 opacity-0 hover:opacity-100">
    </div>
    <div class="flex flex-col sm:flex-row justify-between uppercase sm:text-[1.4vh] text-[1vh] text-zinc-800 py-[0.5vh]">
        <h2 class="font-bold"><?= $produto->nome ?></h2>
        <p>R$ <?= $produto->preco ?></p>
    </div>
</a>