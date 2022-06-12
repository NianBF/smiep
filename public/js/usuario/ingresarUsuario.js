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

    var validarNomb1 = function(e){
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

    var validarApe1 = function(e){
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

    var validarNick = function(e){
        if(formulario.nick.value == 0){
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
                title: "completa el campo contraseña",
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
                title: "completa el campo ROL",
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
        validarDoc(e);
        validarApe1(e);
        validarNomb1(e);
        validarNick(e);
        validarEmail(e);
        validarPass(e);
        validarRol(e);
        validarEstado(e);
        validarTienda(e);
    };

   
    formulario.addEventListener("submit", validar);
    boton.addEventListener("click", mensaje);

   

}())