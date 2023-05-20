/*  Para que se queden desplegadas siempre:
function toggleCaja(elemento) {
  var contenido = elemento.nextElementSibling;
  if (contenido.style.display === "none") {
    contenido.style.display = "block";
  } else {
    contenido.style.display = "none";
  }
}
*/

/* Para que se vuelvan a plegar las demás, si desplegamos una: */
var cajas = document.getElementsByClassName('caja');

function toggleCaja(elemento) {
  var contenido = elemento.nextElementSibling;

  // Oculta todas las cajas desplegadas
  for (var i = 0; i < cajas.length; i++) {
    var cajaContenido = cajas[i].getElementsByClassName('contenido')[0];
    if (cajas[i] !== elemento.parentNode && cajaContenido.style.display === 'block') {
      cajaContenido.style.display = 'none';
    }
  }

  // Muestra u oculta la caja actual
  if (contenido.style.display === 'none') {
    contenido.style.display = 'block';
  } else {
    contenido.style.display = 'none';
  }
}