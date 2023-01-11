<?php

session_start();

include_once "includes/includesModeloIndex.php";

$tienda = new Tienda();

$tienda->setAdmin(
    new Usuario("admin", "1234", 0, 1),
    new Admin("Roberto", 1));
$tienda->setCliente(
    new Usuario("cliente", "1234", 1, 2),
    new Cliente("Roberto", 634377418, 400));
$tienda->setRopa(new Ropa("pantalón", 100, "vaqueros", "ref1"));
$tienda->setRopa(new Ropa("camisa", 150, "franela", "ref2"));
$tienda->setRopa(new Ropa("jersey", 200, "cuello alto", "ref3"));
$tienda->setRopa(new Ropa("gorro", 250, "de lana", "ref4"));

$_SESSION['tienda'] = serialize($tienda);

session_write_close();


header("location:vista/login.php");
