/* con este archivo se pretende reducir lineas de codigo
y reutilizar codigo, 

estado: pruebas*/


/* aqui incadicamos las vaiables que vamos a utilizar 
para realizar los filtros correspondientes 

-indicamos el 'id="filtrar-tabla"' que es el input el cual nos va a recibir
 la informacion de la tabla, y el cual lo llamos en la variable como camplo filtro
-indicamos la 'class="producto"' son los datos que tenemos almacenados en la tabla
 y el cual le indicamos como variable valores*/

let campoFiltro =document.querySelector("#filtrar-tabla");
let valores = document.querySelectorAll(".producto");
