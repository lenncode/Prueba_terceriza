<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Clientes - Ventas</title>
    <script type="text/javascript" src="public/js/bootstrap5.min.js"></script>
    <link rel="stylesheet" href="public/css/bootstrap5.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="row">
    <div class="col-sm-3 btn btn-primary">
        <i class="bi bi-people-fill"></i>
        <span>Datos de Clientes</span>
    </div>
    <div class="col-sm-3">
        <a href="views/seguimientoVentas.php" class="btn btn-primary">
            <i class="bi bi-card-checklist"></i>
            <span>Seguimiento Ventas</span>
        </a>
    </div>
</div>
<div id="mensajeRegistroExitoso"></div>
<div class="container" style="margin-top: 1%">
    <div class="panel panel-default">
        <div class="panel-heading h3">Datos Clientes</div>
        <div class="panel-body">
            <p id="mensaje">Completa todos los campos para habilitar el botón de registro.</p>

            <form action="" id="id_form" method="post">
                <div class="col-md-12" style="margin-top: 2%">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label" for="id_telefono">Teléfono(*)</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-boxes"></i></span><input
                                        class="form-control" maxlength="9" type="tel" id="id_telefono"
                                        name="numero" autocomplete="off">
                            </div>
                            <div class="text-danger" id="id_error_telefono"></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label" for="id_tipo_plan">Tipo de Plan(*)</label>
                            <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-box2-heart-fill"></i></span> <select id="id_tipo_plan"
                                                                                          name="tipo_plan_id"
                                                                                          class='form-control'>
                                    <option value="">[Seleccione]</option>
                                    <option value="1">Ilimitado</option>
                                    <option value="2">Regular</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 2%">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label" for="id_tipo_documento">Tipo De Documento(*)</label>
                                <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-box2-heart-fill"></i></span> <select id="id_tipo_documento"
                                                                                          name="tipo_documento_id"
                                                                                          class='form-select'>
                                        <option value="">[Seleccione]</option>
                                        <option value="1">DNI</option>
                                        <option value="2">RUC</option>
                                        <option value="3">CE</option>
                                        <option value="4">Pasaporte</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" type="number" for="id_numero_documento">N&uacute;mero
                                    de Documento(*)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-boxes"></i></span><input
                                            class="form-control" type="text" id="id_numero_documento"
                                            name="numero_documento" autocomplete="off"
                                            disabled
                                    >
                                </div>
                                <span id="id_error_numero_documento" class="text-danger"></span>

                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label class="control-label" for="id_nombres">Nombres(*)</label>
                                <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-bar-chart-steps"></i></span> <input class="form-control"
                                                                                         type="text" id="id_nombres"
                                                                                         name="nombres"
                                    >
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" for="id_apellidos">Apellidos(*)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-people"></i></span><input
                                            class="form-control" type="text" id="id_apellidos"
                                            name="apellidos">
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label class="control-label" for="id_nivel_uno">Nivel 1(*)</label>
                                <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-box2-heart-fill"></i></span> <select id="id_nivel_uno"
                                                                                          name="nivel_1_id"
                                                                                          class='form-control'>
                                        <option value="">[Seleccione]</option>
                                        <option value="1">Contacto Efectivo</option>
                                        <option value="2">Contacto no efectivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" disabled="true" for="id_nivel_dos">Nivel 2(*)</label>
                                <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-box2-heart-fill"></i></span> <select id="id_nivel_dos"
                                                                                          name="nivel_2_id"
                                                                                          class='form-control'>
                                        <option value="">[Seleccione]</option>
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label class="control-label" disabled="" for="id_nivel_tres">Nivel 3(*)</label>
                                <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-box2-heart-fill"></i></span> <select id="id_nivel_tres"
                                                                                          name="nivel_3_id"
                                                                                          class='form-control'>
                                        <option value="">[Seleccione]</option>
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group col-md-6" id="id_nro_sn_div" style="display: none;">
                                <label class="control-label" for="id_nro_sn">Nro. SN(*)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-boxes"></i></span><input
                                            class="form-control" type="text" id="id_nro_sn"
                                            name="N_SN" autocomplete="off"
                                    >
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="id_activacion_inmediata_div" style="display: none;">
                                <label class="control-label" for="id_activacion_inmediata">Activaci&oacute;n
                                    Inmediata(*)</label>
                                <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-box2-heart-fill"></i></span> <select id="id_activacion_inmediata"
                                                                                          name="act_inmediata_id"
                                                                                          class='form-control'>
                                        <option value="-1">[Seleccione]</option>
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-md-12">
                                <label class="control-label" for="id_observaciones">Observaciones</label>
                                <div class="form-outline">
                            <textarea class="form-control" name="observaciones" id="id_observaciones"
                                      rows="4"></textarea>
                                </div>
                                <div class="text-right">
                                    <span class="valid-text pt-1" id="txaCount"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input id="id_registrar" type="submit" name="registroCliente"
                                       class="btn btn-primary  btn-block" value="Registrar">

                                <button id="id_salir" type="button"
                                        class="btn btn-secondary  btn-block">Cancelar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include("../config/ConnectionDB.php");
include("controllers/registroClienteController.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registroCliente"])) {

    // Recupera los valores del formulario
    $telefono = $_POST["numero"];
    $tipoSala = $_POST["tipo_plan_id"];
    $tipoDocumento = $_POST["tipo_documento_id"];
    $numeroDocumento = $_POST["numero_documento"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $nivelUno = $_POST["nivel_1_id"];
    $nivelDos = $_POST["nivel_2_id"];
    $nivelTres = $_POST["nivel_3_id"];
    $nroSn = $_POST["N_SN"];
    $activacionInmediata = $_POST["act_inmediata_id"];
    $observaciones = $_POST["observaciones"];

    // Instancia la clase RegistroCliente
    $registroCliente = new registroClienteController();

    // Registra el cliente
    $mensaje = $registroCliente->registrarCliente($telefono, $tipoSala, $tipoDocumento, $numeroDocumento, $nombres, $apellidos, $nivelUno, $nivelDos, $nivelTres, $nroSn, $activacionInmediata, $observaciones);

    // Muestra el mensaje resultante
    echo "<script type='text/javascript'>alert('$mensaje');</script>";

}
?>

<script type="text/javascript" src="public/js/validacionesRegistrarClientes.js"></script>


</body>
</html>