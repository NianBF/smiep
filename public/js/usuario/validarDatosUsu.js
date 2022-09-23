var formulario = document.querySelector("form")
var firstpage = document.querySelector(".firstNext")
var secondpage = document.querySelector(".next-1")
var Thirdpage = document.querySelector(".next-2")
var btn_enviar = document.querySelector("#btn-enviar")


firstpage.addEventListener("click", function(e){
 if (formulario.id_doc.value ==0) {
      swal.fire({
        title: "completa el campo documento",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
    e.preventDefault();
    }
    else{
      slidePage.style.display = "none";page.style.display = "block";
    }
})



secondpage.addEventListener("click", function (e){
 if (formulario.nombre1.value == 0) {
    swal.fire({
      title: "completa el campo primer nombre",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  
  else  if (formulario.apellido1.value == 0) {
    swal.fire({
      title: "completa el campo primer apellido",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else{
    page.style.display = "none";
  page1.style.display = "block";
  }
})

Thirdpage.addEventListener("click",function(e){

  let regExpPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]{2})(?=.*[@!+*?=#$|&~:;_-]).{6,18}$/g;
  let regExpEmail = /(@smiep.com)$/g;
  
  if (formulario.userName.value == 0) {
    swal.fire({
      title: "completa el campo usuario",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else  if (regExpEmail.test(formulario.email.value) == false) {
    swal.fire({
      title: "Por favor ingrese el correo institucional",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else  if (regExpPass.test(formulario.pass.value)  == false) {
    swal.fire({
      title: "La contraseña debe tener entre 6 a 18 caracteres y debe contener 1 mayuscula, 1 minuscula, 2 numeros, 1 caracter especial",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else{
    page1.style.display = "none";
    infTi.style.display = "block";
  }
})

btn_enviar.addEventListener("click", function (e) {
  console.log("click")
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