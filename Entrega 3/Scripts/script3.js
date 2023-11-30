// Selecciona el elemento con el ID "rostro" y almacena la referencia en la variable "rostro".
const rostro = document.querySelector("#rostro");

// Selecciona el elemento con el ID "vicente" y almacena la referencia en la variable "vicente".
const vicente = document.querySelector("#vicente");

// Selecciona el elemento con el ID "juan" y almacena la referencia en la variable "juan".
const juan = document.querySelector("#juan");

// Función que muestra el rostro de una persona.
function muestrarostro(img, width, height) {
    // Cambia la fuente de la imagen para mostrar la imagen especificada.
    rostro.src = img;
    
    // Establece el ancho de la imagen.
    rostro.width = width;
    
    // Establece la altura de la imagen.
    rostro.height = height;
}

// Agrega un evento de clic al elemento con el ID "vicente". Cuando se hace clic en "vicente," llama a la función muestrarostro con los parámetros adecuados.
vicente.addEventListener("click", function() {muestrarostro("./Imágenes/vicente.jpeg", "250", "350")});

// Agrega un evento de clic al elemento con el ID "juan". Cuando se hace clic en "juan," llama a la función muestrarostro con los parámetros adecuados.
juan.addEventListener("click", function() {muestrarostro("./Imágenes/juan.jpeg", "250", "350")});
