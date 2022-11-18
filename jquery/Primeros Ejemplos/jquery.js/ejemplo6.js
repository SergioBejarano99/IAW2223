$(document).ready(function () {
    $("#anadirEstilosCss").click(function (e) {
        e.preventDefault();
        $("tr:even").addClass("fondoAzul");
        $("tr:odd").addClass("fondoVerde");
    });

    $("#eliminarEstilosCss").click(function (e) {
        e.preventDefault();
        $("tr").removeClass();
    });
});





/* © Sergio Bejarano Arroyo */