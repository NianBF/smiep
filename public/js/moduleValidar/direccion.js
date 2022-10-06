export const direccion = function (event) {
    swal.fire({
        title: "completa el campo direccion",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
      event.preventDefault();
}