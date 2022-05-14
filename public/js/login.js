(function(){

    var formulario = document.getElementsByName('forma')[0],
        elementos =formulario.elements,
        boton = document.getElementById('btn');

    var validarCorreo = function(e){
        if(formulario.email.value == 0){
            swal.fire({
                title: "completa el campo email",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            }); 
            e.preventDefault(); 

        }
    };

     var validarUserName = function(e){
        if(formulario.user.value == 0){
            swal.fire({
                title: "completa el campo nombre usuario",
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
                title: "completa el campo password",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            });
            e.preventDefault(); 

        }
    };




    
    
 

    var validar = function(e){
        validarCorreo(e);
        validarUserName(e);
        validarPass(e);
    };

    formulario.addEventListener("submit", validar);

   

}())