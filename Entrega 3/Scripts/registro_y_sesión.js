$(document).ready(function(){
    // Cuando el documento esté listo, ejecuta las siguientes funciones:

    // Asocia la función 'iniciarSesion' al evento clic del botón con el ID 'btn__iniciar-sesion'
    $("#btn__iniciar-sesion").click(iniciarSesion);
    
    // Asocia la función 'register' al evento clic del botón con el ID 'btn__registrarse'
    $("#btn__registrarse").click(register);

    // Asocia la función 'anchoPage' al evento de cambio de tamaño de la ventana del navegador
    $(window).resize(anchoPage);

    // Define variables para distintos elementos del DOM usando jQuery
    var formulario_login = $(".formulario__login");
    var formulario_register = $(".formulario__register");
    var contenedor_login_register = $(".container-login");
    var caja_trasera_login = $(".caja__trasera-login");
    var caja_trasera_register = $(".caja__trasera-register");
    const btnreg = $('#btnreg');

    // Función que ajusta el diseño de la página en función del ancho de la ventana del navegador
    function anchoPage(){
        if ($(window).innerWidth() > 850){
            // Si la ventana es más ancha que 850 píxeles, muestra ciertos elementos y ajusta estilos
            caja_trasera_register.css("display", "block");
            caja_trasera_login.css("display", "block");
        }else{
            // Si la ventana es más estrecha que 850 píxeles, ajusta estilos y muestra ciertos elementos
            caja_trasera_register.css("display", "block");
            caja_trasera_register.css("opacity", "1");
            caja_trasera_login.css("display", "none");
            formulario_login.css("display", "block");
            contenedor_login_register.css("left", "0px");
            formulario_register.css("display", "none");
        }
    }

    // Llama a la función 'anchoPage' al cargar la página para establecer el diseño inicial
    anchoPage();

    // Función que maneja el inicio de sesión
    function iniciarSesion(){
        if ($(window).innerWidth() > 850){
            // Si la ventana es más ancha que 850 píxeles, ajusta estilos para el inicio de sesión
            formulario_login.css("display", "block");
            contenedor_login_register.css("left", "0px");
            formulario_register.css("display", "none");
            caja_trasera_register.css("opacity", "1");
            caja_trasera_login.css("opacity", "0");
        }else{
            // Si la ventana es más estrecha que 850 píxeles, ajusta estilos para el inicio de sesión
            formulario_login.css("display", "block");
            contenedor_login_register.css("left", "0px");
            formulario_register.css("display", "none");
            caja_trasera_register.css("display", "block");
            caja_trasera_login.css("display", "none");
        }
    }

    // Función que maneja el registro de usuario
    function register(){
        if ($(window).innerWidth() > 850){
            // Si la ventana es más ancha que 850 píxeles, ajusta estilos para el registro
            formulario_register.css("display", "block");
            contenedor_login_register.css("left", "420px");
            formulario_login.css("display", "none");
            caja_trasera_register.css("opacity", "0");
            caja_trasera_login.css("opacity", "1");
        }else{
            // Si la ventana es más estrecha que 850 píxeles, ajusta estilos para el registro
            formulario_register.css("display", "block");
            contenedor_login_register.css("left", "0px");
            formulario_login.css("display", "none");
            caja_trasera_register.css("display", "none");
            caja_trasera_login.css("display", "block");
            caja_trasera_login.css("opacity", "1");
        }
    }
});
