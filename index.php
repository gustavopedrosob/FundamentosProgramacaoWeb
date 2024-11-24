<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
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
        <p class="font-bold text-4xl underline decoration-emerald-900">Apresentação</p>

        <p>Bem-vindo ao ExploraWeb!</p>
        
        <img class="w-3/4" src="imgs/projetos-em-html.webp">

        <p>No ExploraWeb, nosso objetivo é proporcionar um ambiente simples e informativo para quem quer aprender mais sobre o desenvolvimento web e explorar conceitos básicos da construção de sites. Este site foi desenvolvido para servir como uma introdução prática aos principais recursos que as linguagens HTML, CSS e JavaScript oferecem para criar e estilizar páginas web.</p>
        
        <p>Ao navegar pelo site, você encontrará:</p>
        
        <ul class="list-disc">
            <li>Informações Básicas: Uma visão geral sobre como HTML, CSS e JavaScript se combinam para estruturar, estilizar e tornar as páginas web interativas.</li>
            <li>Formulário Interativo: Uma página onde você pode enviar informações e ver como os dados são processados e apresentados, proporcionando uma experiência prática do que um formulário pode oferecer.</li>
            <li>Conteúdo Informativo: Na seção "Sobre", explicamos um pouco mais sobre a proposta do site, nossas ferramentas de desenvolvimento e os objetivos educacionais do projeto.</li>
        </ul>
        
        <p>Esperamos que essa experiência inspire você a explorar mais sobre desenvolvimento web e a entender os conceitos fundamentais que fazem a internet funcionar. O ExploraWeb é só um ponto de partida, e queremos que você se sinta à vontade para seguir em frente e criar suas próprias páginas e projetos.</p>
        <p>Explore, Aprenda e Divirta-se!</p>
      </div>
    </div>
    <?php include 'sidebar.php';?>
  </div>
</body>
</html>