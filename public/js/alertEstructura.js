/**
 * 
 * @param {*} event 
 * @param {mensaje que se desea enviar} mensaje 
 */
export const alertEstructura = function (event,mensaje){
        swal.fire({
          title: mensaje,
          toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
        });
        event.preventDefault();
}
