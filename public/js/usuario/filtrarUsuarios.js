let campoFiltro =document.querySelector("#filtrar-tabla");
let valores = document.querySelectorAll(".usuario");


let filtar = function () {

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
    
}



campoFiltro.addEventListener("input",filtar)