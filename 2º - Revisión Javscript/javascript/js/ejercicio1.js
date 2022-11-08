function calcularImc() {
    var alturaIngresada = parseInt(document.getElementById('altura').value);
    var pesoIngresado = parseInt(document.getElementById('peso').value);
    var resultado = Math.round(pesoIngresado * 10 / Square) / 10;

    /*if (calcularImc < 11111111 || calcularImc > 99999999) {
        alert("El Número Ingresado debe ser de 8 Dígitos");
    } else {
        document.getElementById('resultado').innerHTML = resultado;
    }*/
}