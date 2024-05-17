document.getElementById("btn__registrarse").addEventListener("click", register);
document.getElementById("btn__iniciar-sesion").addEventListener("click", login);

//declaracion de variables
var formulario_login_register = document.querySelector(".contenedor__login-register");
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

//cambio al formulario registro
function register(){
    formulario_register.style.display = "block";
    formulario_login.style.display = "none";
    formulario_login_register.style.left = "410px";
    caja_trasera_register.style.opacity = "0";
    caja_trasera_login.style.opacity = "1";
}
//cambio al formulario login
function login(){
    formulario_login.style.display = "block";
    formulario_register.style.display = "none";
    formulario_login_register.style.left = "10px";
    caja_trasera_register.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";
}

//validar registro
function validarRegistro() {
    var inputs = document.querySelectorAll('.formulario__register input[required]');
    for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
            alert("Por favor, complete todos los campos.");
            return false;
        }
    }
    return true;
}
//validar login
function validarLogin() {
    var inputs = document.querySelectorAll('.formulario__login input[required]');
    for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
            alert("Por favor, complete todos los campos.");
            return false;
        }
    }
    return true;
}