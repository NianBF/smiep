export const estado = function (event){
    swal.fire({
        title: "selecciona un estado",
        toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
      event.preventDefault();
}