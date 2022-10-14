
import filtro from "../filtro.js";

let campoIdUsua = document.querySelector("#buscar1");
let campoUsua = document.querySelector("#buscar2");
let campoRol = document.querySelector("#buscar3");

filtro(campoIdUsua,".id");
filtro(campoUsua,".userName");
filtro(campoRol,".rol");


