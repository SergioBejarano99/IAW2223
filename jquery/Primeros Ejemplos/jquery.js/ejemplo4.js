$(document).ready(function () {
    $("#cssOriginal").click(function (cssOriginal) {
        cssOriginal.preventDefault();
        $("#primerParrafo").css("color", "black");
        $("#primerParrafo").css("font-size", "100%");
        $("#segundoParrafo").css("color", "black");
        $("#segundoParrafo").css("font-size", "100%");
        $("#tercerParrafo").css("color", "black");
        $("#tercerParrafo").css("font-size", "100%");
        $("#cuartoParrafo").css("color", "black");
        $("#cuartoParrafo").css("font-size", "100%");
    });

    $("#cssModificado").click(function (cssModificado) {
        cssModificado.preventDefault();
        $(".parrafoRojo").css({ "color": "red", "font-size": "200%" });
        $(".parrafoAzul").css({ "color": "blue", "font-size": "200%" });
    });
});





/* © Sergio Bejarano Arroyo */