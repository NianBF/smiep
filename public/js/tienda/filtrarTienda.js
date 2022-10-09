import filtro from "../filtro.js";

  let campoIdTienda = document.querySelector("#buscar1");
  let campoTienda = document.querySelector("#buscar2");

  filtro(campoIdTienda,".id")
  filtro(campoTienda,".nombTienda")

