(function(){

    var formulario = document.getElementsByName('formulario')[0],
        elementos =formulario.elements,
        boton = document.getElementById('btn');

    var validarid_cat = function(e){
        if(formulario.id_cat.value == 0){
            swal.fire({
                title: "completa el campo nombre",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,
            });
            e.preventDefault(); 

        }
    };

    var validarcategoria = function(e){
        if(formulario.ncategoria.value == 0){
            swal.fire({
                title: "completa el campo autor",
                toast: true,
                position: 'top-start',
                timer: 5000,
	            timerProgressBar:true,
            });
            e.preventDefault(); 

        }
    };



    var CamposCompletos = function(e){
            swal.fire({
                title: "completa todos los campos",
                
                timer: 5000,
	            timerProgressBar:true,
            });
            e.preventDefault(); 

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
        validarid_cat(e);
        validarcategoria(e);
     
    };
    formulario.addEventListener("submit", validar)
    boton.addEventListener("click", mensaje);
    

   

}())