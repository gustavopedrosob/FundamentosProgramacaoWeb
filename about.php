<?php session_start();?>
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
    <?php require 'modals.php';?>
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
          <!-- Navbar -->
          
          <?php require 'navbar.php';?>
          <!-- Page content here -->
          <div class="container mx-auto p-12 space-y-4 text-xl">
            <p class="font-bold text-4xl underline decoration-emerald-900">Sobre o &lt;NotesCode&gt;</p>
    
            <h2 class="text-2xl">Como funciona?</h2>
            <ul class="indent-4 list-disc">
                <li>
                    <strong>Textos curtos e diretos:</strong> Cada postagem no <strong>NotesCode</strong> é objetiva, 
                    com foco na clareza e utilidade.
                </li>
                <li>
                    <strong>Códigos inclusos:</strong> Muitos textos incluem trechos de código, facilitando o entendimento e a aplicação prática.
                </li>
                <li>
                    <strong>Compartilhamento de conhecimento:</strong> A plataforma incentiva a colaboração e o aprendizado contínuo.
                </li>
            </ul>

            <h2 class="text-2xl">Por que o NotesCode é especial?</h2>
            <ul class="indent-4 list-disc">
                <li>
                    <strong>Facilidade de Acesso:</strong> Os conteúdos são curtos e fáceis de entender, ideais para quem está 
                    começando ou deseja aprender rapidamente.
                </li>
                <li>
                    <strong>Diversidade de Temas:</strong> De conceitos básicos a tópicos avançados, há algo para todos os níveis de conhecimento.
                </li>
                <li>
                    <strong>Origem Acadêmica:</strong> Criado por Gustavo Pedroso Bernardes, estudante da PUCPR, o projeto tem suas raízes no ambiente educacional 
                    e carrega a essência de inovação e aprendizado colaborativo.
                </li>
            </ul>

            <h2 class="text-2xl">Futuro do NotesCode</h2>
            <p>
                Embora o projeto tenha nascido como parte de uma atividade acadêmica, ele tem potencial para crescer e se tornar uma 
                comunidade vibrante de troca de conhecimentos. A ideia é expandir para incluir mais colaboradores, integrar ferramentas 
                interativas e, eventualmente, permitir que a própria comunidade compartilhe seus próprios textos e códigos.
            </p>

            <h2 class="text-2xl">Tecnologias:</h2>
            <ul class="indent-4 list-disc">
                <li>PHP</li>
                <li>MySQL</li>
                <li>tailwindcss e daisyui</li>
                <li>Google icons e Bootstrap icons</li>
                <li>HTML, Javascript e CSS</li>
            </ul>

            <p>
                Se você ama aprender e compartilhar sobre tecnologia, o <strong>NotesCode</strong> é para você. 🚀
            </p>


          </div>
        </div>
        <?php 
          require 'sidebar.php';
        ?>
    </div>
</body>
</html>

