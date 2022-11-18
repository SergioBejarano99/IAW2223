$(document).ready(function () {
    $("#btn-modificado").click(function (e) {
        $("tr").removeClass 
    });

    $("#btn-original").click(function (e) {
        $("tr:even").css({"background":"white","font-family":""}); //Modifica las Filas Impares. (Fondo y Estilo de Fuente por Defecto).
        $("tr:odd").css({"background":"white","font-family":""}); //Modifica las Filas Pares. (Fondo y Estilo de Fuente por Defecto).
    });
});