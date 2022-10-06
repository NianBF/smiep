export const rol = function (event){
    swal.fire({
        title: "selecciona un rol",
        toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
      event.preventDefault();
}