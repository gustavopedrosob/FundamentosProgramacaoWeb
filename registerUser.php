<?php
session_start();
$conn = new mysqli("localhost:3306", "root", "", "programacaoweb");

$nome = $conn->real_escape_string($_POST['nome']);
$email = $conn->real_escape_string($_POST['email']);
$senha = $conn->real_escape_string($_POST['senha']);

$result = $conn->query("INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', md5('$senha'))");

if ($result) {
    $_SESSION['usuario'] = $nome;
    $_SESSION['email'] = $email;
    $msg = "Cadastro do usuário $nome realizado com sucesso!";
} else {
    session_destroy();
    $msg = $conn->connect_error;
}

$conn->close();
?>
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
<?php include 'modals.php';?>
  <div class="drawer">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col">
      <!-- Navbar -->
      <?php include 'navbar.php';?>
      <!-- Page content here -->
      <div class="p-12 space-y-4">
        <p class="font-bold text-4xl underline decoration-emerald-900">Cadastro</p>
        <p><?= $msg ?></p>
      </div>
    </div>
    <?php include 'sidebar.php';?>
  </div>
</body>
</html>