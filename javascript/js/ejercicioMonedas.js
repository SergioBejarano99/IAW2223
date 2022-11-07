function cambioEuro() {
    var valor = parseInt(document.getElementById('cantidadIngresada').value);
    var resultado = valor*1;

    document.getElementById('resultado').innerHTML = resultado;
}

function cambioDolar() {
    var valor = parseInt(document.getElementById('cantidadIngresada').value);
    var resultado = valor*0.99;

    document.getElementById('resultado').innerHTML = resultado;
}




/* © Sergio Bejarano Arroyo */