<?php

if (session_status() != 2) {
    session_start();
}

$title = "Cliente";
include_once "../includes/includesModeloVista.php";
include_once "../includes/includesHtmlVista.php";
include_once "../includes/config.php";

$user = $_SESSION['user'] ?? "";
$id = $_SESSION['id'] ?? 0;
$error = $_SESSION['error'] ?? 0;

$tienda = unserialize($_SESSION['tienda']) ?? "";

$ropas = $tienda->getRopas();

$carrito = $tienda->getCarrito($id);
$ropasRef = $carrito->getRopasRef();

?>

    <h1>Bienvenido <?= $user ?></h1>

<?php

include_once "../includes/tablaClienteAnadirNav.php";
include_once "../includes/tablaClienteAnadirRopa.php";
include_once "../includes/tablaClienteBorrarRopa.php";

include_once "footer.php";

$_SESSION['tienda'] = serialize($tienda);

session_write_close();

