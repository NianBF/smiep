(function(){

    var formulario = document.getElementsByName('formulario')[0],
        elementos =formulario.elements,
        boton = document.getElementById('btn');

       
        var validarNombre1 = function(e){
            if(formulario.nomb1.value == 0){
                swal.fire({
                    title: "completa el campo primer nombre",
                    toast: true,
                    position: 'top-start',
                    timer: 5000,
                    timerProgressBar:true,  
                }); 
                e.preventDefault(); 
    
            }
        };
        var validarApellido1 = function(e){
            if(formulario.ape1.value == 0){
                swal.fire({
                    title: "completa el campo primer apellido",
                    toast: true,
                    position: 'top-start',
                    timer: 5000,
                    timerProgressBar:true,  
                }); 
                e.preventDefault(); 
    
            }
        };
    var validarUsua = function(e){
        if(formulario.usua.value == 0){
            swal.fire({
                title: "completa el campo usuario",
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
    var validarPass = function(e){
        if(formulario.pass.value == 0){
            swal.fire({
                title: "completa el campo numero contraseña",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            }); 
            e.preventDefault(); 

        }
    };
    var validarRol = function(e){
        if(formulario.rol.value == 0){
            swal.fire({
                title: "completa el campo rol",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            }); 
            e.preventDefault(); 

        }
    };
    var validarEstado = function(e){
        if(formulario.estado.value == 0){
            swal.fire({
                title: "completa el campo id estado",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            }); 
            e.preventDefault(); 

        }
    };
    var validarTienda = function(e){
        if(formulario.idTi.value == 0){
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
    var mensaje = function(){
        swal.fire({
            title: 'registro cargado con exito',timer: 90000,
            timerProgressBar:true, confirmButtonText:'Aceptar'});   
        };

    var validar = function(e){
        validarNombre1(e);
        validarApellido1(e);
        validarUsua(e);
        validarPass(e);
        validarEmail(e);
        validarRol(e);
        validarEstado(e);
        validarTienda(e);
    };

    boton.addEventListener("click", mensaje);
    formulario.addEventListener("submit", validar);

   

}())