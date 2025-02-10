<a href="produto?id=<?= $item['id'] ?>" class="w-full">
    <div class="relative h-[45vw] md:h-[30vw] lg:h-[25vw]">
        <img src="/img/<?= $item['categoria'] ?>/<?= $item['imagens']['frente'] ?>.png" alt="Imagem da frente" class="absolute inset-0 w-full h-full transition-opacity duration-500 hover:opacity-0">
        <img src="/img/<?= $item['categoria'] ?>/<?= isset($item['imagens']['adicional2']) ? $item['imagens']['adicional2'] : $item['imagens']['adicional'] ?>.png" alt="Imagem de costas" class="absolute inset-0 w-full h-full transition-opacity duration-500 opacity-0 hover:opacity-100">
    </div>
    <div class="flex flex-col sm:flex-row justify-between uppercase sm:text-[1.4vh] text-[1vh] text-zinc-800 py-[0.5vh]">
        <h2 class="font-bold"><?= $item['nome'] ?></h2>
        <p><?= $item['preco'] ?></p>
    </div>
</a>