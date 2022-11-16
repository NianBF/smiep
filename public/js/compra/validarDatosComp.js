var formulario = document.querySelector("form")
var firstpage = document.querySelector(".firstNext")
var secondpage = document.querySelector(".next-1")
var Thirdpage = document.querySelector(".next-2")
var btn_enviar = document.querySelector("#btn-enviar")

firstpage.addEventListener("click", function(e){
 if (formulario.id_compra.value ==0) {
      swal.fire({
        title: "Completa el campo id compra",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
    e.preventDefault();
    }
    else if (formulario.cantidadCP.value ==0) {
      swal.fire({
        title: "Completa el campo valor total",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
    e.preventDefault();
    }
    else if (formulario.creadoEn.value ==0) {
      swal.fire({
        title: "Completa el campo Fecha de Llegada",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
    e.preventDefault();
    }
    else{
      slidePage.style.display = "none";page.style.display = "block";
    }
});

btn_enviar.addEventListener("click", function (e) {
 if (formulario.docUsu.value == 0) {
    swal.fire({
      title: "Completa el campo documento de usuario",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  
  else  if (formulario.docProv.value == 0) {
    swal.fire({
      title: "Completa el campo documento proveedor",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
});