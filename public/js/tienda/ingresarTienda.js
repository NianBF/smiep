(function(){

    var formulario = document.getElementsByName('formulario')[0],
        elementos =formulario.elements,
        boton = document.getElementById('btn');

    var validarid_ti = function(e){
        if(formulario.id_ti.value == 0){
            swal.fire({
                title: "completa el campo id tienda",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            }); 
            e.preventDefault(); 

        }
    };
    var validarNomti = function(e){
        if(formulario.nomTi.value == 0){
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
        if(formulario.direc.value == 0){
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
        if(formulario.tel.value == 0){
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
        if(formulario.email.value == 0){
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
            title: 'registro cargado con exito',timer: 90000,
            timerProgressBar:true, confirmButtonText:'Aceptar'});   
        };

    
    
 

    var validar = function(e){
        validarid_ti(e);
        validarNomti(e);
        validarDireccion(e);
        validarTelefono(e);
        validarEmail(e);
    };

    boton.addEventListener("click", mensaje);
    formulario.addEventListener("submit", validar);

   

}())