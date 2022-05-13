(function(){

    var formulario = document.getElementsByName('formulario')[0],
        elementos =formulario.elements,
        boton = document.getElementById('btn');

    var validarIdProv = function(e){
        if(formulario.id_Prov.value == 0){
            swal.fire({
                title: "completa el campo id proveedor",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            }); 
            e.preventDefault(); 

        }
    };

     var validarEmpresa = function(e){
        if(formulario.empresa.value == 0){
            swal.fire({
                title: "completa el campo empresa",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            });
            e.preventDefault(); 

        }
    };
    var validarNombProv1 = function(e){
        if(formulario.nombProv1.value == 0){
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

     var validarApeProv1 = function(e){
        if(formulario.apeProv1.value == 0){
            swal.fire({
                title: "completa el campo primer apellido ",
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
                title: "completa el campo direccion",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            }); 
            e.preventDefault(); 

        }
    };

     var validarTel = function(e){
        if(formulario.tel.value == 0){
            swal.fire({
                title: "completa el campo numero de telefonico",
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
 
 

    var validar = function(e){
        validarIdProv(e);
        validarEmpresa(e);
        validarNombProv1(e);
        validarApeProv1(e);
        validarDireccion(e);
        validarTel(e);
        validarEmail(e);
    };

    boton.addEventListener("click", mensaje);
    formulario.addEventListener("submit", validar);

   

}())