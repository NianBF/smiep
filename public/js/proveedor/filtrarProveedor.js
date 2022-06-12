let campoIDProv =document.querySelector("#buscar1");
let campoEmpresaProv =document.querySelector("#buscar2");
let valores = document.querySelectorAll(".proveedor");


campoIDProv.addEventListener("input",function () {

    if(this.value.length> 0){
        for(var i=0; i< valores.length;i++){
            var valor=valores[i];

            /* en la sigiente linea indicamos el campo al que queremos realizar el filtro*/
            var tdNombre=valor.querySelector(".idProv");
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

campoEmpresaProv.addEventListener("input",function () {

    if(this.value.length> 0){
        for(var i=0; i< valores.length;i++){
            var valor=valores[i];

            /* en la sigiente linea indicamos el campo al que queremos realizar el filtro*/
            var tdNombre=valor.querySelector(".empresa");
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