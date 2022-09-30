const passW = function (){
 
    swal.fire({
      title: "La contraseña debe tener entre 6 a 18 caracteres y debe contener 1 mayuscula, 1 minuscula, 2 numeros, 1 caracter especial",toast: true,position: "top-start",timer: 5000,timerProgressBar: true,
    });
}
export default passW

