$(document).ready(function () {
    $("#mostrarContenido").click(function (mostrarContenido) {
        mostrarContenido.preventDefault();
        $("#primerParrafo, #tercerParrafo").show();
    });

    $("#ocultarContenido").click(function (ocultarContenido) {
        ocultarContenido.preventDefault();
        $("#primerParrafo, #tercerParrafo").hide();
    });
});





/* © Sergio Bejarano Arroyo */