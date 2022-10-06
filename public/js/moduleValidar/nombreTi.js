
export const nombti = function (event){
  swal.fire({
    title: "completa el campo nombre tienda",
    toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
  });     
  event.preventDefault();
}