// Selecciona los elementos con los IDs correspondientes y almacena sus referencias en variables.
const placa_madre = document.querySelector("#placa-madre");
const tarjeta_grafica = document.querySelector("#tarjeta-grafica");
const memoria_ram = document.querySelector("#memoria-ram");
const procesador = document.querySelector("#procesador");
const fuente_de_poder = document.querySelector("#fuente-de-poder");

// Función que muestra información y cambia el color del párrafo "info".
function muestrainfo_cambiacolor(descripcion, color) {
    // Selecciona el elemento del párrafo "info" y almacena su referencia en la variable "parrafo".
    var parrafo = document.getElementById("info");
    // Cambia el contenido del párrafo con la información proporcionada.
    parrafo.innerHTML = descripcion;
    // Cambia el color del texto del párrafo.
    parrafo.style.color = color;
}

// Función que limpia el contenido del párrafo "info" y lo restaura a su color original.
function limpiaparrafo(descripcion) {
    // Selecciona el elemento del párrafo "info" y almacena su referencia en la variable "parrafo".
    var parrafo = document.getElementById("info");
    // Restaura el contenido original del párrafo.
    parrafo.innerHTML = descripcion;
    // Restaura el color del texto del párrafo a blanco.
    parrafo.style.color = "white";
}

// Agrega eventos de "mouseover" (cuando el mouse se coloca sobre el elemento) y "mouseout" (cuando el mouse sale del elemento) a cada elemento específico.
// Cuando el mouse sale de "placa_madre", llama a la función "limpiaparrafo" para limpiar y restaurar el párrafo "info".
// Cuando se coloca el mouse sobre "placa_madre", llama a la función "muestrainfo_cambiacolor" con la descripción y color apropiados.
placa_madre.addEventListener("mouseover", function() {muestrainfo_cambiacolor("Es la columna vertebral que une los componentes del computador en un mismo punto y les permite comunicarse entre sí. Sin ella, ninguna de las piezas del computador, como el CPU, la GPU o el disco duro, podrían interactuar.", "red")});
placa_madre.addEventListener("mouseout", function() {limpiaparrafo("Información:")});
tarjeta_grafica.addEventListener("mouseover", function(){muestrainfo_cambiacolor("Es un componente que viene integrado en la placa base del PC o se instala a parte para ampliar sus capacidades. Concretamente, esta tarjeta está dedicada al procesamiento de datos relacionados con el vídeo y las imágenes que se están reproduciendo en el ordenador.", "red")});
tarjeta_grafica.addEventListener("mouseout", function(){limpiaparrafo("Información:")});
memoria_ram.addEventListener("mouseover", function(){muestrainfo_cambiacolor("Es una memoria de almacenamiento a corto plazo. El sistema operativo de ordenadores u otros dispositivos utiliza la memoria RAM para almacenar de forma temporal todos los programas y sus procesos de ejecución.", "red")});
memoria_ram.addEventListener("mouseout", function(){limpiaparrafo("Información:")});
procesador.addEventListener("mouseover", function(){muestrainfo_cambiacolor("Es el cerebro del sistema, procesa todo lo que ocurre en la PC y ejecuta todas las acciones que existen. Cuanto más rápido sea el procesador que tiene una computadora, más rápidamente se ejecutarán las órdenes que se le den a la máquina.", "red")});
procesador.addEventListener("mouseout", function(){limpiaparrafo("Información:")});
fuente_de_poder.addEventListener("mouseover", function(){muestrainfo_cambiacolor("Son equipos cuya principal función es transformar la energía. Existe la creencia de que las fuentes de poder generan energía y esto es falso. Sirven para transformar un tipo de energía en otra necesaria para el correcto funcionamiento de nuestros dispositivos.", "red")});
fuente_de_poder.addEventListener("mouseout", function(){limpiaparrafo("Información:")});