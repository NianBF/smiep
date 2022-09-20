var formulario = document.querySelector("form")
var firstpage = document.querySelector(".firstNext")
var btn_enviar = document.querySelector("#btn-enviar")

firstpage.addEventListener("click", function(e){
 if (formulario.id_ti.value ==0) {
      swal.fire({
        title: "completa el campo id tienda",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
    e.preventDefault();
    }
    else{
      slidePage.style.display = "none";page.style.display = "block";
    }
})

btn_enviar.addEventListener("click", function (e) {
  
  if (formulario.nombTi.value == 0) {
    swal.fire({
      title: "completa el campo nombre tienda",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else if (formulario.direc.value == 0) {
    swal.fire({
      title: "completa el campo direccion",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else if (formulario.tel.value == 0) {
    swal.fire({
      title: "completa el campo telefono",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else if (formulario.email.value == 0) {
    swal.fire({
      title: "completa el campo correo",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else{
    swal.fire({
      title: "registro cargado con exito",timer: 90000,timerProgressBar: true,confirmButtonText: "Aceptar",
    });
  }
})