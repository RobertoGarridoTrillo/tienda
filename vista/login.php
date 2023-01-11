<?php

if (session_status() != 2) {
    session_start();
}

$title = "Tienda de Ropa";
$error = $_SESSION['error'] ?? 0;

include_once "../includes/includesModeloVista.php";
include_once "../includes/includesHtmlVista.php";
include_once "../includes/config.php";


?>
    <h1 class="mb-3">Bienvenido a <?= $title ?></h1>

    <fieldset>
        <legend>Login</legend>
        <form action="../controlador/login.php" method="get">

            <div class="mb-3">
                <label for="name" class="form-label">User</label>
                <input type="text" class="form-control" name="user" id="name" autocomplete="off"
                       onfocus="clearError();" required><br>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="pass" autocomplete="off"
                       onfocus="clearError();" required><br>
            </div>
            <input class="btn btn-primary" type="submit"><br>
        </form>
    </fieldset>
    <br>
<?php

if ($error != 0) {
    $_SESSION['error'] = 0;
    ?>
    <p class="error" id="error"><?= ERROR[$error] ?></p><?php
} else {
    ?>
    <p class="hidden" id="error"><?= ERROR[$error] ?></p>
    <?php
}

include_once "footer.php";




