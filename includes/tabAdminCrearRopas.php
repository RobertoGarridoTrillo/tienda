<div class="tab-pane fade" id="ropa">

    <fieldset class="mt-4">
        <legend>Crear Ropa</legend>
        <form action="../controlador/adminCrearRopa.php" method="get">

            <div class="mb-0">
                <label for="nombreRopa" class="form-label">Nombre de la ropa</label>
                <input type="text" class="form-control" name="nombreRopa" id="nombreRopa"
                       autocomplete="off" onfocus="clearError();" required><br>
            </div>
            <div class="mb-0">
                <label for="precioRopa" class="form-label">Precio</label>
                <input type="number" class="form-control" name="precioRopa" id="precioRopa"
                       autocomplete="off" onfocus="clearError();" required><br>
            </div>
            <div class="mb-0">
                <label for="tipoRopa" class="form-label">Tipo de prenda</label>
                <input type="text" class="form-control" name="tipoRopa" id="tipoRopa"
                       autocomplete="off" onfocus="clearError();" required><br>
            </div>
            <div class="mb-0">
                <label for="referenciaRopa" class="form-label">Referencia</label>
                <input type="text" class="form-control" name="referenciaRopa" id="referenciaRopa"
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
        <legend>Tabla Ropa</legend>
        <?php
        echo <<<EOF
            <table class="table table-striped">
                <thead>
                  <tr class="text-center">
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Tipo</th>
                    <th>Referencia</th>
                  </tr>
                </thead>
                <tbody>
            EOF;

        foreach ($ropas as $ropa) {
            echo <<<EOF
                <tr class="text-center">
                    <td>{$ropa->getId()}</td>
                    <td>{$ropa->getNombre()}</td>
                    <td>{$ropa->getPrecio()}</td>
                    <td>{$ropa->getTipo()}</td>
                    <td>{$ropa->getReferencia()}</td>
                </tr>
                EOF;
        }
        echo <<<EOF
                </tbody>
            </table>
            EOF;

        ?>
</div>