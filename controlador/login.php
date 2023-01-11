<?php

if (session_status() != 2) {
    session_start();
}

include_once "../includes/includesModeloVista.php";

$tienda = unserialize($_SESSION['tienda']) ?? array();

$locations = [
    "../vista/admin.php",
    "../vista/cliente.php",
    "../vista/ropa.php"
];

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    $userRequest = $_REQUEST['user'] ?? "";
    $passRequest = $_REQUEST['pass'] ?? "";

    foreach ($tienda->getUsuarios() as $usuario) {


        $userSession = $usuario->getUser();
        $passSession = $usuario->getPass();
        $nivel = $usuario->getNivel();

        if ($userSession == $userRequest && $passSession == $passRequest) {

            $_SESSION['user'] = $usuario->getUser();
            $_SESSION['id'] = $usuario->getId();
            $_SESSION['tienda'] = serialize($tienda);

            session_write_close();
            header("location:" . $locations[$nivel]);
            die();

        }

    }

    $_SESSION['error'] = 1;

}

session_write_close();
header("location:../vista/login.php");
die();