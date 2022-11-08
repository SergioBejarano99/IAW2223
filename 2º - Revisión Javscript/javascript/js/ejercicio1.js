function calcularImc() {
    var alturaIngresada = parseInt(document.getElementById('altura').value);
    var pesoIngresado = parseInt(document.getElementById('peso').value);
    var imc = pesoIngresado / Math.pow((alturaIngresada / 100), 2);

    if (imc < 18.5) {
        alert('Tu IMC es de ' + Math.round(imc) + ' lo que significa que tienes un Peso inferior al nomral');
    } else if (imc >= 18.5 && imc <= 24.9) {
        alert('Tu IMC es de ' + Math.round(imc) + ' lo que significa que tienes un Peso es Normal');
    } else if (imc >= 25.0 && imc <= 29.9) {
        alert('Tu IMC es de ' + Math.round(imc) + ' lo que significa que tienes un Peso superior al normal');
    } else if (imc > 30.0) {
        alert('Tu IMC es de ' + Math.round(imc) + ' lo que significa que tienes Obesidad');
    }

}





/* © Sergio Bejarano Arroyo */