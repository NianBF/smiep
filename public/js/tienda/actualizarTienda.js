(function(){

    var formulario = document.getElementsByName('formulario')[0],
        elementos =formulario.elements,
        boton = document.getElementById('btn');

        var validarNomti = function(e){
            if(formulario.nomTienda.value == 0){
                swal.fire({
                    title: "completa el campo nombre tienda",
                    toast: true,
                    position: 'top-start',
                    timer: 5000,
                    timerProgressBar:true,  
                }); 
                e.preventDefault(); 
    
            }
        };

        var validarDireccion = function(e){
            if(formulario.direccionTi.value == 0){
                swal.fire({
                    title: "completa el campo direccion ",
                    toast: true,
                    position: 'top-start',
                    timer: 5000,
                    timerProgressBar:true,  
                });
                e.preventDefault(); 
    
            }
        };


        var validarTelefono = function(e){
            if(formulario.telTi.value == 0){
                swal.fire({
                    title: "completa el campo telefono",
                    toast: true,
                    position: 'top-start',
                    timer: 5000,
                    timerProgressBar:true,  
                });
                e.preventDefault(); 
    
            }
        };

        var validarEmail = function(e){
            if(formulario.emailTi.value == 0){
                swal.fire({
                    title: "completa el campo correo",
                    toast: true,
                    position: 'top-start',
                    timer: 5000,
                    timerProgressBar:true,  
                });
                e.preventDefault(); 
    
            }
        };

    var mensaje = function(){
        swal.fire({
            title: 'registro cargado con exito',
            timer: 90000000,
            timerProgressBar:true,
             confirmButtonText:'Aceptar',
            });
    }
 

    var validar = function(e){
        validarNomti(e);
        validarDireccion(e);
        validarTelefono(e);
        validarEmail(e);
    };
    formulario.addEventListener("submit", validar)
    boton.addEventListener("click", mensaje);
    

   

}())