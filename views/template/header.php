<header>
        <nav class="bg-zinc-900 text-center">
            <div class="flex justify-between py-4 h-full items-center grid grid-cols-8 gap-4">
                <a href="/" id="logo"
                    class="text-5xl cursor-pointer uppercase text-emerald-900 col-span-4 col-start-3 hover:animate-pulse
                ">shopninel</a>
                <form class="border-b-2 flex px-2" action="/pesquisar" method="GET">
                    <input type="text"
                        class="bg-zinc-900 outline-none text-gray-200 text-lg 
                            placeholder:text-gray-400 placeholder:italic w-full"
                        placeholder="Pesquisar..."
                        name="produto">
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-6 text-gray-200"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </form>
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