(function(){

    var formulario = document.getElementsByName('formulario')[0],
        elementos =formulario.elements,
        boton = document.getElementById('btn');

    var validarid_prod = function(e){
        if(formulario.id_prod.value == 0){
            swal.fire({
                title: "completa el campo id producto",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            }); 
            e.preventDefault(); 

        }
    };

     var validarProducto = function(e){
        if(formulario.producto.value == 0){
            swal.fire({
                title: "completa el campo producto",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            });
            e.preventDefault(); 

        }
    };

    var validarPrecio = function(e){
        if(formulario.precio.value == 0){
            swal.fire({
                title: "completa el campo precio",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            });
            e.preventDefault(); 

        }
    };

    var validarCantMin = function(e){
        if(formulario.cantMin.value == 0){
            swal.fire({
                title: "completa el campo cantidad minima",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            });
            e.preventDefault(); 

        }
    };

    var validarCantDisp = function(e){
        if(formulario.cantDisp.value == 0){
            swal.fire({
                title: "completa el campo cantidad disponible",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            });
            e.preventDefault(); 

        }
    };

    var validarPresentacion = function(e){
        if(formulario.tipoPresentacion.value == 0){
            swal.fire({
                title: "completa el campo tipo de presentacion",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            });
            e.preventDefault(); 

        }
    };



    var validarIdCategoria = function(e){
        if(formulario.id_cat.value == 0){
            swal.fire({
                title: "completa el campo id categoria",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,  
            });
            e.preventDefault(); 

        }
    };


    var validarIdEstado = function(e){
        if(formulario.id_estado.value == 0){
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




    var mensaje = function(){
        swal.fire({
            title: 'registro cargado con exito',timer: 90000,
            timerProgressBar:true, confirmButtonText:'Aceptar'});   
        };

    
    
 

    var validar = function(e){
        validarid_prod(e);
        validarProducto(e);
        validarPrecio(e);
        validarCantMin(e);
        validarCantDisp(e);
        validarPresentacion(e);
        validarIdCategoria(e);
        validarIdEstado(e);
    
    };

    boton.addEventListener("click", mensaje);
    formulario.addEventListener("submit", validar);

   

}())