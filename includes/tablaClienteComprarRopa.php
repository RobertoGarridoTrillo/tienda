<form action="../controlador/anadirRopa.php" method="get">
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
                    <th>Acción</th>
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
                    <td><input type="checkbox" name="ref{$ropa->getId()}" value="ref{$ropa->getId()}"></td>
                </tr>
            EOF;
        }
        echo <<<EOF
                <tr>
                    <td colspan="6"><input class="btn btn-warning float-end" type="submit" value="Añadir"></td>
                </tr>
                </tbody>
            </table>
        </fieldset>
    </form>
    EOF;

        ?>

