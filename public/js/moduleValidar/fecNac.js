const fecNac = function(event){
    swal.fire({
        title: "completa el campo fecha de nacimiento",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
      });
      event.preventDefault();
}
export default fecNac