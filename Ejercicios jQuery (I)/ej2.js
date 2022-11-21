/* Rellena este fichero */
$(document).ready(function () {
    $("#btn-mostrar").click(function () {
        $("#encabezado, .pares").show();
    });

    $("#btn-ocultar").click(function () {
        $("#encabezado, .pares").hide();
    });
});