<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-BR" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
  <?php require 'modals.php';?>
  <div class="drawer">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col">
      <!-- Navbar -->
      <?php require 'navbar.php';?>
      <!-- Page content here -->
      <div class="container mx-auto p-12 space-y-4 text-xl">
        <p class="font-bold text-4xl underline decoration-emerald-900">Apresentação</p>

        <p>
          Bem-vindo ao <strong>NotesCode</strong>, um site dedicado ao compartilhamento de conhecimento em tecnologia, 
          com foco em pequenos textos e snippets de código. O objetivo principal do projeto é oferecer um espaço acessível 
          para troca de ideias, aprendizado e inspiração para entusiastas e profissionais da área.
        </p>

        <h2 class="text-2xl">O que é o NotesCode?</h2>
        <p>
            O <strong>NotesCode</strong> foi idealizado como parte de uma atividade acadêmica na PUCPR, mas transcende o ambiente 
            universitário para se tornar uma plataforma útil e prática. Ele é pensado para quem busca:
        </p>
        <ul class="indent-4 list-disc">
            <li>Dicas rápidas sobre tecnologia.</li>
            <li>Exemplos de código para resolver problemas do dia a dia.</li>
            <li>Reflexões e insights sobre desenvolvimento de software e inovações tecnológicas.</li>
        </ul>
      </div>
    </div>
    <?php require 'sidebar.php';?>
  </div>
</body>
</html>