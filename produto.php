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

<body class="tracking-wide">
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
        <!-- sessão do produto -->
        <section class="w-full lg:flex justify-center">
            <!-- imagem do produto -->
            <div class="flex w-full lg:w-1/2 justify-center">
                <img src="/img/camisaBolovo.png" class="">
            </div>
            <!-- Dados do produto -->
            <div class="flex flex-col lg:w-1/3 mt-[8vh]">
                <h2 class="text-md font-semibold">Camiseta Sloking Team Off White</h2>
                <span class="text-md">R$189,00</span>
                <ul class="flex justify-between py-[4vh] uppercase text-sm">
                    <li tabindex="0" autofocus class="border hover:border-gray-200 rounded-lg px-2 cursor-pointer focus:bg-gray-900 focus:text-gray-50">p</li>
                    <li tabindex="0" class="border hover:border-gray-200 rounded-lg px-2 cursor-pointer focus:bg-gray-900 focus:text-gray-50">m</li>
                    <li tabindex="0" class="border hover:border-gray-200 rounded-lg px-2 cursor-pointer focus:bg-gray-900 focus:text-gray-50">g</li>
                    <li tabindex="0" class="border hover:border-gray-200 rounded-lg px-2 cursor-pointer focus:bg-gray-900 focus:text-gray-50">gg</li>
                    <li tabindex="0" class="border hover:border-gray-200 rounded-lg px-2 cursor-pointer focus:bg-gray-900 focus:text-gray-50">xgg</li>
                </ul>
                <button class="w-full border-2 border-gray-900 rounded-xl border-gray-900 p-1 hover:bg-gray-900 hover:text-gray-50 font-medium uppercase">comprar</button>
                <div class="flex flex-col pt-[4vh]">
                    <p class="text-sm">Você curte F1? ou F1? Ou curte F1 F1? Vrummmmmm</p>
                    <p class="text-sm">#tchasco #pirraci #agitonanight Bolovo Since 2006©️ TMJ & Mist.</p>
                    <p class="uppercase pt-4">fabricado no brasil</p>
                </div>
                <ul class="flex uppercase gap-4 mt-[3vh]">
                    <li id="medidas" class="cursor-pointer">medidas</li>
                    <li id="composicao" class="cursor-pointer">composição</li>
                    <li id="lavagem" class="cursor-pointer">lavagem</li>
                </ul>

                <div class="my-6">
                    <table id="medidasProduto" class="hidden w-full uppercase text-[0.6rem]">
                        <thead>
                            <tr class="text-sm">
                                <th class="p-1 text-left"></th>
                                <th class="p-1 text-center">PP</th>
                                <th class="p-1 text-center">P</th>
                                <th class="p-1 text-center">M</th>
                                <th class="p-1 text-center">G</th>
                                <th class="p-1 text-center">GG</th>
                                <th class="p-1 text-center">XGG</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-black p-1 text-left">Peito</td>
                                <td class="border border-black p-1 text-center">49 cm</td>
                                <td class="border border-black p-1 text-center">53 cm</td>
                                <td class="border border-black p-1 text-center">56 cm</td>
                                <td class="border border-black p-1 text-center">59 cm</td>
                                <td class="border border-black p-1 text-center">62 cm</td>
                                <td class="border border-black p-1 text-center">65 cm</td>
                            </tr>
                            <tr>
                                <td class="border border-black p-1 text-left">Comprimento</td>
                                <td class="border border-black p-1 text-center">70 cm</td>
                                <td class="border border-black p-1 text-center">72 cm</td>
                                <td class="border border-black p-1 text-center">74 cm</td>
                                <td class="border border-black p-1 text-center">76 cm</td>
                                <td class="border border-black p-1 text-center">80 cm</td>
                                <td class="border border-black p-1 text-center">84 cm</td>
                            </tr>
                            <tr>
                                <td class="border border-black p-1 text-left">Manga</td>
                                <td class="border border-black p-1 text-center">21 cm</td>
                                <td class="border border-black p-1 text-center">22 cm</td>
                                <td class="border border-black p-1 text-center">23 cm</td>
                                <td class="border border-black p-1 text-center">24 cm</td>
                                <td class="border border-black p-1 text-center">25 cm</td>
                                <td class="border border-black p-1 text-center">26 cm</td>
                            </tr>
                        </tbody>
                    </table>

                    <div id="composicaoPorduto" class="hidden space-y-1 text-sm">
                        <p>
                            Camiseta manga curta preta com silk colorido na frente, e preto e branco costas.
                        </p>
                        <p>
                            Composição: 100% algodão, pré-encolhido com gramatura de 0,175g. que pode variar 3% para mais ou para menos.
                        </p>
                        <p>
                            As medidas podem variar em 1cm para mais ou para menos em comparação com a grade de tamanhos.
                        </p>
                        <p class="pt-4">
                            _Obs: A coloração dos produtos em fotos externas ou de campanha podem apresentar alterações. Na dúvida sobre a cor real do produto, veja a foto com fundo branco._
                        </p>
                    </div>
                    
                    <div id="lavagemProduto" class="hidden text-sm">
                        <p>Lavar na máquina com água fria. Secar no varal. Não usar alvejante. Não deixar de molho. Não colocar na secadora. Não lavar a seco. Passar do lado avesso em temperatura média.</p>
                    </div>
                </div>
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
    <script src="/script.js"></script>
</body>

</html>