export const selectTi = function (event){
    swal.fire({
        title: "seleccione una tienda",
        toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
      event.preventDefault();
}