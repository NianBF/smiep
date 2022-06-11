let campoIdUsua =document.querySelector("#buscar1");
let campoUsua =document.querySelector("#buscar2");
let campoRol =document.querySelector("#buscar3");
let valores = document.querySelectorAll(".usuario");


/* filtro para buscar por id usuario */
campoIdUsua.addEventListener("input",function () {

    if(this.value.length> 0){

        for(var i=0; i< valores.length;i++){
            var valor=valores[i];
    
            /* en la sigiente linea indicamos el campo al que queremos realizar el filtro*/
            var tdNombre=valor.querySelector(".idUsua");
            var nombre=tdNombre.textContent;
            var expresion = new RegExp(this.value,"i");
    
    
            if(!expresion.test(nombre)){
                valor.classList.add("invisible");
            }
            else{
                valor.classList.remove("invisible");
            }
        }
     
    }else{
        for( var i=0;i<valores.length;i++){
            var valor = valores[i];
            valor.classList.remove("invisible"); 
        }
    }
    
})

/* filtro para buscar por usuario - nickname */
campoUsua.addEventListener("input",function () {

    if(this.value.length> 0){

        for(var i=0; i< valores.length;i++){
            var valor=valores[i];
    
            /* en la sigiente linea indicamos el campo al que queremos realizar el filtro*/
            var tdNombre=valor.querySelector(".nickUsua");
            var nombre=tdNombre.textContent;
            var expresion = new RegExp(this.value,"i");
    
    
            if(!expresion.test(nombre)){
                valor.classList.add("invisible");
            }
            else{
                valor.classList.remove("invisible");
            }
        }
     
    }else{
        for( var i=0;i<valores.length;i++){
            var valor = valores[i];
            valor.classList.remove("invisible"); 
        }
    }
    
})

/* filtro para buscar por rol */
campoRol.addEventListener("input",function () {

    if(this.value.length> 0){

        for(var i=0; i< valores.length;i++){
            var valor=valores[i];
    
            /* en la sigiente linea indicamos el campo al que queremos realizar el filtro*/
            var tdNombre=valor.querySelector(".rolUsua");
            var nombre=tdNombre.textContent;
            var expresion = new RegExp(this.value,"i");
    
    
            if(!expresion.test(nombre)){
                valor.classList.add("invisible");
            }
            else{
                valor.classList.remove("invisible");
            }
        }
     
    }else{
        for( var i=0;i<valores.length;i++){
            var valor = valores[i];
            valor.classList.remove("invisible"); 
        }
    }
    
})