<?php
session_start();
$conn = new mysqli("localhost:3306", "root", "", "programacaoweb");

$email = $conn->real_escape_string($_POST['email']);
$senha = $conn->real_escape_string($_POST['senha']);

$result = $conn->query("SELECT nome FROM usuarios WHERE email = '$email' AND senha = md5('$senha')");

if ($result) {
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['usuario'] = $row['nome'];
        $_SESSION['email'] = $email;
        $nome = $row['nome'];
        $msg = "Usuário $nome logado com sucesso!";
    } else {
        $msg = "Acesso inválido!";
    }
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
<?php require 'modals.php';?>
  <div class="drawer">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col">
      <!-- Navbar -->
      <?php require 'navbar.php';?>
      <!-- Page content here -->
      <div class="p-12 space-y-4">
        <p class="font-bold text-4xl underline decoration-emerald-900">Login</p>
        <p><?= $msg ?></p>
      </div>
    </div>
    <?php require 'sidebar.php';?>
  </div>
</body>
</html>