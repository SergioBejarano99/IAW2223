/* Rellena este fichero */
$(document).ready(function () {
    $("#btn-aumentar").click(function () { 
        $("#encabezado, .pares").css({"font-size" : "300%", "color" : "red"});
    });

    $("#btn-disminuir").click(function () { 
        $(".pares").css({"font-size" : "100%", "color" : "black"});
        $("#encabezado").css({"font-size" : "200%", "color" : "black"});
    });
});