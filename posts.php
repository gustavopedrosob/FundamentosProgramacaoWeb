<?php
session_start();
$conn = new mysqli("localhost:3306", "root", "", "programacaoweb");
$result = $conn->query("SELECT * FROM postagens LIMIT 10;");
?>
<!DOCTYPE html>
<html lang="pt-BR">
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
                <?php if (isset($_SESSION["usuario"])):?>
                    <p class="font-bold text-4xl underline decoration-emerald-900">Adicionar postagem</p>
                    <form class="flex flex-col space-y-4" method="POST" action="addPost.php">
                        <input type="text" placeholder="Titulo" name="titulo" class="input input-bordered w-full" minlength="10" required/>
                        <textarea placeholder="Descrição" name="descricao" class="textarea textarea-bordered textarea-lg w-full" minlength="50" required></textarea>
                        <textarea placeholder="Código" name="codigo" class="textarea textarea-bordered textarea-lg w-full"></textarea>
                        <button class="btn btn-primary" type="submit">Adicionar</button>
                    </form>
                <?php endif;?>
                <p class="font-bold text-4xl underline decoration-emerald-900">Postagens</p>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="bg-base-300 p-12 rounded-xl space-y-4">
                        <?php if (isset($_SESSION["usuario"])):?>
                            <?php if ($row["email"] === $_SESSION["email"]): ?>
                                <div class="float-right">
                                    <?php echo '<a class="btn" href="editPost.php?id=' . $row["id"] . '">' ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                        </svg>
                                    </a>
                                    <?php echo '<a class="btn btn-error" href="deletePost.php?id=' . $row["id"] . '">' ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <p class="font-bold text-2xl"><?= $row["titulo"] ?></p>
                        <p class="text-xl"><?= $row["descricao"] ?></p>
                        <div class="mockup-code">
                            <pre><code><?= htmlspecialchars($row["codigo"]) ?></code></pre>
                        </div>
                        <div class="pt-12">
                            <p class="float-left"><?= $row["email"] ?></p>
                            <p class="float-right"><?= $row["data_insercao"] ?></p>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
        <?php 
          require 'sidebar.php';
        ?>
    </div>
</body>
</html>


