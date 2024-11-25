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
<div class="mx-2 flex-1 px-2">&lt;NotesCode&gt;</div>
    <div class="hidden flex-none lg:block">
        <ul class="menu menu-horizontal">
        <!-- Navbar menu content here -->
            <?php if (isset($_SESSION['usuario'])):?>
                <li><a><?= $_SESSION["usuario"] ?></a></li>
                <li>
                    <?php
                    $redirect = urlencode(basename($_SERVER['SCRIPT_NAME']));
                    echo '<a href="logoutUser.php?redirect=' . $redirect . '">Deslogar</a>';
                    ?>
                </li>
            <?php else:?>
                <li><a onclick="login_modal.showModal()">Login</a></li>
                <li><a onclick="create_login_modal.showModal()">Cadastro</a></li>
            <?php endif;?>
        </ul>
    </div>
</div>