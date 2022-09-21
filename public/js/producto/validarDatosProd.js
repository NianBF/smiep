var formulario = document.querySelector("form")
var firstpage = document.querySelector(".firstNext")
var secondpage = document.querySelector(".next-1")
var Thirdpage = document.querySelector(".next-2")
var btn_enviar = document.querySelector("#btn-enviar")

firstpage.addEventListener("click", function(e){
 if (formulario.id_prod.value ==0) {
      swal.fire({
        title: "completa el campo id producto",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
    e.preventDefault();
    }
    else if (formulario.prod.value ==0) {
      swal.fire({
        title: "completa el campo producto",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
    e.preventDefault();
    }
    else if (formulario.img.value ==0) {
      swal.fire({
        title: "completa el campo imagen producto",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
    e.preventDefault();
    }
    else{
      slidePage.style.display = "none";page.style.display = "block";
    }
})

secondpage.addEventListener("click", function (e){
 if (formulario.precio.value == 0) {
    swal.fire({
      title: "completa el campo precio",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  
  else  if (formulario.cantDisp.value == 0) {
    swal.fire({
      title: "completa el campo cantidad disponible",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else{
    page.style.display = "none";page1.style.display = "block";
  }
})

Thirdpage.addEventListener("click",function(e){
  
  if (formulario.Presentacion.value == 0) {
    swal.fire({
      title: "completa el campo tipo de presentacion",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else  if (formulario.descrip.value == 0) {
    swal.fire({
      title: "completa el campo descripcion",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else  if (formulario.codBar.value == 0) {
    swal.fire({
      title: "completa el campo codigo de barras",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else{
    page1.style.display = "none";
    infTi.style.display = "block";
  }
})

btn_enviar.addEventListener("click", function (e) {
  
  if (formulario.id_docUsu.value == 0) {
    swal.fire({
      title: "completa el campo identificacion usuario",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else if (formulario.id_cat.value == 0) {
    swal.fire({
      title: "completa el campo categoria",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else if (formulario.estado.value == 0) {
    swal.fire({
      title: "completa el campo estado",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else{
    swal.fire({
      title: "registro cargado con exito",timer: 90000,timerProgressBar: true,confirmButtonText: "Aceptar",
    });
  }
})