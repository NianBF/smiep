
/**
 * mensaje de alerta que se utilizara pera todos aquellos 
 * que sean primer nombre
 * */
export const nombre = function (event){
  swal.fire({
    title: "completa el campo primer nombre",
    toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
  });     
  event.preventDefault();
}
export default nombre