<section class="flex w-full justify-center gap-6 m-6">
    <form class="flex-1 max-w-lg uppercase font-semiboold text-xs " method="POST" action="/cadastrar?dados=produto">
        <div class="border p-6 gap-2">
            <h3 class="text-xl font-bold text-center my-6">Cadastrar produto</h3>
            <div class="flex flex-col my-4 my-4">
                <label for="nome" class="font-semibold">nome do produto</label>
                <input
                    type="text"
                    id="nome"
                    name="nome" required
                    class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2" placeholder="Camisa Bolovo...">
            </div>
            <div class="flex flex-col my-4">
                <label for="preco" class="font-semibold">preço do produto</label>
                <input
                    type="text"
                    id="preco"
                    name="preco" required value="189,90"
                    class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2" placeholder="0,00">
            </div>
            <div class="flex flex-col my-4">
                <label for="marca" class="font-semibold">marca</label>
                <input
                    type="number"
                    id="marca"
                    name="marca" required
                    class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2"
                    placeholder="Bolovo ID: 1"
                    value="1">
            </div>
            <div class="flex flex-col my-4">
                <label for="descricao" class="font-semibold">descrição</label>
                <textarea
                    type="text"
                    id="descricao"
                    name="descricao" required
                    class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2 min-h-48"></textarea>
            </div>
            <div class="flex flex-col my-4">
                <label for="fabricacao" class="font-semibold">fabricação</label>
                <input
                    type="text"
                    id="fabricacao"
                    name="fabricacao" required
                    class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2"
                    placeholder="Fabricado no Brasil" value="FABRICADO NO BRASIL">
            </div>
            <div class="flex flex-col my-4">
                <label for="lavagem" class="font-semibold">lavagem</label>
                <input
                    type="text"
                    id="lavagem"
                    name="lavagem" required
                    class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2" placeholder="Instruções de lavagem">
            </div>
            <div class="flex flex-col my-4">
                <label for="especificacao" class="font-semibold">especificação</label>
                <input
                    type="text"
                    id="especificacao"
                    name="especificacao" required
                    class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2" placeholder="Se vira: ID">
            </div>
            <div class="flex flex-col my-4">
                <label for="composicao" class="font-semibold">composição</label>
                <textarea
                    type="text"
                    id="composicao"
                    name="composicao" required
                    class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2 min-h-48"><p>Camiseta manga curta preta com silk colorido na frente, e preto e branco costas.</p><p>Composição: 100% algodão, pré-encolhido com gramatura de 0,175g. que pode variar 3% para mais ou para menos.</p><p>As medidas podem variar em 1cm para mais ou para menos em comparação com a grade de tamanhos.</p><p>_Obs: A coloração dos produtos em fotos externas ou de campanha podem apresentar alterações. Na dúvida sobre a cor real do produto, veja a foto com fundo branco._</p></textarea>
            </div>
            <div class="flex flex-col my-4">
                <label for="banner" class="font-semibold">banner</label>
                <select id="banner" name="banner" class="outline-none py-2 px-2" required>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="flex flex-col my-4">
                <label for="bestSeller" class="font-semibold">Best Seller</label>
                <select id="bestSeller" name="bestSeller" class="outline-none py-2 px-2" required>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="flex flex-col my-4">
                <label for="lancamento" class="font-semibold">lançamento</label>
                <select id="lancamento" name="lancamento" class="outline-none py-2 px-2" required>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>

            <div class="flex flex-col my-4">
                <label for="caminho[]" class="font-semibold">caminho</label>
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <input type="text" name="caminho[]"
                        class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2" placeholder="Imagem <?= $i ?>">
                <?php endfor; ?>
            </div>
            <div class="flex flex-col my-4">
                <label for="tipo[]" class="font-semibold">tipo</label>
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <input type="text" name="tipo[]"
                        class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2"
                        placeholder="png" value="png">
                <?php endfor; ?>
            </div>

            <button type="submit" class="w-full bg-zinc-900 text-gray-100 uppercase text-sm p-2 rounded-lg hover:bg-gray-50 border hover:text-zinc-900 hover:border hover:border-zinc-900">Cadastrar</button>

            <div class="w-full">
                <?php if (strlen($retornoProduto) > 0):  ?>
                    <div class="border border-green-400 bg-green-100 text-green-700 px-4 rounded-md py-2">
                        <?= $retornoProduto ?>
                    </div>
                <?php endif;  ?>
            </div>
        </div>
    </form>

    <form class="flex-1 max-w-lg uppercase font-semiboold text-xs" method="POST" action="/cadastrar?dados=medidas">
        <div class="border p-6 gap-6">
            <h3 class="text-xl font-bold text-center my-6">Cadastrar Medidas</h3>
            <div class="flex flex-col my-4">
                <label for="id" class="font-semibold">Produto</label>
                <select id="id" name="id" class="outline-none py-2 px-2" required>
                    <?php foreach ($produtos as $item): ?>
                        <option value="<?= $item->id ?>">
                            <?= $item->id ?> - <?= $item->nome ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <div class="flex flex-col my-4">
                    <label for="medidas" class="font-semibold">Tamanho <?= $i ?></label>
                    <input type="text" name="tamanhos[<?= $i ?>][tamanho]"
                        class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2" placeholder="Tamanho">
                    <input type="text" name="tamanhos[<?= $i ?>][comprimento]"
                        class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2" placeholder="Comprimento">
                    <input type="text" name="tamanhos[<?= $i ?>][peito]"
                        class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2" placeholder="Peito">
                    <input type="text" name="tamanhos[<?= $i ?>][manga]"
                        class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2" placeholder="Manga">
                    <input type="text" name="tamanhos[<?= $i ?>][cintura]"
                        class="outline-none text-sm border border-gray-300 placeholder:text-xs py-1 px-2" placeholder="Cintura">
                </div>
            <?php endfor; ?>

            <button type="submit"
                class="w-full bg-zinc-900 text-gray-100 uppercase text-sm p-2 rounded-lg 
                hover:bg-gray-50 border hover:text-zinc-900 hover:border hover:border-zinc-900">
                Cadastrar
            </button>

            <div class="my-4">
                <?php if (strlen($retornoMedidas) > 0):  ?>
                    <div class="border border-green-400 bg-green-100 text-green-700 px-4 rounded-md py-2">
                        <?= $retornoMedidas ?>
                    </div>
                <?php endif;  ?>
            </div>
        </div>
    </form>
</section>