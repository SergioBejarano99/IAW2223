function crearUsuario() {
    let correcto = true;
    let nombreFormulario = document.getElementById('nombre').value;
    let apellido1Formulario = document.getElementById('apellido1').value;
    let apellido2Formulario = document.getElementById('apellido2').value;
    let dniFormulario = document.getElementById('dni').value;
    let letrasValidasDni = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    let emailFormulario = document.getElementById('email').value;
    let contrasenaFormulario = document.getElementById('contrasena').value;
    let repiteContrasenaFormulario = document.getElementById('repiteContrasena').value;
    let condicionesFormulario = document.getElementById('condiciones').checked;
    let usuarioCreado = nombreFormulario.substring(0, 1) + apellido1Formulario.substring(0, 3) + apellido2Formulario.substring(0, 3) + dniFormulario.substring(dniFormulario.length - 3, dniFormulario.length);

    document.getElementById('faltaNombre').innerHTML = " ";
    if ((nombreFormulario == "") || (/^\s+$/.test(nombreFormulario))) {
        document.getElementById('faltaNombre').innerHTML = "El campo Nombre es necesario para completar el formulario.";
        correcto = false;
    }

    document.getElementById('faltaApellido1').innerHTML = " ";
    if ((apellido1Formulario == "") || (/^\s+$/.test(apellido1Formulario))) {
        document.getElementById('faltaApellido1').innerHTML = "El campo Apellido1 es necesario para completar el formulario.";
        correcto = false;
    }

    document.getElementById('faltaApellido2').innerHTML = " ";
    if ((apellido2Formulario == "") || (/^\s+$/.test(apellido2Formulario))) {
        document.getElementById('faltaApellido2').innerHTML = "El campo Apellido2 es necesario para completar el formulario.";
        correcto = false;
    }

    document.getElementById('faltaDni').innerHTML = " ";
    if ((dniFormulario == "") || (dniFormulario.length == 0) || (!(/^\d{8}[A-Z]$/.test(dniFormulario)) || (dniFormulario.charAt(8)) != (letrasValidasDni[(dniFormulario.substring(0, 8)) % 23]))) {
        document.getElementById('faltaDni').innerHTML = "El campo DNI es necesario para completar el formulario o el DNI que ha introducido no válido.";
        correcto = false;
    }

    document.getElementById('faltaEmail').innerHTML = " ";
    if ((emailFormulario == "") || (/^\s+$/.test(emailFormulario))/* || (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(emailFormulario))*/) {
        document.getElementById('faltaEmail').innerHTML = "El campo Email es necesario para completar el formulario o el Email que ha introducido no es válido.";
        correcto = false;
    }

    document.getElementById('faltaContrasena').innerHTML = " ";
    if (!(/^\d{8}$/.test(contrasenaFormulario))) {
        document.getElementById('faltaContrasena').innerHTML = "La Contraseña debe ser de al menos 8 Carácteres.";
        correcto = false;
    }

    document.getElementById('contrasenasDiferentes').innerHTML = " ";
    if (contrasenaFormulario.length != repiteContrasenaFormulario.length) {
        document.getElementById('contrasenasDiferentes').innerHTML = "Las Contraseñas no coinciden.";
        correcto = false;
    }

    if (condicionesFormulario == false) {
        document.getElementById('faltaTerminos').innerHTML = "Debes aceptar los términos.";
        correcto = false;
    } else {
        correcto = true;
    }

    if (correcto == true) {
        document.getElementById('usuarioCreado').innerHTML = usuarioCreado.toLowerCase();
    }
}





/* © Sergio Bejarano Arroyo */