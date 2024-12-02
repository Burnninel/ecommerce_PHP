<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopninel</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bokor&family=Luckiest+Guy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/swiper.css">
</head>

<body class="bg-stone-100 tracking-wide">
    <header>
        <nav class="bg-zinc-900 text-center">
            <div id="logo"
                class="text-5xl uppercase text-emerald-900 py-4
                       hover:animate-pulse cursor-pointer">
                <a href="#">shopninel</a>
            </div>
            <ul class="sm:text-sm text-[0.6rem] text-gray-950 bg-zinc-50 uppercase font-bold flex">
                <li class="cursor-pointer py-2 w-1/4
                           hover:duration-500 hover:bg-zinc-800 hover:text-gray-200">
                    <a href="#">Camisetas</a>
                </li>
                <li class="cursor-pointer py-2 w-1/4
                           hover:duration-500 hover:bg-zinc-800 hover:text-gray-200">
                    <a href="#">Moletons</a>
                </li>
                <li class="cursor-pointer py-2 w-1/4
                           hover:duration-500 hover:bg-zinc-800 hover:text-gray-200">
                    <a href="#">Calças</a>
                </li>
                <li class="cursor-pointer py-2 w-1/4
                           hover:duration-500 hover:bg-zinc-800 hover:text-gray-200">
                    <a href="#">Bermudas</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="swiper bannerInitial size-5/6 mt-6">
            <div class="swiper-wrapper flex items-center h-full">
                <div class="swiper-slide flex items-center text-center justify-center">
                    <a href="#" class="w-full"><img src="./img/lancamentos.png" alt="Lançamentos 2025" class="w-full"></a>
                </div>
                <div class="swiper-slide flex items-center text-center justify-center">
                    <a href="#" class="w-full"><img src="./img/high.png" alt="Produtos High" class="w-full"></a>
                </div>
            </div>

            <div class="swiper-button-next text-gray-100"></div>
            <div class="swiper-button-prev text-gray-100"></div>
            <div class="swiper-pagination"></div>
        </section>

        <section class="swiper bannerAutoLoop flex size-5/6 text-[2vh] font-semibold text-zinc-400 h-[13vh]">
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

        <section class="flex justify-center items-center w-5/6 mx-auto gap-1">
            <div class="relative h-[40vw] w-1/2 cursor-pointer">
                <img src="/img/bolovoFrente2.png" alt="Imagem da frente"
                    class="absolute inset-0 w-full h-full object-cover 
                           transition-opacity duration-500 hover:opacity-0">
                <img src="/img/bolovoCostas2.png" alt="Imagem de costas"
                    class="absolute inset-0 w-full h-full object-cover 
                           transition-opacity duration-500 opacity-0 hover:opacity-100">
            </div>
            <div class="relative h-[40vw] size-1/2 cursor-pointer">
                <img src="/img/bolovoCostas.png" alt="Imagem da frente"
                    class="absolute inset-0 w-full h-full object-cover 
                           transition-opacity duration-500 hover:opacity-0">
                <img src="/img/bolovoFrente.png" alt="Imagem de costas"
                    class="absolute inset-0 w-full h-full object-cover 
                           transition-opacity duration-500 opacity-0 hover:opacity-100">
            </div>
        </section>

        <section class="flex justify-center items-center text-center w-5/6 mx-auto">
            <div class="w-full">
                <h1 class="text-[4vh] font-semibold text-zinc-600 uppercase my-[3.5vh]">Camisetas HIGH</h1>
                <ul class="flex flex-wrap gap-[1vh]">
                    <li class="w-[calc(25%-1vh)]">
                        <div class="relative h-[22vw]">
                            <img src="/img/bolovoFrente2.png" alt="Imagem da frente" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 hover:opacity-0">
                            <img src="/img/bolovoCostas2.png" alt="Imagem de costas" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0 hover:opacity-100">
                        </div>
                        <div class="flex justify-between uppercase text-[1.4vh] text-zinc-800 py-[0.5vh]">
                            <p class="font-bold">Camisa High Street</p>
                            <p>R$270,90</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <div class="mt-[300px]">teste</div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/swiper.js"></script>
</body>

</html>