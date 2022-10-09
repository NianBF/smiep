import filtro from "../filtro.js";

let campoIDProv = document.querySelector("#buscar1");
let campoEmpresaProv = document.querySelector("#buscar2");

filtro(campoIDProv,".idProv")
filtro(campoEmpresaProv,".empresa")