<?php

if (session_status() != 2) {
    session_start();
}
$title = "Admin";
$error = $_SESSION['error'] ?? 0;

include_once "../includes/includesModeloVista.php";
include_once "../includes/includesHtmlVista.php";
include_once "../includes/config.php";

$tienda = unserialize($_SESSION['tienda']) ?? "";
$usuarios = $tienda->getUsuarios();
$clientes = $tienda->getClientes();
$ropas = $tienda->getRopas();

$user = $_SESSION['user'] ?? "";


?>
    <h1 class="mb-0">Bienvenido <?= $user ?></h1>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#cliente" data-bs-toggle="tab">Crear Cliente</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#ropa" data-bs-toggle="tab">Crear Ropa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Home</a>
        </li>
    </ul>

    <div class="tab-content">

        <?php
        include_once "../includes/tabAdminCrearClientes.php";
        include_once "../includes/tabAdminCrearRopas.php";
        ?>

    </div>

<?php

include_once "footer.php";

session_write_close();
