$(document).ready(function() {
  // Selecciona elementos del DOM y almacénalos en variables
  var rostro = $('#rostro');
  var vicente = $('#vicente');
  var juan = $('#juan');

  // Función para mostrar un rostro con la imagen, ancho y alto proporcionados
  function mostrarRostro(img, width, height) {
    // Actualiza la fuente de la imagen, ancho y alto del elemento con el ID 'rostro'
    rostro.attr('src', img);
    rostro.attr('width', width);
    rostro.attr('height', height);
  }

  // Asocia eventos de clic a los elementos seleccionados

  vicente.on('click', function() {
    // Muestra el rostro de Vicente al hacer clic
    mostrarRostro('./Imágenes/vicente.jpeg', '250', '350');
  });

  juan.on('click', function() {
    // Muestra el rostro de Juan al hacer clic
    mostrarRostro('./Imágenes/juan.jpeg', '250', '350');
  });
});
