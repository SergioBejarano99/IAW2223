function crearUsuario() {
    let correcto = true;
    let nombreFormulario = document.getElementById('nombre').value; //Validado.
    let apellidoFormulario = document.getElementById('apellido').value;  //Validado
    let emailFormulario = document.getElementById('email').value;
    let telefonoFormulario = document.getElementById('telefono').value;
    let dniFormulario = document.getElementById('dni').value;
    let pinFormulario = document.getElementById('pin').value;
    let repetirPinFormulario = document.getElementById('repetirPin').value;
    let enviarFormulario = document.getElementById('enviarFormulario').value;

    document.getElementById('faltaNombre').innerHTML = " ";
    document.getElementById('faltaApellido').innerHTML = " ";
    document.getElementById('faltaEmail').innerHTML = " ";
    document.getElementById('faltaEmail').innerHTML = " ";
    document.getElementById('faltaDni').innerHTML = " ";
    document.getElementById('faltaPin').innerHTML = " ";
    document.getElementById('faltaRepetirPin').innerHTML = " ";

    if (nombreFormulario == "") {
        document.getElementById('faltaNombre').innerHTML = "Debes introducir tu Nombre.";
        correcto = false;
    }
    if (apellidoFormulario == null || apellidoFormulario.length == 0) {
        document.getElementById('faltaApellido').innerHTML = "Debes introducir al menos un Apellido.";
        correcto = false;
    }
    if (emailFormulario == null || emailFormulario.length == 0) {
        document.getElementById('faltaEmail').innerHTML = "Debes introducir una Dirección de Correo Electrónico Válida.";
        correcto = false;
    }
    if (dniFormulario == null || dniFormulario.length == 0) {
        document.getElementById('faltaDni').innerHTML = "El DNI que has intrdoucido no es Válido.";
        correcto = false;
    }
    if (!(/^\d{8}$/.test(pinFormulario))) {
        document.getElementById('faltaPin').innerHTML = "El PIN debe ser de 8 Dígitos.";
        correcto = false;
    }
    if (pinFormulario.length != repetirPinFormulario.length) {
        document.getElementById('faltaRepetirPin').innerHTML = "El PIN no coincide";
        correcto = false;
    }
    if (correcto == true) {
        alert(nombreFormulario.substring(0, 2) + apellidoFormulario.substring(0, 2) + telefonoFormulario.substring(10, 6));
    }
}





/* © Sergio Bejarano Arroyo */