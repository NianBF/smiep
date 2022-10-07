/**
 * importacion de modulos 
 */
import { apellido } from "../moduleValidar/apellido.js"
import { email } from "../moduleValidar/emial.js"
import { estado } from "../moduleValidar/estado.js"
import { id } from "../moduleValidar/id.js"
import { registroOK } from "../moduleValidar/msgOK.js"
import nombre from "../moduleValidar/nombre.js"
import { nomUsu } from "../moduleValidar/nomUsu.js"
import { passW } from "../moduleValidar/passw.js"
import { rol } from "../moduleValidar/rol.js"
import { selectTi } from "../moduleValidar/selectTi.js"

const formulario = document.querySelector("form")

/**
 * botones
 */
const firstpage = document.querySelector(".firstNext")
const secondpage = document.querySelector(".next-1")
const Thirdpage = document.querySelector(".next-2")
const btn_enviar = document.querySelector(".submit")

firstpage.addEventListener("click", function(event){
  let regExp = /^[0-9]{3,10}$/g;
if( regExp.test(formulario.id_doc.value) == false) {
  id(event);
}
else{
  slidePage.style.display = 'none'; 
  page.style.display = 'block'; 
}
});

secondpage.addEventListener("click", function(event){
  if(formulario.nombre1.value == 0) {
    nombre(event)
  }
else if(formulario.apellido1.value ==0 ) {
  apellido(event)
}
else{
  page.style.display = "none";
  page1.style.display = "block";
}
});

Thirdpage.addEventListener("click", function(event){
  let regExpEmail = /(@smiep.com)$/g;
  let regExpPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]{2})(?=.*[@!+*?=#$|&~:;_-]).{6,18}$/g;

  if(formulario.userName.value == 0) {
    nomUsu(event)

  }else if(regExpEmail.test(formulario.email.value) == false) {
    email(event)
    
  } else if(regExpPass.test(formulario.pass.value)  == false) {
    passW(event)
  }
  else{
    page1.style.display = "none";
    infTi.style.display = "block";
  }
}); 

btn_enviar.addEventListener("click", function (event){
  if((formulario.rol.value) == 0) {
    rol(event)
  }
  else if(formulario.estado.value == 0) {
    estado(event)
  }
  else if(formulario.idTi.value == 0) {
    selectTi(event)
  }
  else{
    registroOK()  
  }
});