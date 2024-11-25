<div class="drawer-side">
    <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="menu bg-base-200 min-h-full w-80 p-4">
    <!-- Sidebar content here -->
        <li><a href="index.php"><span class="p-1 material-icons-outlined">home</span>Pagina inicial</a></li>
        <li><a href="posts.php"><span class="p-1 material-icons-outlined">newspaper</span>Postagens</a></li>
        <?php if (isset($_SESSION['usuario'])):?>
            <li><a href="contact.php"><span class="p-1 material-icons-outlined">call</span>Contato</a></li>
        <?php endif;?>
        <li><a href="about.php"><span class="p-1 material-icons-outlined">info</span>Sobre</a></li>
    </ul>
</div>