<?php

require_once __DIR__ . '/../models/Transaccion.php';

class TransaccionController {

    public function index() {
        $modelo = new Transaccion();

        // Si se envió el formulario con una transacción nueva
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $id = $_POST['id'];
            $descripcion = $_POST['descripcion'];
            $monto = $_POST['monto'];
            $modelo->insertar($id, $descripcion, $monto);
        }

        $transacciones = $modelo->obtenerTodas();

        // Cargar la vista
        require __DIR__ . '/../views/estadoCuenta.php';
    }

}
