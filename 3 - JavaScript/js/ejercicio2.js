var inicio = new Date().getTime();

function obtenerColorAleatorio() {
    let letters = '0123456789ABCDEF'.split('');
    let color = '#';
    let i = 0;

    for (i = 0; i < 6; i++) {
        color += letters[Math.round(Math.random() * 15)];
    }
    return color;
}

function aparecerForma() {
    let top = Math.random() * 400;
    let left = Math.random() * 400;
    let width = (Math.random() * 200) + 100;

    if (Math.random() > 0.5) {
        document.getElementById("forma").style.borderRadius = "50%";

    } else {
        document.getElementById("forma").style.borderRadius = "0%";
    }

    document.getElementById("forma").style.width = width + "px";
    document.getElementById("forma").style.height = width + "px";

    document.getElementById("forma").style.backgroundColor = obtenerColorAleatorio();

    document.getElementById("forma").style.top = top + "px";
    document.getElementById("forma").style.left = left + "px";

    document.getElementById("forma").style.display = "block";
    inicio = new Date().getTime();
}

function aparecerFormaDespuesRetraso() {
    setTimeout(aparecerForma, Math.random() * 2000);
}

aparecerFormaDespuesRetraso();

document.getElementById("forma").onclick = function () {
    let fin, diferencia;
    document.getElementById("forma").style.display = "none";
    fin = new Date().getTime();
    diferencia = (fin - inicio) / 1000;
    document.getElementById("tiempoReaccion").innerHTML = diferencia + "s";
    aparecerFormaDespuesRetraso();
}





/* © Sergio Bejarano Arroyo */