<section class="flex justify-center items-center mt-10">
        <ul class="flex flex-wrap gap-[1vh]">
            <?php foreach ($calcas as $item): ?>
                <li class="w-[calc(25%-1vh)] cursor-pointer">
                    <a href="produto?id=<?= $item['id'] ?>">
                        <div class="relative h-[22vw]">
                            <img src="/img/calcas/<?= $item['imagens']['frente'] ?>.png" alt="Imagem da frente" class="absolute inset-0 w-full h-full items-center text-center transition-opacity duration-500 hover:opacity-0">
                            <img src="/img/calcas/<?= $item['imagens']['adicional'] ?>.png" alt="Imagem de costas" class="absolute inset-0 w-full h-full transition-opacity duration-500 opacity-0 hover:opacity-100">
                        </div>
                        <div class="flex flex-col sm:flex-row justify-between uppercase sm:text-[1.4vh] text-[1vh] text-zinc-800 py-[0.5vh]">
                            <h2 class="font-bold"><?= $item['nome'] ?></h2>
                            <p><?= $item['preco'] ?></p>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
</section>