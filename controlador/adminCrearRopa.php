<?php

if (session_status() != 2) {
    session_start();
}

include_once "../includes/includesModeloVista.php";

$tienda = unserialize($_SESSION['tienda']) ?? array();

$id = $_SESSION['id'] = 0;

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $nombre = $_REQUEST['nombreRopa'] ?? "";
    $precio = (int)$_REQUEST['precioRopa'] ?? "";
    $tipo = (int)$_REQUEST['tipoRopa'] ?? "";
    $referencia = $_REQUEST['referenciaRopa'] ?? "";

    $tienda->setRopa(new Ropa($nombre, $precio, $tipo, $referencia));

    $_SESSION['tienda'] = serialize($tienda);

    session_write_close();
    header("location:../vista/admin.php");
    die();
}

session_write_close();

