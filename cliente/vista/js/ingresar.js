(function(){

    var formulario = document.getElementsByName('formulario')[0],
        elementos =formulario.elements,
        boton = document.getElementById('btn');

       


    var validarDoc = function(e){
        if(formulario.doc.value == 0){
            swal.fire({
                title: "completa el campo documento",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            }); 
            e.preventDefault(); 

        }
    };

   
    var validarNombreCli1 = function(e){
        if(formulario.nombreCli1.value == 0){
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

   

    var validarApellidoCli1 = function(e){
        if(formulario.apellidoCli1.value == 0){
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
                title: "completa el campo numero telefonico",
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

    var validarFecNac = function(e){
        if(formulario.FecNac.value == 0){
            swal.fire({
                title: "completa el campo fecha de nacimiento",
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
        validarDoc(e);
        validarNombreCli1(e);
        validarApellidoCli1(e);
        validarDireccion(e);
        validarTel(e);
        validarEmail(e);
        validarFecNac(e);
    };

    boton.addEventListener("click", mensaje);
    formulario.addEventListener("submit", validar);

   

}())