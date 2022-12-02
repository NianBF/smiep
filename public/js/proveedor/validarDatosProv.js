import { documento,nombre,apellido,direccion,telefono,email,fecha } from "../moduleValidar/datosPersonales.js"
import { empresa } from "../moduleValidar/CatTiProd.js"
import { registroOK } from "../moduleValidar/msgOK.js"
import msgInf from "../moduleValidar/msgInf.js"


var formulario = document.querySelector("form")
var firstpage = document.querySelector(".firstNext")
var secondpage = document.querySelector(".next-1")
var Thirdpage = document.querySelector(".next-2")
var btn_enviar = document.querySelector("#btn-enviar")
msgInf()
firstpage.addEventListener("click", function(event){
  let regExp = /^[0-9]{3,10}$/g;
  /* if (formulario.creadoEn.value == 0){
    fecha(event)
  } */
  if (regExp.test( formulario.id_Prov.value) == false) {
   documento(event)
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
    empresa(event)
  }
  else if (formulario.direc.value == 0) {
    direccion(event)
  }
  else{ page1.style.display = "none";infTi.style.display = "block";}
})

btn_enviar.addEventListener("click", function (event) {
  let regExpEmail = /(@)(.*[a-z])([.])(.*[a-z])/g;

  if (formulario.tel.value == 0) {
    telefono(event)
  }
  else if (regExpEmail.test(formulario.email.value) == false) {
    email(event)
  }
  else{
   registroOK()
  }
})