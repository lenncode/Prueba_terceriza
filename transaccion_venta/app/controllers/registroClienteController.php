<?php

class registroClienteController
{
    private $conn;

    public function __construct()
    {
        $conexionMySQL = new ConnectionDB();
        $this->conn = $conexionMySQL->getConexion();
    }

    public function registrarCliente($telefono, $tipoSala, $tipoDocumento, $numeroDocumento, $nombres, $apellidos, $nivelUno, $nivelDos, $nivelTres, $nroSn, $activacionInmediata, $observaciones)
    {
        $sql = "INSERT INTO cliente (telefono, tipo_plan_id, tipo_documento_id, numero_documento, nombres, apellidos, nivel_1_id, nivel_2_id,
                     nivel_3_id, n_sn, act_inmediata_id, observaciones) 
VALUES ('$telefono', '$tipoSala', '$tipoDocumento', '$numeroDocumento', '$nombres', '$apellidos', '$nivelUno', '$nivelDos', '$nivelTres', '$nroSn', '$activacionInmediata', '$observaciones')";


        $resultado = $this->conn->query($sql);

        if ($resultado !== false)  {
            return "Registro exitoso";
        } else {
            return "Error al registrar el cliente: " . implode(', ', $this->conn->errorInfo());
        }
    }

    public function cerrarConexion()
    {
        $this->conn->close();
    }
}
?>