# Ecommerce PHP

Este é um projeto de ecommerce simples, criado em PHP, com base em ideias de sites prontos. O objetivo do projeto é apresentar uma estrutura básica de um site de ecommerce, utilizando o padrão MVC (Model-View-Controller), com ênfase em responsividade e interatividade.

## Estrutura do Projeto

### Views
1. **`index`**: Página inicial com 5 seções, incluindo banners de produtos, carrossel e sessões com interatividade. Também inclui o cabeçalho e rodapé, que são reutilizados em todas as views.
2. **`/camisas`, `/casacos`, `/calcas`, `/bermudas`**: Páginas geradas dinamicamente, listando produtos de cada categoria com a opção de filtro por modelo.
3. **`/produto?id=`**: Página de detalhes do produto, apresentando um carrossel vertical com imagens do produto, além de informações como nome, preço, descrição, tamanho, tabela de medidas, composição e instruções de lavagem. Ao final, há um carrossel de *best sellers*, reaproveitado da página inicial.

### Tecnologias Utilizadas
- **PHP** com estrutura **MVC** (sem models).
- **Tailwind CSS** para estilização.
- **Swiper.js** para a criação dos carrosséis.
- Arquivos **JS** e **CSS** personalizados para funcionalidades e estilizações não suportadas pelo Tailwind.

### Dados
- O projeto **não** está conectado a um banco de dados.
- Os dados dos produtos são armazenados em arrays no arquivo `dados.php`.
- As imagens dos produtos estão na pasta `img`.

## Instalação

1. Clone este repositório:
   ```bash
   git clone https://github.com/Burnninel/ecommerce_PHP.git
