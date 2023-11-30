$(document).ready(function() {
    var rostro = $('#rostro');
    var vicente = $('#vicente');
    var juan = $('#juan');

    function mostrarRostro(img, width, height) {
      rostro.attr('src', img);
      rostro.attr('width', width);
      rostro.attr('height', height);
    }

    vicente.on('click', function() {
      mostrarRostro('./Imágenes/vicente.jpeg', '250', '350');
    });

    juan.on('click', function() {
      mostrarRostro('./Imágenes/juan.jpeg', '250', '350');
    });
  });