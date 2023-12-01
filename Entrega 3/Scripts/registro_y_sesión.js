$(document).ready(function(){
    $("#btn__iniciar-sesion").click(iniciarSesion);
    $("#btn__registrarse").click(register);
    $(window).resize(anchoPage);

    var formulario_login = $(".formulario__login");
    var formulario_register = $(".formulario__register");
    var contenedor_login_register = $(".container-login");
    var caja_trasera_login = $(".caja__trasera-login");
    var caja_trasera_register = $(".caja__trasera-register");
    const btnreg = $('#btnreg');

    function anchoPage(){
        if ($(window).innerWidth() > 850){
            caja_trasera_register.css("display", "block");
            caja_trasera_login.css("display", "block");
        }else{
            caja_trasera_register.css("display", "block");
            caja_trasera_register.css("opacity", "1");
            caja_trasera_login.css("display", "none");
            formulario_login.css("display", "block");
            contenedor_login_register.css("left", "0px");
            formulario_register.css("display", "none");
        }
    }

    anchoPage();

    function iniciarSesion(){
        if ($(window).innerWidth() > 850){
            formulario_login.css("display", "block");
            contenedor_login_register.css("left", "0px");
            formulario_register.css("display", "none");
            caja_trasera_register.css("opacity", "1");
            caja_trasera_login.css("opacity", "0");
        }else{
            formulario_login.css("display", "block");
            contenedor_login_register.css("left", "0px");
            formulario_register.css("display", "none");
            caja_trasera_register.css("display", "block");
            caja_trasera_login.css("display", "none");
        }
    }

    function register(){
        if ($(window).innerWidth() > 850){
            formulario_register.css("display", "block");
            contenedor_login_register.css("left", "420px");
            formulario_login.css("display", "none");
            caja_trasera_register.css("opacity", "0");
            caja_trasera_login.css("opacity", "1");
        }else{
            formulario_register.css("display", "block");
            contenedor_login_register.css("left", "0px");
            formulario_login.css("display", "none");
            caja_trasera_register.css("display", "none");
            caja_trasera_login.css("display", "block");
            caja_trasera_login.css("opacity", "1");
        }
    }
});
