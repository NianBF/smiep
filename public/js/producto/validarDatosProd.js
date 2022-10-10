import { cantDisp, codBar, descrip, estado, id, imagen, nombCat, precio, presentacion, priceArrive, producto } from "../moduleValidar/CatTiProd.js"
import { documento } from "../moduleValidar/datosPersonales.js"
import msgInf from "../moduleValidar/msgInf.js"
import { registroOK } from "../moduleValidar/msgOK.js"

var formulario = document.querySelector("form")
var firstpage = document.querySelector(".firstNext")
var secondpage = document.querySelector(".next-1")
var Thirdpage = document.querySelector(".next-2")
var btn_enviar = document.querySelector("#btn-enviar")

msgInf()
firstpage.addEventListener("click", function(event){
 if (formulario.id_prod.value ==0) {
      id(event)
    }
    else if (formulario.prod.value ==0) {
      producto(event)
    }
    else if (formulario.img.value ==0) {
      imagen(event)
    }
    else{
      slidePage.style.display = "none";page.style.display = "block";
    }
})

secondpage.addEventListener("click", function (event){
 if (formulario.precio.value == 0) {
    precio(event)
  }
  else if(formulario.priceArrive.value ==0){
    priceArrive(event)
  }
  
  else  if (formulario.cantDisp.value == 0) {
    cantDisp(event)
  }
  else{
    page.style.display = "none";page1.style.display = "block";
  }
})

Thirdpage.addEventListener("click",function(event){
  
  if (formulario.Presentacion.value == 0) {
   presentacion(event)
  }
  else  if (formulario.descrip.value == 0) {
    descrip(event)
  }
  else  if (formulario.codBar.value == 0) {
   codBar(event)
  }
  else{
    page1.style.display = "none";
    infTi.style.display = "block";
  }
})

btn_enviar.addEventListener("click", function (event) {
  
  if (formulario.id_docUsu.value == 0) {
    documento(event)
  }
  else if (formulario.id_cat.value == 0) {
   nombCat(event)
  }
  else if (formulario.estado.value == 0) {
    estado(event)
  }
  else{
   registroOK()
  }
})