import { id, nombti } from "../moduleValidar/CatTiProd.js"
import { direccion, email, telefono } from "../moduleValidar/datosPersonales.js"
import msgInf from "../moduleValidar/msgInf.js"
import { registroOK } from "../moduleValidar/msgOK.js"

var formulario = document.querySelector("form")
var firstpage = document.querySelector(".firstNext")
var btn_enviar = document.querySelector("#btn-enviar")

msgInf()

firstpage.addEventListener("click", function(event){
 if (formulario.id_ti.value ==0) {
    id(event)
    }
    else{
      slidePage.style.display = "none";page.style.display = "block";
    }
})

btn_enviar.addEventListener("click", function (event) {
  
  if (formulario.nombTi.value == 0) {
    nombti(event)
  }
  else if (formulario.direc.value == 0) {
   direccion(event)
  }
  else if (formulario.tel.value == 0) {
   telefono(event)
  }
  else if (formulario.email.value == 0) {
    email(event)
  }
  else{
    registroOK()
  }
})