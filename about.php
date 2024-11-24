<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
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
            <p class="font-bold text-4xl underline decoration-emerald-900">Sobre o ExploraWeb</p>
    
            <p>O ExploraWeb foi criado com o objetivo de demonstrar o poder e a simplicidade das tecnologias fundamentais da web: HTML, CSS e JavaScript. Este site é parte de um projeto educativo, desenvolvido para exibir as principais capacidades de um site front-end, mostrando desde a estrutura básica até a interação com o usuário.</p>
            
            <p>Nossa Proposta</p>
            <p>Aqui no ExploraWeb, buscamos proporcionar uma introdução prática para quem deseja entender como essas linguagens funcionam juntas. Este site é totalmente desenvolvido com HTML para estruturar o conteúdo, CSS para estilizar e criar uma identidade visual coesa, e JavaScript para trazer interatividade e tornar a navegação mais dinâmica.</p>
            
            <p>Tecnologias Utilizadas</p>
            <ul class="list-disc">
                <li><strong>HTML (HyperText Markup Language):</strong> A espinha dorsal de qualquer site, usada para estruturar o conteúdo e organizar elementos como textos, imagens, links e formulários.</li>
                <li><strong>CSS (Cascading Style Sheets):</strong> A linguagem de estilos que controla a aparência e o layout das páginas, responsável por transformar elementos simples em uma interface visualmente atraente.</li>
                <li><strong>JavaScript:</strong> A linguagem que torna a página interativa, possibilitando validações, alterações de estilo em tempo real e a captura de dados do usuário.</li>
            </ul>
            
            <p>Quem Somos</p>
            <p>Este projeto foi desenvolvido por Gustavo Pedroso Bernardes, com foco em aplicar o conhecimento adquirido em desenvolvimento web e explorar o potencial dessas três linguagens. Espero que o ExploraWeb inspire novos desenvolvedores e sirva como um guia inicial para aqueles que querem dar os primeiros passos no mundo do desenvolvimento web.</p>
            
            <p>O Que Você Vai Encontrar</p>
            <ul>
                <li>Uma <strong>página inicial</strong> com uma introdução ao site e navegação para outras páginas.</li>
                <li>Um <strong>formulário interativo</strong>, com validação de dados e processamento de informações.</li>
                <li>Uma página para <strong>exibição dos dados</strong> enviados no formulário, demonstrando o uso do método GET e da manipulação de dados via JavaScript.</li>
            </ul>
            
            <p>Agradecemos sua visita e esperamos que o ExploraWeb seja uma experiência de aprendizado positiva para você!</p>
            
            <p><strong>Continue explorando e aproveite a jornada!</strong></p>      
          </div>
        </div>
        <?php 
          include 'sidebar.php';
        ?>
    </div>
</body>
</html>
