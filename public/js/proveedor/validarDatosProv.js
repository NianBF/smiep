var formulario = document.querySelector("form")
var firstpage = document.querySelector(".firstNext")
var secondpage = document.querySelector(".next-1")
var Thirdpage = document.querySelector(".next-2")
var btn_enviar = document.querySelector("#btn-enviar")

firstpage.addEventListener("click", function(e){
  if (formulario.id_Prov.value == 0) {
    swal.fire({title: "completa el campo id proveedor",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,});e.preventDefault();
  }  
  else{ slidePage.style.display = "none";page.style.display = "block";}
})
secondpage.addEventListener("click", function (e){
  if (formulario.nombProv1.value == 0) {
    swal.fire({  title: "completa el campo primer nombre",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,});e.preventDefault();
  }
  else  if (formulario.apeProv1.value == 0) {
    swal.fire({  title: "completa el campo primer apellido",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,});e.preventDefault();
  }
  else{ page.style.display = "none";page1.style.display = "block";}
})
Thirdpage.addEventListener("click",function(e){
  if (formulario.empresa.value == 0) {
    swal.fire({  title: "completa el campo empresa",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,});e.preventDefault();
  }
  else if (formulario.direc.value == 0) {
    swal.fire({  title: "completa el campo direccion",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,});e.preventDefault();
  }
  else{ page1.style.display = "none";infTi.style.display = "block";}
})
btn_enviar.addEventListener("click", function (e) {
  if (formulario.tel.value == 0) {
    swal.fire({  title: "completa el campo numero de telefonico",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,});e.preventDefault();
  }
  else if (formulario.email.value == 0) {
    swal.fire({  title: "completa el campo correo",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,});e.preventDefault();
  }
  else{
    swal.fire({  title: "registro cargado con exito",timer: 90000,timerProgressBar: true,confirmButtonText: "Aceptar",});
  }
})