function selecionarElemento() {
  const idsValidos = ["p", "m", "g", "gg", "xgg"];
  const botoes = document.querySelectorAll("li");
  
  botoes.forEach((botao) => {
    botao.addEventListener("click", function () {
      if (idsValidos.includes(this.id)) {
        document.querySelectorAll(".selecionado").forEach((el) => el.classList.remove("selecionado"));
        return this.classList.toggle("selecionado");
      } 
    });
  });
}

selecionarElemento();

function exibirElemento($b, $e, elementos) {
  const btn = document.getElementById($b);
  const element = document.getElementById($e);

  btn.addEventListener("click", function () {
    if (element.classList.contains("none")) {
      element.classList.add("hidden");
      element.classList.remove("none");
    } else {
      elementos.forEach(function (el) {
        const elElement = document.getElementById(el);
        elElement.classList.add("hidden");
        elElement.classList.remove("none");
      });

      element.classList.remove("hidden");
      element.classList.add("none");
    }
  });
}

exibirElemento("medidas", "medidasProduto", [
  "medidasProduto",
  "composicaoPorduto",
  "lavagemProduto",
]);
exibirElemento("composicao", "composicaoPorduto", [
  "medidasProduto",
  "composicaoPorduto",
  "lavagemProduto",
]);
exibirElemento("lavagem", "lavagemProduto", [
  "medidasProduto",
  "composicaoPorduto",
  "lavagemProduto",
]);
