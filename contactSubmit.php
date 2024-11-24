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
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
          <!-- Navbar -->
          <div class="navbar bg-base-300 w-full">
            <div class="flex-none">
              <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  class="inline-block h-6 w-6 stroke-current">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
              </label>
            </div>
            <div class="mx-2 flex-1 px-2">ExploraWeb</div>
            <div class="hidden flex-none lg:block">
              <ul class="menu menu-horizontal">
                <!-- Navbar menu content here -->
                <li><a>Login</a></li>
                <li><a>Cadastro</a></li>
              </ul>
            </div>
          </div>
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
          include 'sidebar.php';
        ?>
    </div>
    <script src="js/form.js"></script>
</body>
</html>
