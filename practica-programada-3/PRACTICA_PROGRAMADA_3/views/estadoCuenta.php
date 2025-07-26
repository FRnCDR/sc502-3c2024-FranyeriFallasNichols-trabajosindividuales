<?php require_once __DIR__.'/partials/header.php'?>


<h2>Registrar Nueva Transacción</h2>
    <form method="POST">
        Id: <input type="number" name="id" required><br><br>
        Descripción: <input type="text" name="descripcion" required><br><br>
        Monto: <input type="number" name="monto" required><br><br>
        <button type="submit">Agregar</button>
    </form>

    <h2>Transacciones Registradas</h2>
    <ul>
        <?php
        $total = 0;
        foreach ($transacciones as $transaccion) {
            echo "<li>{$transaccion['descripcion']} - ₡" . number_format($transaccion['monto'], 2) . "</li>";
            $total += $transaccion['monto'];
        }

        $interes = $total * 0.026;
        $cashback = $total * 0.001;
        $montoFinal = $total + $interes - $cashback;

        echo "<p><strong>Total contado:</strong> ₡" . number_format($total, 2) . "</p>";
        echo "<p><strong>Interés 2.6%:</strong> ₡" . number_format($interes, 2) . "</p>";
        echo "<p><strong>Cashback 0.1%:</strong> ₡" . number_format($cashback, 2) . "</p>";
        echo "<p><strong>Monto final a pagar:</strong> ₡" . number_format($montoFinal, 2) . "</p>";

        $total = 0;
        $contenido = "ESTADO DE CUENTA\n\n";
        $contenido .= "Transacciones:\n";

        foreach ($transacciones as $transaccion) {
            $contenido .= "ID: {$transaccion['id']} | {$transaccion['descripcion']} | ₡" . number_format($transaccion['monto'], 2) . "\n";
            $total += $transaccion['monto'];
        }

        $interes = $total * 0.026;
        $cashback = $total * 0.001;
        $montoFinal = $total + $interes - $cashback;

        $contenido .= "\nMonto total: ₡" . number_format($total, 2);
        $contenido .= "\nInterés: ₡" . number_format($interes, 2);
        $contenido .= "\nCashback: ₡" . number_format($cashback, 2);
        $contenido .= "\nMonto final: ₡" . number_format($montoFinal, 2);
        $contenido .= "\n-------------------------------------------\n";

        file_put_contents("estado_cuenta.txt", $contenido);
        ?>
    </ul>

<?php require_once __DIR__.'/partials/footer.php'?>