<?php

if (session_status() != 2) {
    session_start();
}

include_once "../includes/includesModeloVista.php";

$id = $_SESSION['id'];

$tienda = unserialize($_SESSION['tienda']) ?? array();
$carrito = $tienda->getCarrito($id);
$cliente = $tienda->getCliente($id);

$ropas = $tienda->getRopas();
$ropasRef = [];

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    $ropasRef = $_GET;

    $saldo = $cliente->getSaldo();
    $precio = 0;

    foreach ($ropasRef as $ropaRef) {

        foreach ($ropas as $ropa) {

            if ($ropa->getReferencia() == $ropaRef) {
                $precio += $ropa->getPrecio();
            }
        }

    }

    if ($saldo - $precio >= 0 && $precio > 0) {

        foreach ($ropasRef as $indiceRopa => $ropaRef) {

            foreach ($ropas as $ropa) {

                if ($ropa->getReferencia() == $ropaRef) {

                    $carrito->sumarPrecioTotal($ropa->getPrecio());
                    $cliente->restarSaldo($ropa->getPrecio());
                    $carrito->setRopaRef($ropaRef);
                }
            }

        }

    } else {

        $_SESSION['error'] = 2;

    }
    if (count($ropasRef) == 0) {
        $_SESSION['error'] = 3;

    }
}

$tienda->setCarrito($carrito);

$_SESSION['tienda'] = serialize($tienda);

session_write_close();

header("location:../vista/cliente.php");
