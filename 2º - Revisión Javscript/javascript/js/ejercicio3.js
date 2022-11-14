function crearUsuario() {
    let correcto = true;
    let nombreFormulario = document.getElementById('nombre').value;
    let apellidoFormulario = document.getElementById('apellido').value;
    let emailFormulario = document.getElementById('email').value;
    let telefonoFormulario = document.getElementById('telefono').value;
    let dniFormulario = document.getElementById('dni').value;
    let letrasValidasDni = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
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

    if ((nombreFormulario == "") || (/^\s+$/.test(nombreFormulario))) {   //Expresión Regular para los Espacios.
        document.getElementById('faltaNombre').innerHTML = "Debes introducir tu Nombre.";
        correcto = false;
    }

    if ((apellidoFormulario == "") || (/^\s+$/.test(apellidoFormulario))) {   //Expresión Regular para los Espacios.
        document.getElementById('faltaApellido').innerHTML = "Debes introducir al menos un Apellido.";
        correcto = false;
    }

    if ((emailFormulario == "") || (/^\s+$/.test(emailFormulario))) {   //Expresión Regular para los Espacios.
        document.getElementById('faltaEmail').innerHTML = "Debes introducir una Dirección de Correo Electrónico Válida.";
        correcto = false;
    }

    if ((dniFormulario == "") || (dniFormulario.length == 0) || (!(/^\d{8}[A-Z]$/.test(dniFormulario)) || (dniFormulario.charAt(8)) != (letrasValidasDni[(dniFormulario.substring(0, 8)) % 23]))) { //Expresión Regular para los Espacios y para un DNI que sea real.
        document.getElementById('faltaDni').innerHTML = "El DNI que has intrdoucido no es Válido.";
        correcto = false;
    }

    if (!(/^\d{8}$/.test(pinFormulario))) {   //Expresión Regular que obliga 8 Dígitos. como Máximo y como Mínimo.
        document.getElementById('faltaPin').innerHTML = "El PIN debe ser de 8 Números.";
        correcto = false;
    }

    if (!(/^\d{8}$/.test(repetirPinFormulario))) {   //Expresión Regular que obliga 8 Dígitos. como Máximo y como Mínimo.
        document.getElementById('faltaRepetirPin').innerHTML = "El PIN debe ser de 8 Números.";
        correcto = false;
    }

    if (pinFormulario.length != repetirPinFormulario.length) {   //Comprueba que los Pines coinciden.
        document.getElementById('faltaRepetirPin').innerHTML = "El PIN no coincide";
        document.getElementById('faltaPin').innerHTML = "El PIN no coincide";
        correcto = false;
    }

    if (correcto == true) {
        alert(nombreFormulario.substring(0, 2) + apellidoFormulario.substring(0, 2) + telefonoFormulario.substring(telefonoFormulario.length - 3, telefonoFormulario.length));
    }
}





/* © Sergio Bejarano Arroyo */