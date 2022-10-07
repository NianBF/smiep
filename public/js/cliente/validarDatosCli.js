import { apellido } from "../moduleValidar/apellido.js"
import { direccion } from "../moduleValidar/direccion.js"
import { email } from "../moduleValidar/emial.js"
import fecNac from "../moduleValidar/fecNac.js"
import { id } from "../moduleValidar/id.js"
import { registroOK } from "../moduleValidar/msgOK.js"
import nombre from "../moduleValidar/nombre.js"
import telefono from "../moduleValidar/telefono.js"

var formulario = document.querySelector("form")
var firstpage = document.querySelector(".firstNext")
var secondpage = document.querySelector(".next-1")
var btn_enviar = document.querySelector("#btn-enviar")

firstpage.addEventListener("click", function(event){
  let regExp = /^[0-9]{3,10}$/g;

 if (regExp.test(formulario.doc.value) == false) {
     id(event)
    }
    else{
      slidePage.style.display = "none";page.style.display = "block";
    }
})
secondpage.addEventListener("click", function (event){
 if (formulario.nombreCli1.value == 0) {
   nombre(event)
  }
  
  else  if (formulario.apellidoCli1.value == 0) {
   apellido(event)
  }
  else{
    page.style.display = "none";
  page1.style.display = "block";
  }
})

btn_enviar.addEventListener("click", function (event) {
  let regExpEmail = /(@)(.*[a-z])([.])(.*[a-z])/g;
  if (formulario.direc.value == 0) {
    direccion(event)
  }
  else if (formulario.tel.value == 0) {
    telefono(event)
  }
  else if (regExpEmail.test(formulario.email.value) == false) {
   email(event)
  }
  else if (formulario.FecNac.value == 0) {
    fecNac(event)
  }
  else{
    registroOK()
  }
})