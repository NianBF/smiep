import { id, nombCat } from "../moduleValidar/CatTiProd.js";
import { registroOK } from "../moduleValidar/msgOK.js";
import msgInf from "../moduleValidar/msgInf.js";

const formulario = document.querySelector("form")
const submitBtn = document.querySelector(".submit");

msgInf()

submitBtn.addEventListener("click", function(event){
  console.log("click")
  if (formulario.id_cat.value == 0) {
    id(event)
  }
  else if (formulario.nCategoria.value == 0) {
   nombCat(event)
  }
  else{
    registroOK()
  }
})