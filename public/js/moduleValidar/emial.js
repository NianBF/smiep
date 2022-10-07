
export const email = function (event){
       swal.fire({
         title: "Por favor ingrese el correo institucional",
         toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
       });
       event.preventDefault();
     
}