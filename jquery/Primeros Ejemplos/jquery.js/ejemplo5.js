$(document).ready(function () {
    $("#cssModificado").click(function (e) {
        $("tr:even").css({ "background": "red", "font-family": "verdana" });
        $("tr:odd").css({ "background": "yellow", "font-family": "verdana" });
    });

    $("#cssOriginal").click(function (e) {
        $("tr:even").css({ "background": "", "font-family": "" });
        $("tr:odd").css({ "background": "", "font-family": "" });
    });
});





/* © Sergio Bejarano Arroyo */