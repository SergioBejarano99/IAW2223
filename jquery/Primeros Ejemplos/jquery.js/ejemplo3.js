$(document).ready(function () {
    $("#mostrarContenido").click(function (mostrarContenido) {
        mostrarContenido.preventDefault();
        $(".parrafoRojo").show();
    });

    $("#ocultarContenido").click(function (ocultarContenido) {
        ocultarContenido.preventDefault();
        $(".parrafoRojo").hide();
    });
});





/* © Sergio Bejarano Arroyo */