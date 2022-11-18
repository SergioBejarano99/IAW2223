$(document).ready(function () {
    $("#anadirEstilosCss").click(function (e) {
        e.preventDefault();
        $("tr:even").addClass("fondosRojos");
        $("tr:odd").addClass("fondosAmarillos");
    });

    $("#eliminarEstilosCss").click(function (e) {
        e.preventDefault();
        $("tr").removeClass();
    });
});





/* © Sergio Bejarano Arroyo */