// Selecciona el formulario HTML en la página y almacena su referencia en la variable "formulario".
var formulario = document.querySelector("form");

// Agrega un evento "submit" al formulario. Esto se activa cuando el usuario envía el formulario.
formulario.addEventListener("submit", function () {

    // Captura el valor ingresado en el campo de nombre (elemento con el ID "nombre").
    var nombre = document.getElementById("nombre").value;

    // Captura el valor ingresado en el campo de correo electrónico (elemento con el ID "email").
    var email = document.getElementById("email").value;

    // Captura el valor ingresado en el campo de mensaje (elemento con el ID "mensaje").
    var mensaje = document.getElementById("mensaje").value;

    // Crea una cadena de texto que contiene la información capturada del formulario.
    var mensajeAlerta = "Nombre: " + nombre + "\nEmail: " + email + "\nMensaje: " + mensaje;

    // Muestra la cadena de texto en una ventana emergente de alerta.
    alert(mensajeAlerta);
});
