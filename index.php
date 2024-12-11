<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopninel</title>

    <script src="https://cdn.tailwindcss.com"></script>

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

    <main class="px-[4vh]">
        <section class="bannerInitial pt-[0.3vh]">
            <a href="#"><img src="./img/bolovoBanner.jpg" alt="Lançamentos 2025" class="w-full"></a>
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

        <section class="swiper bannerBestSellers mb-[4vh]">
            <h1 class="text-[2.5vh] font-bold text-gray-900 uppercase text-center mb-[2vh]">mais vendidos</h1>
            <div class="swiper-wrapper flex items-center h-full w-full">
                <article class="swiper-slide flex w-[calc(25%)] justify-around cursor-pointer">
                    <div class="w-full">
                        <div class="relative h-[45vw] sm:h-[35vw] md:h-[30vw] lg:h-[25vw]">
                            <img src="/img/bolovoFrente2.png" alt="Imagem da frente" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 hover:opacity-0">
                            <img src="/img/bolovoCostas2.png" alt="Imagem de costas" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0 hover:opacity-100">
                        </div>
                        <div class="flex flex-col sm:flex-row justify-between uppercase sm:text-[1.4vh] text-[1vh] text-zinc-800 py-[0.5vh]">
                            <h2 class="font-bold">Camisa High Street</h2>
                            <p>R$270,90</p>
                        </div>
                    </div>
                </article>
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

        <section class="flex justify-center items-center gap-[1vh]">
            <div class="relative h-[50vw] w-1/2 cursor-pointer">
                <img src="/img/bolovoFrente2.png" alt="Imagem da frente"
                    class="absolute inset-0 w-full h-full object-cover 
                           transition-opacity duration-500 hover:opacity-0">
                <img src="/img/bolovoCostas2.png" alt="Imagem de costas"
                    class="absolute inset-0 w-full h-full object-cover 
                           transition-opacity duration-500 opacity-0 hover:opacity-100">
            </div>
            <div class="relative h-[50vw] w-1/2 cursor-pointer">
                <img src="/img/bolovoCostas.png" alt="Imagem da frente"
                    class="absolute inset-0 w-full h-full object-cover 
                           transition-opacity duration-500 hover:opacity-0">
                <img src="/img/bolovoFrente.png" alt="Imagem de costas"
                    class="absolute inset-0 w-full h-full object-cover 
                           transition-opacity duration-500 opacity-0 hover:opacity-100">
            </div>
        </section>

        <section class="flex justify-center items-center">
            <div class="w-full">
                <h1 class="text-[2.5vh] font-bold text-gray-900 uppercase my-[4vh] text-center">Camisetas HIGH</h1>
                <ul class="flex flex-wrap gap-[1vh]">
                    <li class="w-[calc(25%-1vh)] cursor-pointer">
                        <div class="relative h-[22vw]">
                            <img src="/img/bolovoFrente2.png" alt="Imagem da frente" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 hover:opacity-0">
                            <img src="/img/bolovoCostas2.png" alt="Imagem de costas" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0 hover:opacity-100">
                        </div>
                        <div class="flex flex-col sm:flex-row justify-between uppercase sm:text-[1.4vh] text-[1vh] text-zinc-800 py-[0.5vh]">
                            <h2 class="font-bold">Camisa High Street</h2>
                            <p>R$270,90</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <footer class="mt-[10vh] bg-gray-900 p-[2vh] text-gray-400 text-center space-y-[2vh]">
        <div class="text-center text-[6vh] uppercase max-w-screen-lg mx-auto">
            <a href="#" class="text-emerald-900" id="logo">shopninel</a>
            <div class="text-center text-[1.3vh] font-normal">
                Desde 2001, a Shopninel inspira autenticidade e estilo.
                Mais que moda, criamos conexões e peças que convidam você a explorar o mundo com confiança.
                Aprendemos que viver intensamente faz toda a diferença.
                <br> - Wear Your Story.
            </div>
        </div>

        <ul class="font-semibold text-center">
            <li class="text-center text-[3vh] uppercase text-emerald-900 mb-[1vh]">Fale conosco</li>
            <li class="text-[1.3vh]">
                INSTAGRAM: <span class="text-gray-400 ml-2">@bruno_i79</span>
            </li>
            <li class="text-[1.3vh]">
                WHATSAPP: <span class="text-gray-400 ml-2">(11) 99999-9999</span>
            </li>
            <li class="text-[1.3vh]">
                EMAIL: <span class="text-gray-400 ml-2">contato@shopininel.com</span>
            </li>
        </ul>
        <p class="text-center text-gray-400 text-[1.2vh] mt-4">
            © SHOPNINEL | BRNO - TECNOLOGIA EM ECOMMERCE | CNPJ: 77779999/0001-99
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/swiper.js"></script>
</body>

</html>