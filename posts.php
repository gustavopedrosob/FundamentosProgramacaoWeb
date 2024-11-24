<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
    <?php include 'authentication.php';?>
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
          <!-- Navbar -->
          <?php include 'navbar.php';?>
          <!-- Page content here -->
          <div class="p-12 space-y-4">
            <p class="font-bold text-4xl underline decoration-emerald-900">Introdução ao HTML</p>
    
            <p>Bem-vindo à nossa seção de <strong>Postagens</strong>! Se você está começando a aprender sobre desenvolvimento web, um ótimo ponto de partida é entender o <strong>HTML</strong> (Hypertext Markup Language), que é a linguagem fundamental para criar páginas na web. Vamos te guiar pelos conceitos básicos!</p>
        
            <p>O que é HTML?</p>
    
            <img src="imgs/1590410787863.jpeg">
    
            <p>O HTML é a <strong>linguagem de marcação</strong> usada para estruturar o conteúdo de uma página web. Ele permite definir o que é exibido no navegador, como textos, imagens, links e outros elementos interativos.</p>
            <p>Em HTML, usamos <strong>tags</strong> para identificar diferentes tipos de conteúdo e dar significado a ele. Cada tag possui uma função específica, e ao combiná-las de maneira lógica, conseguimos criar páginas completas.</p>
        
            <p>Estrutura Básica de uma Página HTML</p>
            <p>Uma página HTML é composta por uma estrutura básica que inclui algumas tags essenciais. Aqui está um exemplo simples:</p>
            
            <div class="relative bg-neutral-900 text-white w-full h-[450px]">
                <button class="p-4 bg-neutral-500 absolute right-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>
    &lt;!DOCTYPE html&gt;
    &lt;html lang="pt-br"&gt;
    &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Minha Primeira Página&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;p&gt;Olá, Mundo!&lt;/p&gt;
    &lt;p&gt;Bem-vindo ao meu site. Este é um exemplo básico de HTML.&lt;/p&gt;
    &lt;/body&gt;
    &lt;/html&gt;
                </textarea>
            </div>
        
            <p>Explicando as Tags</p>
            <ul class="list-disc">
                <li><strong>&lt;!DOCTYPE html&gt;</strong>: Informa ao navegador que estamos usando HTML5.</li>
                <li><strong>&lt;html&gt;</strong>: A tag principal que envolve toda a página HTML.</li>
                <li><strong>&lt;head&gt;</strong>: Contém metadados sobre a página, como o título e a codificação de caracteres.</li>
                <li><strong>&lt;meta charset="UTF-8"&gt;</strong>: Define a codificação de caracteres para garantir que textos em português e outros idiomas sejam exibidos corretamente.</li>
                <li><strong>&lt;title&gt;</strong>: O título da página, que aparece na aba do navegador.</li>
                <li><strong>&lt;body&gt;</strong>: Contém o conteúdo visível da página.</li>
                <li><strong>&lt;p&gt;</strong>: A tag para o título principal da página (números mais baixos em <em>h</em> significam maior importância no título).</li>
                <li><strong>&lt;p&gt;</strong>: A tag de parágrafo, usada para criar blocos de texto.</li>
            </ul>
        
            <p>Adicionando Outros Elementos</p>
            <p>Além de texto, você também pode adicionar links, imagens e listas. Aqui estão alguns exemplos de como fazer isso:</p>
        
            <p>Adicionar um link:</p>
            <div class="relative bg-neutral-900 text-white w-full h-[100px]">
                <button class="p-4 bg-neutral-500 absolute right-0 bottom-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>&lt;a href="https://www.exemplo.com"&gt;Clique aqui para visitar nosso site!&lt;/a&gt;</textarea>
            </div>
        
            <p>Adicionar uma imagem:</p>
            <div class="relative bg-neutral-900 text-white w-full h-[100px]">
                <button class="p-4 bg-neutral-500 absolute right-0 bottom-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>
    &lt;img src="imagem.jpg" alt="Descrição da imagem"&gt;
                </textarea>
            </div>
        
            <p>Criar uma lista:</p>
            <div class="relative bg-neutral-900 text-white w-full h-[200px]">
                <button class="p-4 bg-neutral-500 absolute right-0 bottom-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>
    &lt;ul&gt;
    &lt;li&gt;Primeiro item&lt;/li&gt;
    &lt;li&gt;Segundo item&lt;/li&gt;
    &lt;li&gt;Terceiro item&lt;/li&gt;
    &lt;/ul&gt;
                </textarea>
            </div>
        
            <p>Como Funciona a Formatação?</p>
            <p>O HTML sozinho não faz a formatação visual da página. Para isso, usamos <strong>CSS</strong> (Cascading Style Sheets). O HTML define a estrutura, e o CSS aplica estilos como cores, fontes e layouts. Em breve, abordaremos como usar CSS para deixar sua página ainda mais bonita!</p>
        
            <p>Conclusão</p>
            <p>Agora você tem uma ideia básica de como o HTML funciona. Ele é a espinha dorsal de todas as páginas web e é um ótimo ponto de partida para quem deseja criar sites. Continue praticando e explorando novas tags e recursos do HTML!</p>
    
            <p class="font-bold text-4xl underline decoration-emerald-900">Introdução ao CSS</p>
    
            <p>Bem-vindo à nossa seção de <strong>Postagens</strong>! Se você já aprendeu um pouco sobre HTML, agora é hora de dar um passo adiante e aprender sobre o <strong>CSS</strong> (Cascading Style Sheets), que é a linguagem usada para estilizar páginas web.</p>
        
            <p>O que é CSS?</p>
    
            <img src="imgs/geradores-codigos-CSS.jpg.webp">
    
            <p>O CSS é uma linguagem usada para descrever a apresentação de um documento HTML. Ele permite controlar aspectos como cores, fontes, espaçamentos, alinhamentos, tamanhos e muito mais.</p>
            <p>Com o CSS, você pode melhorar a aparência das páginas HTML, tornando-as mais atraentes e fáceis de usar.</p>
        
            <p>Estrutura Básica de um Código CSS</p>
            <p>O CSS é composto por regras, e cada regra contém três partes principais:</p>
            <ul class="list-disc">
                <li><strong>Seletores:</strong> Indicam o elemento HTML que será estilizado.</li>
                <li><strong>Propriedades:</strong> São os aspectos do elemento que você deseja alterar, como cor ou fonte.</li>
                <li><strong>Valores:</strong> Definem o valor que a propriedade deve ter, como uma cor específica ou um tamanho de fonte.</li>
            </ul>
        
            <p>Abaixo está um exemplo simples de código CSS:</p>
        
            <div class="dark">
                <button onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span>Copiar para a clipboard</button>
                <textarea class="code" readonly>
                p {
                    color: blue;
                    font-size: 24px;
                    text-align: center;
                }
                </textarea>
            </div>
        
            <p>Explicando o Exemplo</p>
            <ul class="list-disc">
                <li><strong>p</strong>: O seletor, que indica que estamos estilizando os títulos <code>&lt;p&gt;</code>.</li>
                <li><strong>color: blue;</strong>: A propriedade <strong>color</strong> define a cor do texto. O valor é <strong>blue</strong> (azul).</li>
                <li><strong>font-size: 24px;</strong>: A propriedade <strong>font-size</strong> define o tamanho da fonte. O valor é <strong>24px</strong> (24 pixels).</li>
                <li><strong>text-align: center;</strong>: A propriedade <strong>text-align</strong> alinha o texto ao centro.</li>
            </ul>
        
            <p>Adicionando CSS ao seu HTML</p>
            <p>Existem três maneiras de adicionar CSS a uma página HTML:</p>
            <ul class="list-disc">
                <li><strong>CSS inline:</strong> Dentro de uma tag HTML específica, usando o atributo <code>style</code>.</li>
                <li><strong>CSS interno:</strong> Dentro de uma tag <code>&lt;style&gt;</code> no cabeçalho da página HTML.</li>
                <li><strong>CSS externo:</strong> Em um arquivo separado, que é vinculado à página HTML.</li>
            </ul>
        
            <p>Exemplo de CSS Interno:</p>
            <div class="relative bg-neutral-900 text-white w-full h-[200px]">
                <button class="p-4 bg-neutral-500 absolute right-0 bottom-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>
    &lt;style&gt;
    p {
        color: green;
        font-size: 18px;
    }
    &lt;/style&gt;
                </textarea>
            </div>
        
            <p>CSS Externo</p>
            <p>A forma mais comum e recomendada de usar CSS é através de arquivos externos. Isso mantém o HTML limpo e organiza o código de forma mais eficiente.</p>
        
            <div class="relative bg-neutral-900 text-white w-full h-[100px]">
                <button class="p-4 bg-neutral-500 absolute right-0 bottom-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>
    &lt;link rel="stylesheet" href="style.css"&gt;
                </textarea>
            </div>
        
            <p>No exemplo acima, o arquivo <code>style.css</code> contém as regras de estilo que serão aplicadas à página HTML.</p>
        
            <p>Propriedades Comuns do CSS</p>
            <ul class="list-disc">
                <li><strong>color</strong>: Define a cor do texto.</li>
                <li><strong>background-color</strong>: Define a cor de fundo de um elemento.</li>
                <li><strong>font-family</strong>: Define o tipo de fonte para o texto.</li>
                <li><strong>margin</strong>: Define o espaço fora de um elemento.</li>
                <li><strong>padding</strong>: Define o espaço dentro de um elemento.</li>
                <li><strong>border</strong>: Define as bordas de um elemento.</li>
                <li><strong>width e height</strong>: Define a largura e altura de um elemento.</li>
            </ul>
        
            <p>Conclusão</p>
            <p>O CSS é essencial para dar estilo e tornar suas páginas HTML visualmente atraentes. Com o CSS, você pode controlar o layout e o design de maneira eficiente, criando páginas web mais bonitas e funcionais. Continue praticando e explorando as diferentes propriedades que o CSS oferece!</p>
    
            <p class="font-bold text-4xl underline decoration-emerald-900">Introdução ao JavaScript</p>
    
            <p>Bem-vindo à nossa seção de <strong>Postagens</strong>! Agora que você já conhece HTML e CSS, é hora de dar o próximo passo e aprender sobre o <strong>JavaScript</strong>, a linguagem de programação que traz interatividade para suas páginas web.</p>
        
            <p>O que é JavaScript?</p>
    
            <img src="imgs/4502e0bb-14cb-4da9-845b-7083e48ccc00_1.webp">
    
            <p>JavaScript é uma linguagem de programação usada para criar páginas web dinâmicas e interativas. Ao contrário do HTML (que define a estrutura da página) e do CSS (que define o estilo), o JavaScript permite que você adicione funcionalidades à sua página, como validação de formulários, animações, interação com o usuário e muito mais.</p>
        
            <p>Estrutura Básica de um Código JavaScript</p>
            <p>O código JavaScript é geralmente colocado dentro da tag <code>&lt;script&gt;</code>, que pode ser inserida no cabeçalho ou no final do corpo da página HTML. Aqui está um exemplo básico de código JavaScript:</p>
        
            <div class="relative bg-neutral-900 text-white w-full h-[100px]">
                <button class="p-4 bg-neutral-500 absolute right-0 bottom-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>
    &lt;script&gt;
    alert("Olá, Mundo!");
    &lt;/script&gt;
                </textarea>
            </div>
        
            <p>No exemplo acima, o código cria uma janela de alerta que exibe a mensagem "Olá, Mundo!" quando a página é carregada.</p>
        
            <p>Variáveis</p>
            <p>Em JavaScript, você pode armazenar dados em variáveis. Para declarar uma variável, usamos as palavras-chave <code>var</code>, <code>let</code> ou <code>const</code>.</p>
            <div class="relative bg-neutral-900 text-white w-full h-[100px]">
                <button class="p-4 bg-neutral-500 absolute right-0 bottom-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>
    let nome = "João";
    const idade = 25;
                </textarea>
            </div>
        
            <p>Você pode usar variáveis para armazenar textos, números e outros tipos de dados. A diferença entre <code>let</code> e <code>const</code> é que a variável <code>const</code> não pode ser alterada após ser declarada.</p>
        
            <p>Funções</p>
            <p>Funções em JavaScript são blocos de código que podem ser executados quando chamados. Aqui está um exemplo simples:</p>
            <div class="relative bg-neutral-900 text-white w-full h-[100px]">
                <button class="p-4 bg-neutral-500 absolute right-0 bottom-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>
    function saudacao() {
    alert("Olá, seja bem-vindo!");
    }
                </textarea>
            </div>
        
            <p>Para chamar a função <code>saudacao()</code>, basta escrever:</p>
            <div class="relative bg-neutral-900 text-white w-full h-[100px]">
                <button class="p-4 bg-neutral-500 absolute right-0 bottom-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>
    saudacao();
                </textarea>
            </div>
        
            <p>Eventos</p>
            <p>JavaScript permite que você responda a interações do usuário, como cliques e pressionamentos de teclas. Isso é feito através de eventos. Aqui está um exemplo de como você pode reagir ao clique de um botão:</p>
            <div class="relative bg-neutral-900 text-white w-full h-[100px]">
                <button class="p-4 bg-neutral-500 absolute right-0 bottom-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>
    &lt;button onclick="saudacao()"&gt;Clique aqui&lt;/button&gt;
                </textarea>
            </div>
        
            <p>Quando o botão é clicado, a função <code>saudacao()</code> é chamada e a mensagem "Olá, seja bem-vindo!" aparece em um alerta.</p>
        
            <p>Condicionais</p>
            <p>As estruturas condicionais permitem que você execute diferentes ações dependendo de uma condição. Aqui está um exemplo usando <code>if</code>:</p>
            <div class="relative bg-neutral-900 text-white w-full h-[250px]">
                <button class="p-4 bg-neutral-500 absolute right-0 bottom-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>
    let idade = 20;
    
    if (idade >= 18) {
    alert("Você é maior de idade!");
    } else {
    alert("Você é menor de idade!");
    }
                </textarea>
            </div>
        
            <p>Se a condição <code>idade >= 18</code> for verdadeira, o JavaScript exibe a mensagem "Você é maior de idade!". Caso contrário, a mensagem será "Você é menor de idade!".</p>
        
            <p>Adicionando JavaScript ao seu HTML</p>
            <p>Assim como o CSS, o JavaScript pode ser adicionado ao seu HTML de três maneiras:</p>
            <ul class="list-disc">
                <li><strong>JavaScript Inline:</strong> Você pode colocar código JavaScript diretamente em atributos HTML, como <code>onclick</code> ou <code>onmouseover</code>.</li>
                <li><strong>JavaScript Interno:</strong> Você pode adicionar o código dentro de uma tag <code>&lt;script&gt;</code> diretamente no arquivo HTML.</li>
                <li><strong>JavaScript Externo:</strong> Você pode criar um arquivo JavaScript separado e vinculá-lo ao HTML.</li>
            </ul>
        
            <p>Exemplo de JavaScript Externo:</p>
            <div class="relative bg-neutral-900 text-white w-full h-[100px]">
                <button class="p-4 bg-neutral-500 absolute right-0 bottom-0" onclick="onCopyToClipboard(this)"><span class="material-icons-outlined">content_copy</span></button>
                <textarea class="bg-inherit size-full resize-none overflow-hidden p-2 focus:outline-none" readonly>
    &lt;script src="script.js"&gt;&lt;/script&gt;
                </textarea>
            </div>
        
            <p>No exemplo acima, o arquivo <code>script.js</code> contém o código JavaScript que será executado na página HTML.</p>
        
            <p>Conclusão</p>
            <p>JavaScript é uma ferramenta poderosa que permite criar páginas web dinâmicas e interativas. Com ele, você pode adicionar funcionalidades como animações, validação de formulários, controle de eventos, manipulação do DOM (Document Object Model) e muito mais.</p>
            <p>Continue praticando e experimentando com o JavaScript para aprender cada vez mais!</p>
          </div>
        </div>
        <?php 
          include 'sidebar.php';
        ?>
    </div>
</body>
</html>


