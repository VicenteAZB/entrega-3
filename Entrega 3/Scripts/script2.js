$(document).ready(function() {
    var infoParrafo = $('#info');
    var placaMadre = $('#placa-madre');
    var tarjetaGrafica = $('#tarjeta-grafica');
    var memoriaRAM = $('#memoria-ram');
    var procesador = $('#procesador');
    var fuentePoder = $('#fuente-de-poder');

    function muestraInfoCambiaColor(descripcion, color) {
      infoParrafo.html(descripcion).css('color', color);
    }

    function limpiaParrafo(descripcion) {
      infoParrafo.html(descripcion).css('color', 'white');
    }

    placaMadre.on({
      mouseover: function() { muestraInfoCambiaColor("Es la columna vertebral que une los componentes del computador en un mismo punto y les permite comunicarse entre sí. Sin ella, ninguna de las piezas del computador, como el CPU, la GPU o el disco duro, podrían interactuar.", "red"); },
      mouseout: function() { limpiaParrafo("Información:"); }
    });

    tarjetaGrafica.on({
      mouseover: function() { muestraInfoCambiaColor("Es un componente que viene integrado en la placa base del PC o se instala a parte para ampliar sus capacidades. Concretamente, esta tarjeta está dedicada al procesamiento de datos relacionados con el vídeo y las imágenes que se están reproduciendo en el ordenador.", "red"); },
      mouseout: function() { limpiaParrafo("Información:"); }
    });

    memoriaRAM.on({
      mouseover: function() { muestraInfoCambiaColor("Es una memoria de almacenamiento a corto plazo. El sistema operativo de ordenadores u otros dispositivos utiliza la memoria RAM para almacenar de forma temporal todos los programas y sus procesos de ejecución.", "red"); },
      mouseout: function() { limpiaParrafo("Información:"); }
    });

    procesador.on({
      mouseover: function() { muestraInfoCambiaColor("Es el cerebro del sistema, procesa todo lo que ocurre en la PC y ejecuta todas las acciones que existen. Cuanto más rápido sea el procesador que tiene una computadora, más rápidamente se ejecutarán las órdenes que se le den a la máquina.", "red"); },
      mouseout: function() { limpiaParrafo("Información:"); }
    });

    fuentePoder.on({
      mouseover: function() { muestraInfoCambiaColor("Son equipos cuya principal función es transformar la energía. Existe la creencia de que las fuentes de poder generan energía y esto es falso. Sirven para transformar un tipo de energía en otra necesaria para el correcto funcionamiento de nuestros dispositivos.", "red"); },
      mouseout: function() { limpiaParrafo("Información:"); }
    });
  });