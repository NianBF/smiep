const empresa = function (event) {
    swal.fire({  
        title: "completa el campo empresa",
        toast: true,
        position: "top-start",
        timer: 5000,timerProgressBar: true,
    });
    event.preventDefault();
}
export default empresa