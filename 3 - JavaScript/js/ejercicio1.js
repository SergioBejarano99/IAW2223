function comprobarAleatorio() {
    let numeroUsuario = document.getElementById('numeroUsuario').value;
    let numeroAleatorio = Math.floor((Math.random() * 6));
    let resultado = numeroAleatorio;

    document.getElementById('numeroAcertado').innerHTML = "";
    document.getElementById('numeroFallido').innerHTML = "";

    if ((numeroUsuario == "") || (numeroUsuario > 5)) {
        alert("Debes introducir un Número del 0 al 5");
    } else if (numeroUsuario == numeroAleatorio) {
        document.getElementById('resultado').innerHTML = "";
        document.getElementById('numeroAcertado').innerHTML = "CORRECTO";
    } else if (numeroUsuario != numeroAleatorio) {
        document.getElementById('numeroFallido').innerHTML = "FALLASTE";
        document.getElementById('resultado').innerHTML = "El Número era " + resultado + ".";
    }
}





/* © Sergio Bejarano Arroyo */