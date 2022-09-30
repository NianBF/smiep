import id from "../moduleValidar/id.js"
import nomb1 from "../moduleValidar/nombre.js";
import ape1 from "../moduleValidar/apellido.js";

import nomUsu from "../moduleValidar/nomUsu.js"
import correo from "../moduleValidar/emial.js"
import passW from "../moduleValidar/passw.js"


import nextStyleProgresBar from "./stepsForm.js"

const slidePage = document.querySelector(".slide-page");
const page = document.querySelector(".page");
const page1 = document.querySelector(".page1");
const infTi = document.querySelector(".infTi");

const formulario = document.querySelector("form")
const firstpage = document.querySelector(".firstNext")
const secondpage = document.querySelector(".next-1")
const Thirdpage = document.querySelector(".next-2")
const btn_enviar = document.querySelector("#enviar")


firstpage.addEventListener("click", function(event){
  
  let regExp = /^[0-9]{3,10}$/g;
  if ( regExp.test(formulario.id_doc.value) ==false) {
  id();
  event.preventDefault();
}
else{
  slidePage.style.display = 'none'; 
  page.style.display = 'block'; 
  /* nextStyleProgresBar(); */
}
})

secondpage.addEventListener("click", function (event){
  
  if (formulario.nombre1.value == 0) {
    nomb1();
  event.preventDefault();
}
else   if (formulario.apellido1.value == 0) {
  ape1();
event.preventDefault();
}
else{
  page.style.display = "none";
  page1.style.display = "block";
 /*  nextStyleProgresBar(); */
}
})

Thirdpage.addEventListener("click",function(event){
  let regExpEmail = /(@smiep.com)$/g;
  let regExpPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]{2})(?=.*[@!+*?=#$|&~:;_-]).{6,18}$/g;
  
  if (formulario.userName.value == 0) {
    nomUsu();
    event.preventDefault();

  }else if (regExpEmail.test(formulario.email.value) == false) {
    correo();
    event.preventDefault();

  } else if (regExpPass.test(formulario.pass.value)  == false) {
    passW()
    event.preventDefault();
  }else{
    page1.style.display = "none";
    infTi.style.display = "block";
   /*  nextStyleProgresBar(); */
  }

}) 
btn_enviar.addEventListener("click", function (e){
  if (formulario.rol.value == 0) {
    swal.fire({
      title: "completa el campo ROL",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else if (formulario.estado.value == 0) {
    swal.fire({
      title: "completa el campo estado",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else if (formulario.idTi.value == 0) {
    swal.fire({
      title: "completa el campo id tienda",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else{
    swal.fire({
      title: "registro cargado con exito",timer: 90000,timerProgressBar: true,confirmButtonText: "Aceptar",
    });
  }
})
