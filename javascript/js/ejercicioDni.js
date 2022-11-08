function calcularLetraDni() {
    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
    var numeroIngresado = parseInt(document.getElementById('numeroIngresado').value);
    var resultado = letras[numeroIngresado % 23];

    if (numeroIngresado < 11111111 || numeroIngresado > 99999999) {
        alert("El Número Ingresado debe ser de 8 Dígitos");
    } else {
        document.getElementById('resultado').innerHTML = resultado;
    }
}





/* © Sergio Bejarano Arroyo */