
/**
 * mensaje de alerta que se utilizara pera todos aquellos 
 * que sena de tipo id o numero
 * */
export const id = function (event){
        swal.fire({
          title: "completa el campo, solo ingrese numeros",
          toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
        });
        event.preventDefault();
}
