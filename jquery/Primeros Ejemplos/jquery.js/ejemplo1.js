$(document).ready(function () {
    $("#mostrarContenido").click(function (mostrarContenido) {
        mostrarContenido.preventDefault();
        $("p").show();
    });

    $("#ocultarContenido").click(function (ocultarContenido) {
        ocultarContenido.preventDefault();
        $("p").hide();
    });
});





/* © Sergio Bejarano Arroyo */