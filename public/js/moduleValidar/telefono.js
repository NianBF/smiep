const telefono = function(event){
    swal.fire({  
        title: "completa el campo numero de contacto",
        toast: true,position: "top-start",
        timer: 5000,timerProgressBar: true,
});
event.preventDefault();
}
export default telefono