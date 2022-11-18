$(document).ready(function () {
  /* Oculta todos los Párrafos: */
  $("#btn-ocultar").click(function (e) {
    e.preventDefault();
    $("#primerParrafo, #tercerParrafo").hide();
  });

  /* Muestra todos los Párrafos: */
  $("#btn-mostrar").click(function (e) {
    e.preventDefault();
    $("#primerParrafo, #tercerParrafo").show();
  });
});