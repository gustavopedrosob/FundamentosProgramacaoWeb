<?php
session_start();
require 'checkAuthentication.php';
?>
<!DOCTYPE html>
<html lang="pt-BR" data-theme="light">
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
          <div class="container mx-auto p-12 space-y-4">
            <p class="font-bold text-4xl underline decoration-emerald-900">Entre em Contato Conosco</p>
    
            <p>Adoraríamos ouvir sua opinião! Por favor, deixe seus dados de contato abaixo e nos avise o motivo do seu contato.</p>
            
            <p>Você pode escolher uma das opções para nos ajudar a entender melhor o que você deseja:</p>
            
            <form id="contatoForm" action="contactSubmit.php" method="POST" class="space-y-4">
                <label class="input input-bordered flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                    <input type="text" class="grow" placeholder="Telefone" name="telefone" pattern="(?:\(?\d{2}\)? ?)?\d{4,5} ?-? ?\d{4}" required/>
                </label>
                <select id="motivo" name="motivo" class="select select-bordered w-full" required>
                    <option value="feedback">Feedback</option>
                    <option value="sugestao">Sugestão</option>
                    <option value="erro">Reportar um Erro</option>
                </select>
                <textarea class="textarea textarea-bordered w-full" name="mensagem" placeholder="Mensagem" maxlength="200" required></textarea>
                <div class="flex flex-row-reverse">
                    <button id="enviar" type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
          </div>
        </div>
        <?php 
          require 'sidebar.php';
        ?>
      </div>
</body>
</html>



