import { apellido } from "../moduleValidar/apellido.js"
import { direccion } from "../moduleValidar/direccion.js"
import { email } from "../moduleValidar/emial.js"
import { id } from "../moduleValidar/id.js"
import { registroOK } from "../moduleValidar/msgOK.js"
import nombre from "../moduleValidar/nombre.js"

var formulario = document.querySelector("form")
var firstpage = document.querySelector(".firstNext")
var secondpage = document.querySelector(".next-1")
var Thirdpage = document.querySelector(".next-2")
var btn_enviar = document.querySelector("#btn-enviar")

firstpage.addEventListener("click", function(event){
  let regExp = /^[0-9]{3,10}$/g;
  if (regExp.test( formulario.id_Prov.value) == false) {
   id(event)
  }  
  else{ slidePage.style.display = "none";page.style.display = "block";}
})

secondpage.addEventListener("click", function (event){
  if (formulario.nombProv1.value == 0) {
    nombre(event)
  }
  else  if (formulario.apeProv1.value == 0) {
    apellido(event)
  }
  else{ page.style.display = "none";page1.style.display = "block";}
})

Thirdpage.addEventListener("click",function(event){
  if (formulario.empresa.value == 0) {
    swal.fire({  title: "completa el campo empresa",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,});e.preventDefault();
  }
  else if (formulario.direc.value == 0) {
    direccion(event)
  }
  else{ page1.style.display = "none";infTi.style.display = "block";}
})

btn_enviar.addEventListener("click", function (event) {
  if (formulario.tel.value == 0) {
    swal.fire({  title: "completa el campo numero de telefonico",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,});e.preventDefault();
  }
  else if (formulario.email.value == 0) {
    email(event)
  }
  else{
    registroOK()
  }
})