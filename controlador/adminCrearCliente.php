<?php

if (session_status() != 2) {
    session_start();
}

include_once "../includes/includesModeloVista.php";

$tienda = unserialize($_SESSION['tienda']) ?? array();


if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $user = $_REQUEST['user'] ?? "";
    $pass = $_REQUEST['pass'] ?? "";
    $nombre = $_REQUEST['nombre'] ?? "";
    $telefono = (int)$_REQUEST['telefono'] ?? "";
    $dinero = (int)$_REQUEST['dinero'] ?? 0;


    $tienda->setCliente(
        new Usuario($user, $pass, 2),
        new Cliente($nombre, $telefono, $dinero)
    );

    $_SESSION['tienda'] = serialize($tienda);

    session_write_close();
    header("location:../vista/admin.php");
    die();
}

session_write_close();

