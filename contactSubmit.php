<?php
session_start();
require 'checkAuthentication.php';
$conn = new mysqli("localhost:3306", "root", "", "programacaoweb");

$telefone = $conn->real_escape_string($_POST['telefone']);
$motivo = $conn->real_escape_string($_POST['motivo']);
$mensagem = $conn->real_escape_string($_POST['mensagem']);
$email = $_SESSION["email"];

$result = $conn->query("INSERT INTO contatos (telefone, motivo, mensagem, email) VALUES ('$telefone', '$motivo', '$mensagem', '$email')");

$conn->close();
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
            <p class="font-bold text-4xl underline decoration-emerald-900">Sucesso!</p>
            <p>Obrigado pelo seu envio. Recebemos suas informações com sucesso e entraremos em contato em breve.</p>
    
            <div class="space-y-2">
                <div><strong>Telefone:</strong><span id="displayTelephone"> <?= $telefone ?></span></div>
                <div><strong>Mensagem:</strong><span id="displayMessage"> <?= $mensagem ?></span></div>
                <div>
                    <a href="index.php" class="link link-accent">Voltar para a Página Inicial</a>
                </div>
            </div>
          </div>
        </div>
        <?php 
          require 'sidebar.php';
        ?>
    </div>
</body>
</html>
