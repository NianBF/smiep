/**
 * mensaje de alerta que se utilizara pera todos aquellos 
 * que sean primer apellido
 * */
export const apellido = function (event){
    swal.fire({
      title: "completa el campo primer apellido",
      toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
    event.preventDefault();
  }

  