function crearUsuario() {
    var nombreFormulario = document.getElementById('nombre').value; //Validado.
    var apellidoFormulario = document.getElementById('apellido').value;  //Validado
    var emailFormulario = document.getElementById('email').value;
    var telefonoFormulario = document.getElementById('telefono').value;
    var dniFormulario = document.getElementById('dni').value;
    var pinFormulario = document.getElementById('pin').value;
    var repetirPinFormulario = document.getElementById('repetirPin').value;
    var enviarFormulario = document.getElementById('enviarFormulario').value;

    if (nombreFormulario == null || nombreFormulario.length == 0) {
        document.getElementById('faltaNombre').innerHTML = "Debes introudcir tu Nombre.";
    } else if (apellidoFormulario == null || apellidoFormulario.length == 0) {
        document.getElementById('faltaApellido').innerHTML = "Debes introducir al menos un Apellido.";
    } else if (emailFormulario == null || emailFormulario.length == 0) {
        document.getElementById('faltaEmail').innerHTML = "Debes introducir una Dirección de Correo Electrónico Válida.";
    } else if (dniFormulario == null || dniFormulario.length == 0) {
        document.getElementById('faltaDni').innerHTML = "El DNI que has intrdoucido no es Válido.";
    } else if (!(/^\d{9}$/.test(pinFormularrio))) {
        document.getElementById('faltaPin').innerHTML = "El PIN debe ser de 8 Dígitos.";
    } else if (pinFormulario.length != repetirPinFormulario.length) {
        document.getElementById('faltaRepetirPin').innerHTML = "El PIN no coincide";
    } else {
        alert(nombreFormulario.substring(0, 2) + apellidoFormulario.substring(0, 2) + telefonoFormulario.substring(10, 6));
    }
}





/* © Sergio Bejarano Arroyo */