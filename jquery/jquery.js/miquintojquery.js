$(document).ready(function () {
    $("#btn-modificado").click(function (e) {
        $("tr:even").css({"background":"yellow","font-family":"verdana"}); //Modifica las Filas Impares. (Fondo Amarillo y Estilo de Fuente Verdana).
        $("tr:odd").css({"background":"red","font-family":"verdana"}); //Modifica las Filas Pates. (Fondo Rojo y Estilo de Fuente Verdana).
    });

    $("#btn-original").click(function (e) {
        $("tr:even").css({"background":"white","font-family":""}); //Modifica las Filas Impares. (Fondo y Estilo de Fuente por Defecto).
        $("tr:odd").css({"background":"white","font-family":""}); //Modifica las Filas Pares. (Fondo y Estilo de Fuente por Defecto).
    });
});