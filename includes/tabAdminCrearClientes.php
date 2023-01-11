<div class="tab-pane fade show active" id="cliente">

    <fieldset class="mt-4">
        <legend>Crear Cliente</legend>
        <form action="../controlador/adminCrearCliente.php" method="get">

            <div class="mb-0">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control" name="user" id="user"
                       autocomplete="off" onfocus="clearError();" required><br>
            </div>
            <div class="mb-0">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="pass"
                       autocomplete="off" onfocus="clearError();" required><br>
            </div>
            <div class="mb-0">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre"
                       autocomplete="off" onfocus="clearError();" required><br>
            </div>
            <div class="mb-0">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono"
                       autocomplete="off" onfocus="clearError();" required><br>
            </div>
            <div class="mb-0">
                <label for="dinero" class="form-label">Dinero</label>
                <input type="number" class="form-control" name="dinero" id="dinero"
                       autocomplete="off" onfocus="clearError();" required><br>
            </div>
            <input class="btn btn-warning" type="submit"><br>

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
    ?>

    <fieldset class="mt-4">
        <legend>Tabla Cliente</legend>
        <?php
        echo <<<EOF
            <table class="table table-striped">
                <thead>
                  <tr class="text-center">
                    <th>Id</th>
                    <th>User</th>
                    <th>Pass</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Dinero</th>
                  </tr>
                </thead>
                <tbody>
            EOF;


        foreach ($clientes as $key => $cliente) {
            echo <<<EOF
                <tr class="text-center">
                    <td>{$cliente->getId()}</td>
                    <td>{$usuarios[$key]->getUser()}</td>
                    <td>{$usuarios[$key]->getPass()}</td>
                    <td>{$cliente->getNombre()}</td>
                    <td>{$cliente->getTelefono()}</td>
                    <td>{$cliente->getSaldo()}</td>
                </tr>
                EOF;
        }
        echo <<<EOF
                </tbody>
            </table>
            EOF;

        ?>
    </fieldset>
</div>