function cambioEuro() {
    var valor = parseInt(document.getElementById('cantidadIngresada').value);
    var resultado = 0;
    var euro = 4.85;

    resultado = valor / euro;

    document.getElementById('resultado').innerHTML = resultado;
}

function cambioDolar() {
    var valor = parseInt(document.getElementById('cantidadIngresada').value);
    var resultado = 0;
    var dolar = 4.11;

    resultado = valor / dolar;

    document.getElementById('resultado').innerHTML = resultado;
}




                    /* © Sergio Bejarano Arroyo */