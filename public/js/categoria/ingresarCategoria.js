(function () {
  var formulario = document.getElementsByName("formulario")[0],
    elementos = formulario.elements,
    boton = document.getElementById("btn");

  var validarid_cat = function (e) {
    if (formulario.id_cat.value == 0) {
      swal.fire({
        title: "completa el campo id categoria",
        toast: true,
        position: "top-start",
        timer: 5000,
        timerProgressBar: true,
      });
      e.preventDefault();
    }
  };

  var validarnCategoria = function (e) {
    if (formulario.nCategoria.value == 0) {
      swal.fire({
        title: "completa el campo nombre categoria",
        toast: true,
        position: "top-start",
        timer: 5000,
        timerProgressBar: true,
      });
      e.preventDefault();
    }
  };

  var mensaje = function () {
    swal.fire({
      title: "registro cargado con exito",
      timer: 90000,
      timerProgressBar: true,
      confirmButtonText: "Aceptar",
    });
  };

  var validar = function (e) {
    validarid_cat(e);
    validarnCategoria(e);
  };

  boton.addEventListener("click", mensaje);
  formulario.addEventListener("submit", validar);
})();
