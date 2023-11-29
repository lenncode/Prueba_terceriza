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
        <div class="panel-heading">Datos Clientes</div>
        <div class="panel-body">
            <p id="mensaje">Completa todos los campos para habilitar el botón de registro.</p>

            <form action="" id="id_form" method="post">
                <div class="col-md-12" style="margin-top: 2%">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label" for="id_telefono">Teléfono(*)</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-boxes"></i></span><input
                                        class="form-control" type="text" id="id_telefono"
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
                                <label class="control-label" for="id_numero_documento">N&uacute;mero
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
                        <div class="row" >

                            <div class="form-group col-md-6" id="id_nro_sn_div" style="display: none;">
                                <label class="control-label" for="id_nro_sn">Nro. SN(*)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-boxes"></i></span><input
                                            class="form-control" type="text" id="id_nro_sn"
                                            name="N_SN" autocomplete="off"
                                    >
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="id_activacion_inmediata_div" style="display: none;" >
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

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registroCliente"])) {
    // Conexión a la base de datos (modifica los detalles según tu configuración)


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
    echo "<div class='alert'>" . $mensaje . "</div>";

}
?>
</div>
</div>
</div>
<script type="text/javascript">
    // Función para manejar el cambio en el select id_nivel_uno
    function handleNivelUnoChange() {
        var nivelUno = document.getElementById("id_nivel_uno").value;
        var nivelDos = document.getElementById("id_nivel_dos");
        var nivelTres = document.getElementById("id_nivel_tres");

        // Limpiar los selects nivel_dos y nivel_tres
        nivelDos.innerHTML = '<option value="">[Seleccione]</option>';
        nivelTres.innerHTML = '<option value="">[Seleccione]</option>';

        // Mostrar opciones según el valor seleccionado en id_nivel_uno
        if (nivelUno === "1") {
            // Agregar opciones para nivel_dos si nivelUno es 1
            nivelDos.innerHTML += '<option value="1">Venta</option>';
            nivelDos.innerHTML += '<option value="2">Agendado</option>';
        } else if (nivelUno === "2") {
            // Agregar opciones para nivel_dos si nivelUno es 2
            nivelDos.innerHTML += '<option value="1">No venta</option>';
            nivelDos.innerHTML += '<option value="2">No llamar</option>';
            nivelDos.innerHTML += '<option value="3">Llamada Vicio</option>';
        }
    }

    // Función para manejar el cambio en el select id_nivel_dos
    function handleNivelDosChange() {

        var nivelUno = document.getElementById("id_nivel_uno").value;
        var nivelDos = document.getElementById("id_nivel_dos");
        var nivelTres = document.getElementById("id_nivel_tres");

        // Limpiar el select nivel_tres
        nivelTres.innerHTML = '<option value="">[Seleccione]</option>';

        // Mostrar opciones según el valor seleccionado en id_nivel_dos
        var nivelDosValue = nivelDos.value;
        if (nivelUno === "1" && nivelDosValue === "1") {
            nivelTres.innerHTML += '<option value="1">Acepta upgrade</option>';
        } else if (nivelUno === "1" && nivelDosValue === "2") {
            nivelTres.innerHTML += '<option value="1">Renovación de equipo</option>';
            nivelTres.innerHTML += '<option value="2">Acepta upgrade + Renovación de equipo</option>';
            nivelTres.innerHTML += '<option value="3">Cliente interesado</option>';
        } else if (nivelUno === "2" && nivelDosValue === "1") {
            nivelTres.innerHTML += '<option value="1">Corta llamada </option>';
            nivelTres.innerHTML += '<option value="2">Plan muy caro </option>';
            nivelTres.innerHTML += '<option value="3">Buzón </option>';
        } else if (nivelUno === "2" && nivelDosValue === "2") {
            nivelTres.innerHTML += '<option value="1">Cliente no desea recibir llamadas </option>';

        } else if (nivelUno === "2" && nivelDosValue === "3") {
            nivelTres.innerHTML += '<option value="1">Llamada vacía  </option>';

        }
    }

    // Agregar eventos de cambio a los selects id_nivel_uno y id_nivel_dos
    document.getElementById("id_nivel_uno").addEventListener("change", handleNivelUnoChange);
    document.getElementById("id_nivel_dos").addEventListener("change", handleNivelDosChange);

    // Llamar a la función handleNivelUnoChange al cargar la página para manejar el estado inicial
    handleNivelUnoChange();
</script>
<script type="text/javascript">
    // Función para manejar el cambio en el select id_tipo_documento
    function handleTipoDocumentoChange() {
        var tipoDocumento = document.getElementById("id_tipo_documento").value;
        var activacionInmediata = document.getElementById("id_activacion_inmediata_div");
        var nroSn = document.getElementById("id_nro_sn_div");

        // Restablecer la visibilidad de ambos divs
        activacionInmediata.classList.add("hidden");
        nroSn.classList.add("hidden");

        // Mostrar los divs según el valor seleccionado en id_tipo_documento
        if (tipoDocumento === "1") {
            nroSn.classList.remove("hidden");
        } else if (tipoDocumento === "2") {
            activacionInmediata.classList.remove("hidden");
        }
        // Puedes agregar más condiciones según tus necesidades para los otros valores de id_tipo_documento
    }

    // Agregar un evento de cambio al select id_tipo_documento
    document.getElementById("id_tipo_documento").addEventListener("change", handleTipoDocumentoChange);

    // Llamar a la función handleTipoDocumentoChange al cargar la página para manejar el estado inicial
    handleTipoDocumentoChange();
</script>
<script type="text/javascript">
    document.getElementById("id_tipo_documento").addEventListener("change", function () {
        var tipoDocumentoValue = document.getElementById("id_tipo_documento").value;
        var numeroDocumentoInput = document.getElementById("id_numero_documento");
        var inmediata = document.getElementById("id_activacion_inmediata_div");
        var nro_sn = document.getElementById("id_nro_sn_div");


        document.getElementById("id_error_numero_documento").innerText = "";
        numeroDocumentoInput.classList.remove("is-invalid");
        // Limpiar el contenido del campo
        numeroDocumentoInput.value = "";

        if (tipoDocumentoValue === "") {
            // Si el tipo de documento es vacío, deshabilitar el campo y limpiar el contenido
            numeroDocumentoInput.disabled = true;
            numeroDocumentoInput.value = "";
            nro_sn.style.display = "none";
            inmediata.style.display = "none";
        } else {
            // Si el tipo de documento no es vacío, habilitar el campo
            numeroDocumentoInput.disabled = false;

            // Establecer la longitud máxima según el tipo de documento seleccionado
            if (tipoDocumentoValue === "1") {
                numeroDocumentoInput.maxLength = 8;
                nro_sn.style.display = "block";
                inmediata.style.display = "none";
            } else if (tipoDocumentoValue === "2") {
                numeroDocumentoInput.maxLength = 9;
                nro_sn.style.display = "none";
                inmediata.style.display = "block";
            } else if (tipoDocumentoValue === "3") {
                nro_sn.style.display = "none";
                numeroDocumentoInput.maxLength = 11;
                inmediata.style.display = "none";
            } else if (tipoDocumentoValue === "4") {
                nro_sn.style.display = "none";
                numeroDocumentoInput.maxLength = 20;
                inmediata.style.display = "none";
            }
        }
    });


    document.getElementById("id_numero_documento").addEventListener("input", function () {
        // Obtener el valor del campo id_numero_documento
        var numeroDocumentoValue = document.getElementById("id_numero_documento").value;

        // Obtener el valor seleccionado en id_tipo_documento
        var tipoDocumentoValue = document.getElementById("id_tipo_documento").value;

        // Realizar la validación según el tipo de documento seleccionado
        if (tipoDocumentoValue === "1" && numeroDocumentoValue.length !== 8) {
            // Mostrar el mensaje de error y marcar el campo como inválido
            document.getElementById("id_error_numero_documento").innerText = "El DNI debe tener 8 dígitos.";
            document.getElementById("id_numero_documento").classList.add("is-invalid");
        } else if (tipoDocumentoValue === "2" && numeroDocumentoValue.length !== 9) {
            document.getElementById("id_error_numero_documento").innerText = "El RUC debe tener 9 dígitos.";
            document.getElementById("id_numero_documento").classList.add("is-invalid");
        } else if (tipoDocumentoValue === "3" && numeroDocumentoValue.length !== 11) {
            document.getElementById("id_error_numero_documento").innerText = "El CE debe tener 11 dígitos.";
            document.getElementById("id_numero_documento").classList.add("is-invalid");
        } else if (tipoDocumentoValue === "4" && numeroDocumentoValue.length <= 11) {
            document.getElementById("id_error_numero_documento").innerText = "El Pasaporte debe tener 12 o más dígitos.";
            document.getElementById("id_numero_documento").classList.add("is-invalid");
        } else {
            // Limpiar el mensaje de error y el estilo si la longitud es correcta
            document.getElementById("id_error_numero_documento").innerText = "";
            document.getElementById("id_numero_documento").classList.remove("is-invalid");
        }
    });
</script>
<script type="text/javascript">
    document.getElementById("id_telefono").addEventListener("input", function () {
        // Obtener el valor del campo id_telefono
        var telefonoValue = document.getElementById("id_telefono").value;

        // Realizar la validación para el número de teléfono (máximo 9 dígitos)
        if (telefonoValue.length !== 9) {
            // Mostrar el mensaje de error y marcar el campo como inválido
            document.getElementById("id_error_telefono").innerText = "El número de teléfono no debe exceder los 9 dígitos.";
            document.getElementById("id_telefono").classList.add("is-invalid");
        } else {
            // Limpiar el mensaje de error y el estilo si la longitud es correcta
            document.getElementById("id_error_telefono").innerText = "";
            document.getElementById("id_telefono").classList.remove("is-invalid");
        }
    });
</script>
<script>
    document.getElementById("id_registrar").disabled = true;

    // Función para validar los campos y activar/desactivar el botón
    function validarCampos() {

        // Obtener valores de los campos
        var nivelTres = document.getElementById("id_nivel_tres").value;
        var nivelDos = document.getElementById("id_nivel_dos").value;
        var nivelUno = document.getElementById("id_nivel_uno").value;
        var apellidos = document.getElementById("id_apellidos").value;
        var nombres = document.getElementById("id_nombres").value;
        var numeroDocumento = document.getElementById("id_numero_documento").value;
        var tipoDocumento = document.getElementById("id_tipo_documento").value;
        var tipoPlan = document.getElementById("id_tipo_plan").value;
        var telefono = document.getElementById("id_telefono").value;

        // Validar que todos los campos obligatorios estén llenos
        if (nivelTres && nivelDos && nivelUno && apellidos && nombres && numeroDocumento && tipoDocumento && tipoPlan && telefono) {
            // Si todos los campos están llenos, habilitar el botón
            document.getElementById("id_registrar").disabled = false;
        } else {
            // Si algún campo está vacío, deshabilitar el botón
            document.getElementById("id_registrar").disabled = true;
        }
    }

    // Vincular la función de validación a los eventos de cambio de los campos de entrada
    document.getElementById("id_nivel_tres").addEventListener("input", validarCampos);
    document.getElementById("id_nivel_dos").addEventListener("input", validarCampos);
    document.getElementById("id_nivel_uno").addEventListener("input", validarCampos);
    document.getElementById("id_apellidos").addEventListener("input", validarCampos);
    document.getElementById("id_nombres").addEventListener("input", validarCampos);
    document.getElementById("id_numero_documento").addEventListener("input", validarCampos);
    document.getElementById("id_tipo_documento").addEventListener("input", validarCampos);
    document.getElementById("id_tipo_plan").addEventListener("input", validarCampos);
    document.getElementById("id_telefono").addEventListener("input", validarCampos);
</script>
</body>
</html>