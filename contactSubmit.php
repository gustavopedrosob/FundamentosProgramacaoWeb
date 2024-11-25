<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
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
          <div class="p-12 space-y-4">
            <p class="font-bold text-4xl underline decoration-emerald-900">Sucesso!</p>
            <p>Obrigado pelo seu envio. Recebemos suas informações com sucesso e entraremos em contato em breve.</p>
    
            <div class="space-y-2">
                <div><strong>Nome:</strong> <span id="displayName"></span></div>
                <div><strong>Email:</strong> <span id="displayEmail"></span></div>
                <div><strong>Telefone:</strong> <span id="displayTelephone"></span></div>
                <div><strong>Mensagem:</strong> <span id="displayMessage"></span></div>
                <div>
                    <a href="index.html" class="link link-accent">Voltar para a Página Inicial</a>
                </div>
            </div>
          </div>
        </div>
        <?php 
          require 'sidebar.php';
        ?>
    </div>
    <script src="js/form.js"></script>
</body>
</html>
