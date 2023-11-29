<?php
include("../../config/ConnectionDB.php");
class listarVentasController
{
    private $conn;

    public function __construct()
    {
        $conexionMySQL = new ConnectionDB();
        $this->conn = $conexionMySQL->getConexion();
    }

    public function obtenerVentas()
    {
        $sql = $this->conn->query("SELECT * FROM ventas v INNER JOIN estado_venta es ON v.id_estado_venta = es.id
                                            INNER JOIN cliente c ON c.id_cliente = v.id_cliente");

        $ventas = array();

        while ($resultado = $sql->fetch(PDO::FETCH_ASSOC)) {
            $ventas[] = $resultado;
        }

        return $ventas;
    }
    public function obtenerVentasPorFecha($fechaInicio, $fechaFin)
    {
        // Utiliza parámetros preparados para evitar inyecciones SQL
        $sql = $this->conn->prepare("SELECT * FROM ventas v 
                                     INNER JOIN estado_venta es ON v.id_estado_venta = es.id
                                     INNER JOIN cliente c ON c.id_cliente = v.id_cliente
                                     WHERE v.fechaRegistro BETWEEN :fechaInicio AND :fechaFin");

        $sql->bindParam(':fechaInicio', $fechaInicio);
        $sql->bindParam(':fechaFin', $fechaFin);

        $sql->execute();

        $ventas = array();

        while ($resultado = $sql->fetch(PDO::FETCH_ASSOC)) {
            $ventas[] = $resultado;
        }

        return $ventas;
    }
}
