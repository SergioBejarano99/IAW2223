/* Rellena este fichero */
$(document).ready(function () {
    $("#btn-mostrar").click(function () {
        $("h1, p").show();
    });

    $("#btn-ocultar").click(function () {
        $("h1, p").hide();
    });
});