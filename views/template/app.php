<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopninel</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/views/template/swiper.css">
</head>

<body class="bg-stone-100 tracking-wide">
    <header>
        <nav class="bg-zinc-900 text-center">
            <div class="flex justify-between py-4 h-full items-center grid grid-cols-8 gap-4">
                <a href="/" id="logo"
                    class="text-5xl cursor-pointer uppercase text-emerald-900 col-span-4 col-start-3 hover:animate-pulse
                ">shopninel</a>
                <div class="bg-transparent border-b-2 flex px-2">
                    <input type="text"
                        class="h-xl bg-zinc-900 outline-none text-gray-200 text-lg 
                            placeholder:text-gray-400 placeholder:italic"
                        placeholder="Pesquisar...">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="size-6 text-gray-200"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </div>
            </div>
            <ul class="sm:text-sm text-[0.6rem] text-gray-950 bg-zinc-50 uppercase font-bold flex">
                <li class="cursor-pointer py-2 w-1/4
                           hover:duration-500 hover:bg-zinc-800 hover:text-gray-200">
                    <a href="/camisetas" class="w-full h-full flex items-center justify-center">Camisetas</a>
                </li>
                <li class="cursor-pointer py-2 w-1/4
                           hover:duration-500 hover:bg-zinc-800 hover:text-gray-200">
                    <a href="/casacos" class="w-full h-full flex items-center justify-center">Casacos</a>
                </li>
                <li class="cursor-pointer py-2 w-1/4
                           hover:duration-500 hover:bg-zinc-800 hover:text-gray-200">
                    <a href="/calcas" class="w-full h-full flex items-center justify-center">Calças</a>
                </li>
                <li class="cursor-pointer py-2 w-1/4
                           hover:duration-500 hover:bg-zinc-800 hover:text-gray-200">
                    <a href="/bermudas" class="w-full h-full flex items-center justify-center">Bermudas</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="px-[4vh]">
        <?php require "views/{$view}.view.php"; ?>
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
    <script src="/views/template/swiper.js"></script>
    <script src="/views/template/produto.js"></script>
</body>

</html>