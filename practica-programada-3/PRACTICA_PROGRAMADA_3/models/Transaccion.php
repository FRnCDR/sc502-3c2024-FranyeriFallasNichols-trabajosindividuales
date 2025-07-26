<?php

require_once __DIR__.'/../config/database.php';

class Transaccion {

    private $conn;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->connect();

    }

    public function insertar($id, $descripcion, $monto) {
        $query = "INSERT INTO TRANSACCION (id, descripcion, monto) VALUES (:id, :descripcion, :monto)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':monto', $monto);
        return $stmt->execute();
    }

    public function obtenerTodas() {
        $query = "SELECT * FROM TRANSACCION";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}




?>