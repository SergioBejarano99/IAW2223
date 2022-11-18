$(document).ready(function () {
    $("#btn-modificado").click(function (e) {
        e.preventDefault();
        $(".roja").css({ "color": "red", "font-size": "200%" }); //Con un único multiples CSS
    });

    $("#btn-original").click(function (e) {
        e.preventDefault();
        // Con multiples CSS
        $(".roja").css("color", "red");
        $(".azul").css("color", "blue");
        $(".roja").css("font-size", "100%");
    });
});