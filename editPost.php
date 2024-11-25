<?php
session_start();
require 'checkAuthentication.php';
$conn = new mysqli("localhost:3306", "root", "", "programacaoweb");

$id = $conn->real_escape_string($_GET['id']);

$result = $conn->query("SELECT * FROM postagens WHERE id = $id;");
$row = $result->fetch_assoc();

if ($row["email"] !== $_SESSION["email"]) {
    header('Location: index.php');
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-BR" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
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
                <p class="font-bold text-4xl underline decoration-emerald-900">Editar postagem</p>
                <?php echo '<form class="flex flex-col space-y-4" method="POST" action="editPostSubmit.php?id=' . $_GET["id"] . '">'?>
                    <?php echo '<input type="text" placeholder="Titulo" name="titulo" class="input input-bordered w-full" minlength="10" value="' . $row["titulo"] . '" required/>' ?>
                    <textarea placeholder="Descrição" name="descricao" class="textarea textarea-bordered textarea-lg w-full" minlength="50" required><?= $row["descricao"]?></textarea>
                    <textarea placeholder="Código" name="codigo" class="textarea textarea-bordered textarea-lg w-full"><?= $row["codigo"]?></textarea>
                    <button class="btn btn-primary" type="submit">Editar</button>
                </form>
            </div>
        </div>
        <?php 
          require 'sidebar.php';
        ?>
    </div>
</body>
</html>


