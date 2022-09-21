const formulario = document.querySelector("form")
const form = document.querySelector(".contact-form");
//Anuncio
const btninfo = document.querySelector(".info");
const closeinfo = document.querySelector(".closer");
const info = document.querySelector(".anuncio");
const submitBtn = document.querySelector(".submit");
btninfo.addEventListener("click", function(event){
  event.preventDefault();
  info.style.display = "inline-block";
  form.style.display = "none";
});
closeinfo.addEventListener("click", function(event){
  event.preventDefault();
  info.style.display = "none";
  form.style.display = "inline-block";
});
submitBtn.addEventListener("click", function(e){
  console.log("click")
  if (formulario.id_cat.value == 0) {
    swal.fire({
      title: "completa el campo id categoria",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else if (formulario.nCategoria.value == 0) {
    swal.fire({
      title: "completa el campo nombre categoria",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    e.preventDefault();
  }
  else{
    swal.fire({
      title: "registro cargado con exito",timer: 90000,timerProgressBar: true,confirmButtonText: "Aceptar",
    });
  }
})