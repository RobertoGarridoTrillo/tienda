<?php

if (session_status() != 2) {
    session_start();
}

include_once "../includes/includesModeloVista.php";

$id = $_SESSION['id'];

$tienda = unserialize($_SESSION['tienda']) ?? array();
$carrito = $tienda->getCarrito($id);
$cliente = $tienda->getCliente($id);

//$tienda->setCarrito(new Carrito($id));

$ropas = $tienda->getRopas();
$ropasRef = [];

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    $ropasRef = $_GET;

    if (count($ropasRef) > 0) {

        foreach ($ropasRef as $indiceRopa => $ropaRef) {

            foreach ($ropas as $ropa) {

                if ($ropa->getReferencia() == $ropaRef) {

                    $carrito->restarPrecioTotal($ropa->getPrecio());
//                    $cliente->sumarSaldo($ropa->getPrecio());
                    $carrito->unsetRopaRef($indiceRopa);
                }
            }

        }
        $carrito->ordenarRopaRef();

        if (count($carrito->getRopasRef()) > 0) {

            $_SESSION['error'] = 5; # comprados varios productos

        } else {

            $_SESSION['error'] = 6; # carro vacio
        }

    } else {

        $_SESSION['error'] = 4; # carro vacio

    }

}


$_SESSION['tienda'] = serialize($tienda);

session_write_close();

header("location:../vista/cliente.php");
