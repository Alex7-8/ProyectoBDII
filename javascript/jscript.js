document.getElementById("btn__iniciar-sesion").addEventListener("click", Ingresar);
document.getElementById("btn__formulario").addEventListener("click", Formulario);
window.addEventListener("resize", ancho);
//variables usadas
var clogin_formulario = document.querySelector(".contenedor__login-formulario");
var flogin = document.querySelector(".formulario__login");
var fform = document.querySelector(".formulario__formulario");
var ctrlogin = document.querySelector(".caja__tr-login");
var ctrform = document.querySelector(".caja__tr-formulario");


/*Mensaje formulario*/




function ancho(){
    if(window.innerWidth > 850){
        ctrlogin.style.display="block";
        ctrform.style.display="block";
        
    }else{
        ctrform.style.display = "block";
        ctrform.style.opacity = "1";
        ctrlogin.style.display = "none";
        flogin.style.display = "block";
        clogin_formulario.style.left = "0px";
        fform.style.display = "none";
    }
    
}

ancho();
function Ingresar(){

    if(window.innerWidth > 850){
        fform.style.display="none";
        clogin_formulario.style.left ="10px";
        flogin.style.display="block";
        ctrform.style.display.opacity="1";
        ctrlogin.style.display.opacity="0";

    }else{
        fform.style.display="none";
        clogin_formulario.style.left ="0px";
        flogin.style.display="block";
        ctrform.style.display="block";
        ctrlogin.style.display="none";

    }
  
}
function Formulario(){

    if(window.innerWidth > 850){
        fform.style.display="block";
        clogin_formulario.style.left ="410px";
        flogin.style.display="none";
        ctrform.style.display.opacity="0"
        ctrlogin.style.display.opacity="1";
    }else{
        fform.style.display="block";
        clogin_formulario.style.left ="0px";
        flogin.style.display="none";
        ctrform.style.display="none"
        ctrlogin.style.display="block";
        ctrlogin.style.display,opacity="1";
    }
 
}