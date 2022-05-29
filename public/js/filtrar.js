var campoFiltro =document.querySelector("#filtrar-tabla");

campoFiltro.addEventListener("input",function(){
    
    var productos = document.querySelectorAll(".producto");

    if(this.value.length> 0){
        for(var i=0; i< productos.length;i++){
            var producto=productos[i];
            var tdNombre=producto.querySelector(".nomb_prod");
            var nombre=tdNombre.textContent;
            var expresion = new RegExp(this.value,"i");
    
    
            if(!expresion.test(nombre)){
                producto.classList.add("invisible");
            }
            else{
                producto.classList.remove("invisible");
            }
    
    
        }
    }else{
        for( var i=0;i<productos.length;i++){
            var producto = productos[i];
            producto.classList.remove("invisible"); 
        }
    }


})