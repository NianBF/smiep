import filtro from "../filtro.js";

let campoIdProd = document.querySelector("#buscar1");
let campoCodBar = document.querySelector("#buscar2");
let campoNombProd = document.querySelector("#buscar3");

filtro(campoIdProd,".idProd")
filtro(campoCodBar,".codBar")
filtro(campoNombProd,".nombProd")

