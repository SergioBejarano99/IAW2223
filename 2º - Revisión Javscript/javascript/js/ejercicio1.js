function calcularImc() {
    let alturaIngresada = parseInt(document.getElementById('altura').value);
    let pesoIngresado = parseInt(document.getElementById('peso').value);
    let imc = pesoIngresado / alturaIngresada * alturaIngresada;

    if (imc < 18.5) {
        alert('Tu IMC es de ' + Math.round(imc) + ' lo que significa que tienes un Peso inferior al nomral');
    } else if (imc < 24.9) {
        alert('Tu IMC es de ' + Math.round(imc) + ' lo que significa que tienes un Peso es Normal');
    } else if (imc < 29.9) {
        alert('Tu IMC es de ' + Math.round(imc) + ' lo que significa que tienes un Peso superior al normal');
    } else {
        alert('Tu IMC es de ' + Math.round(imc) + ' lo que significa que tienes Obesidad');
    }

}





/* © Sergio Bejarano Arroyo */