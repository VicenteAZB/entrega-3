$(document).ready(function() {
    var tarjeta = $('#Tarjeta');
    var procesador = $('#Procesador');
    var ram = $('#Ram');
    var placa = $('#Placa');
    var fuente = $('#Fuente');
    var lista = $('#lista');
    var descripcion = $('#descripcion');

    function muestraDescripcion(texto) {
      descripcion.text(texto);
    }

    async function mostrarInformacion(productos) {
      try {
        const response = await fetch(productos);
        if (response.ok) {
          const data = await response.text();
          lista.empty();
          lista.html(data);
        } else {
          console.error('Error al obtener datos');
        }
      } catch (error) {
        console.error('Error al realizar la solicitud', error);
      }
    }

    tarjeta.on({
      mouseover: function() { muestraDescripcion('Tarjetas gráficas'); },
      mouseout: function() { muestraDescripcion('...'); },
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