/**
 * paginacion
 */
/* const slidePage = document.querySelector(".slide-page");
const page = document.querySelector(".page");
const page1 = document.querySelector(".page1");
const infTi = document.querySelector(".infTi"); */


const formulario = document.querySelector("form")

/**
 * botones
 */
const firstpage = document.querySelector(".firstNext")
const secondpage = document.querySelector(".next-1")
const Thirdpage = document.querySelector(".next-2")
const btn_enviar = document.querySelector(".submit")

/**
 * expreciones regulares 
 */
let regExp = /^[0-9]{3,10}$/g;
let regExpEmail = /(@smiep.com)$/g;
let regExpPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]{2})(?=.*[@!+*?=#$|&~:;_-]).{6,18}$/g;


firstpage.addEventListener("click", function(event){
if( regExp.test(formulario.id_doc.value) == false) {
  swal.fire({
    title: "completa el campo, solo ingrese numeros",
    toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
  });
  event.preventDefault();
}
else{
  slidePage.style.display = 'none'; 
  page.style.display = 'block'; 
}
});

secondpage.addEventListener("click", function(event){
  if((formulario.nombre1.value) == false) {
    swal.fire({
      title: "completa el campo primer nombre",
      toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });     
    event.preventDefault();
  }
else if((formulario.apellido1.value)==false) {
  swal.fire({
    title: "completa el campo primer apellido",
    toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
  });
  event.preventDefault();
}
else{
  page.style.display = "none";
  page1.style.display = "block";
}
});

Thirdpage.addEventListener("click", function(event){
 
  if(formulario.userName.value == 0) {
    swal.fire({
      title: "completa el campo usuario",toast: true,
      position: "top-start",timer: 5000,timerProgressBar: true,
    });
    event.preventDefault();

  }else if(regExpEmail.test(formulario.email.value) == false) {
    swal.fire({
      title: "Por favor ingrese el correo institucional",
      toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    event.preventDefault();
    
  } else if(regExpPass.test(formulario.pass.value)  == false) {
    swal.fire({
      title: "La contraseña debe tener entre 6 a 18 caracteres y debe contener 1 mayuscula, 1 minuscula, 2 numeros, 1 caracter especial",
      toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    event.preventDefault();
  }
  else{
    page1.style.display = "none";
    infTi.style.display = "block";
  }
}); 

btn_enviar.addEventListener("click", function (event){
  if((formulario.rol.value) == 0) {
    swal.fire({
      title: "selecciona un rol",
      toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    event.preventDefault();
  }
  else if(formulario.estado.value == 0) {
    swal.fire({
      title: "selecciona un estado",
      toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    event.preventDefault();
  }
  else if(formulario.idTi.value == 0) {
    swal.fire({
      title: "seleccione una tienda",
      toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    event.preventDefault();
  }
  else{
    swal.fire({
      title: "registro cargado con exito",
      timer: 90000,timerProgressBar: true,confirmButtonText: "Aceptar",
    });   
  }
});