<?php

    class Database {

        private $host = "localhost";
        private $db_name = "PRACTICA3";
        private $username = "root";
        private $password = "(alfrapa.20)";

        public $conn;

        public function connect() {

            $this->conn = null;

            try{

                $this->conn = new PDO(

                    "mysql:host={$this->host};dbname={$this->db_name}",
                    $this->username,
                    $this->password

                );

                $this->conn->exec("set names utf8");

            }catch(PDOException $e){
                echo "Error de conexion".$e->getMessage(); 
            }

            return $this->conn;
        
        }


    }





?>