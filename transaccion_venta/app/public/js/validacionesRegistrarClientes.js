document.getElementById("id_registrar").disabled = true;

function validarCampo(campoId, valor) {
    const elementoCampo = document.getElementById(campoId);
    if (valor === "") {
        elementoCampo.classList.add("is-invalid");
        elementoCampo.classList.remove("is-valid");
    } else {
        elementoCampo.classList.remove("is-invalid");
        elementoCampo.classList.add("is-valid");
    }
}

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
    var act_inmediata = document.getElementById("id_activacion_inmediata").value;

    // Validar que todos los campos obligatorios estén llenos

    if (tipoDocumento === "2" && act_inmediata === "-1") {
        document.getElementById("id_activacion_inmediata").classList.add("is-invalid");
    } else if (tipoDocumento === "2" && act_inmediata !== "-1") {
        document.getElementById("id_activacion_inmediata").classList.remove("is-invalid");
        document.getElementById("id_activacion_inmediata").classList.add("is-valid");
    }
    if (nombres.length < 2) {
        document.getElementById("id_nombres").classList.add("is-invalid");
    } else if (nombres.length >= 2) {
        document.getElementById("id_nombres").classList.remove("is-invalid");
        document.getElementById("id_nombres").classList.add("is-valid");
    }
    if (apellidos.length < 2) {
        document.getElementById("id_apellidos").classList.add("is-invalid");
    } else if (apellidos.length >= 2) {
        document.getElementById("id_apellidos").classList.remove("is-invalid");
        document.getElementById("id_apellidos").classList.add("is-valid");
    }
    if (numeroDocumento.length === 0) {
        document.getElementById("id_numero_documento").classList.add("is-invalid");
    }
    if (telefono.length === 0) {
        document.getElementById("id_telefono").classList.add("is-invalid");
    }
    validarCampo("id_tipo_documento", tipoDocumento);
    validarCampo("id_nivel_uno", nivelUno);
    validarCampo("id_nivel_dos", nivelDos);
    validarCampo("id_nivel_tres", nivelTres);
    validarCampo("id_tipo_plan", tipoPlan);
    if (nivelTres && nivelDos && nivelUno && apellidos && nombres && numeroDocumento && tipoDocumento && tipoPlan && telefono) {
        // Si todos los campos están llenos, habilitar el botón
        document.getElementById("id_registrar").disabled = false;


    } else {


        document.getElementById("id_registrar").disabled = true;
    }
}
const telefonoInput = document.getElementById("id_telefono");

// Configurar el maxLength a 9
telefonoInput.maxLength = 9;

// Agregar evento de input al campo de teléfono
telefonoInput.addEventListener("input", function () {
    // Obtener el valor del campo id_telefono
    var telefonoValue = telefonoInput.value;

    // Eliminar cualquier caracter no numérico
    telefonoValue = telefonoValue.replace(/\D/g, '');

    // Limitar la longitud a maxLength
    telefonoValue = telefonoValue.slice(0, telefonoInput.maxLength);

    // Actualizar el valor del campo
    telefonoInput.value = telefonoValue;

    // Realizar la validación para el número de teléfono (máximo 9 dígitos)
    if (telefonoValue.length !== telefonoInput.maxLength) {
        // Mostrar el mensaje de error y marcar el campo como inválido
        document.getElementById("id_error_telefono").innerText = `El número de teléfono debe tener exactamente ${telefonoInput.maxLength} dígitos.`;
        telefonoInput.classList.add("is-invalid");
    } else {
        // Limpiar el mensaje de error y el estilo si la longitud es correcta
        document.getElementById("id_error_telefono").innerText = "";
        telefonoInput.classList.remove("is-invalid");
        telefonoInput.classList.add("is-valid");
    }
});

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
document.getElementById("id_activacion_inmediata").addEventListener("input", validarCampos);
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
        document.getElementById("id_numero_documento").classList.add("is-valid");
    }
});
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
        document.getElementById("id_nivel_dos").classList.add("is-invalid");
        document.getElementById("id_nivel_tres").classList.add("is-invalid");
    } else if (nivelUno === "2") {
        // Agregar opciones para nivel_dos si nivelUno es 2
        nivelDos.innerHTML += '<option value="1">No venta</option>';
        nivelDos.innerHTML += '<option value="2">No llamar</option>';
        nivelDos.innerHTML += '<option value="3">Llamada Vicio</option>';
        document.getElementById("id_nivel_dos").classList.add("is-invalid");
        document.getElementById("id_nivel_tres").classList.add("is-invalid");
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
        document.getElementById("id_nivel_tres").classList.add("is-invalid");
    } else if (nivelUno === "1" && nivelDosValue === "2") {
        nivelTres.innerHTML += '<option value="1">Renovación de equipo</option>';
        nivelTres.innerHTML += '<option value="2">Acepta upgrade + Renovación de equipo</option>';
        nivelTres.innerHTML += '<option value="3">Cliente interesado</option>';
        document.getElementById("id_nivel_tres").classList.add("is-invalid");
    } else if (nivelUno === "2" && nivelDosValue === "1") {
        nivelTres.innerHTML += '<option value="1">Corta llamada </option>';
        nivelTres.innerHTML += '<option value="2">Plan muy caro </option>';
        nivelTres.innerHTML += '<option value="3">Buzón </option>';
        document.getElementById("id_nivel_tres").classList.add("is-invalid");
    } else if (nivelUno === "2" && nivelDosValue === "2") {
        nivelTres.innerHTML += '<option value="1">Cliente no desea recibir llamadas </option>';
        document.getElementById("id_nivel_tres").classList.add("is-invalid");

    } else if (nivelUno === "2" && nivelDosValue === "3") {
        nivelTres.innerHTML += '<option value="1">Llamada vacía  </option>';
        document.getElementById("id_nivel_tres").classList.add("is-invalid");

    }
}

// Agregar eventos de cambio a los selects id_nivel_uno y id_nivel_dos
document.getElementById("id_nivel_uno").addEventListener("change", handleNivelUnoChange);
document.getElementById("id_nivel_dos").addEventListener("change", handleNivelDosChange);

// Llamar a la función handleNivelUnoChange al cargar la página para manejar el estado inicial
handleNivelUnoChange();