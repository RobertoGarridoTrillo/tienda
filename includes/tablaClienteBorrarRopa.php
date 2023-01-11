<form action="../controlador/borrarRopa.php">
    <fieldset class="mt-4">
        <legend>Carrito</legend>

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

for ($j = 0; $j < count($ropasRef); $j++) {

    for ($i = 1; $i <= count($ropas); $i++) {

        if ($ropas[$i]->getReferencia() == $ropasRef[$j]) {
            $jj = $j + 1;
            echo <<<EOF
                <tr class="text-center">
                    <td>{$jj}</td>
                    <td>{$ropas[$i]->getNombre()}</td>
                    <td>{$ropas[$i]->getPrecio()}</td>
                    <td>{$ropas[$i]->getTipo()}</td>
                    <td>{$ropas[$i]->getReferencia()}</td>
                    <td><input 
                        type="checkbox" 
                        name="{$j}" 
                        value="{$ropas[$i]->getReferencia()}"
                        onfocus="clearError();"></td>
                    </td>
                </tr>
            EOF;

        }
    }
}


echo <<<EOF
                <tr class="text-center">
                    <th>Saldo</th>
                    <td>{$tienda->getClientes()[$id]->getSaldo()}</td>
                    <th>Gasto</th>
                    <td>{$carrito->getPrecioTotal()}</td>
                    <td>
                        <input class="btn btn-warning float-end" formaction="../controlador/comprarRopa.php" type="submit" value="Comprar">
                    </td>
                    <td>
                        <input class="btn btn-danger float-end" type="submit" value="Borrar">                        
                    </td>                    
                </tr>
                </tbody>
            </table>
        </fieldset>

EOF;
