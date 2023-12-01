$(document).ready(function() {
  // Selecciona elementos del DOM y almacénalos en variables
  var tarjeta = $('#Tarjeta');
  var procesador = $('#Procesador');
  var ram = $('#Ram');
  var placa = $('#Placa');
  var fuente = $('#Fuente');
  var lista = $('#lista');
  var descripcion = $('#descripcion');

  // Función para mostrar la descripción en el elemento con ID 'descripcion'
  function muestraDescripcion(texto) {
    descripcion.text(texto);
  }

  // Función asíncrona para mostrar información desde una URL (productos es un nombre un poco confuso, podría ser categorías)
  async function mostrarInformacion(productos) {
    try {
      // Realiza una solicitud a la URL especificada
      const response = await fetch(productos);

      // Verifica si la respuesta es exitosa (código de respuesta 200)
      if (response.ok) {
        // Lee el contenido de la respuesta como texto
        const data = await response.text();

        // Limpia el contenido actual del elemento 'lista'
        lista.empty();

        // Agrega el contenido obtenido a 'lista'
        lista.html(data);
      } else {
        // Muestra un mensaje de error si la respuesta no es exitosa
        console.error('Error al obtener datos');
      }
    } catch (error) {
      // Muestra un mensaje de error si hay un problema con la solicitud
      console.error('Error al realizar la solicitud', error);
    }
  }

  // Asocia eventos a los elementos seleccionados

  tarjeta.on({
    // Muestra la descripción y carga la información al hacer mouseover
    mouseover: function() { muestraDescripcion('Tarjetas gráficas'); },
    // Restaura la descripción a '...' al hacer mouseout
    mouseout: function() { muestraDescripcion('...'); },
    // Carga la información asociada al hacer clic
    click: function() { mostrarInformacion('./Info_BD/tarjetas.php'); }
  });

  procesador.on({
    mouseover: function() { muestraDescripcion('Procesadores'); },
    mouseout: function() { muestraDescripcion('...'); },
    click: function() { mostrarInformacion('./Info_BD/procesadores.php'); }
  });

  ram.on({
    mouseover: function() { muestraDescripcion('Memorias RAM'); },
    mouseout: function() { muestraDescripcion('...'); },
    click: function() { mostrarInformacion('./Info_BD/ram.php'); }
  });

  placa.on({
    mouseover: function() { muestraDescripcion('Placas base'); },
    mouseout: function() { muestraDescripcion('...'); },
    click: function() { mostrarInformacion('./Info_BD/placas.php'); }
  });

  fuente.on({
    mouseover: function() { muestraDescripcion('Fuentes de poder'); },
    mouseout: function() { muestraDescripcion('...'); },
    click: function() { mostrarInformacion('./Info_BD/fuentes.php'); }
  });
});
