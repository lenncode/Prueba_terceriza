<?php

class ConnectionDB
{
    private $servername;
    private $username;
    private $password;
    private $database;
    private $conn;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "terceriza";
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connect();
    }

    private function connect()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->database}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("SET NAMES utf8");
            echo "Conexión MySQL exitosa";
        } catch (PDOException $e) {
            die("Conexión fallida: " . $e->getMessage());
        }
    }

    public function getConexion()
    {
        return $this->conn;
    }

    public function cerrarConexion()
    {
        $this->conn = null;
        echo "Conexión cerrada";
    }
}

// Uso de la clase
$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "terceriza";

$conexion = new ConnectionDB($servername, $username, $password, $database);

// Puedes acceder a la conexión utilizando $conexion->getConexion()

// Para cerrar la conexión cuando ya no la necesitas
// $conexion->cerrarConexion();
?>