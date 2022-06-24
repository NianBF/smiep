let campoIdCateg = document.querySelector("#buscar1");
let campoCateg = document.querySelector("#buscar2");
let valores = document.querySelectorAll(".categoria");

campoCateg.addEventListener("input", function () {
  if (this.value.length > 0) {
    for (var i = 0; i < valores.length; i++) {
      var valor = valores[i];

      /* en la sigiente linea indicamos el campo al que queremos realizar el filtro*/
      var tdNombre = valor.querySelector(".nombCat");
      var nombre = tdNombre.textContent;
      var expresion = new RegExp(this.value, "i");

      if (!expresion.test(nombre)) {
        valor.classList.add("invisible");
      } else {
        valor.classList.remove("invisible");
      }
    }
  } else {
    for (var i = 0; i < valores.length; i++) {
      var valor = valores[i];
      valor.classList.remove("invisible");
    }
  }
});

campoIdCateg.addEventListener("input", function () {
  if (this.value.length > 0) {
    for (var i = 0; i < valores.length; i++) {
      var valor = valores[i];

      /* en la sigiente linea indicamos el campo al que queremos realizar el filtro*/
      var tdNombre = valor.querySelector(".idCat");
      var nombre = tdNombre.textContent;
      var expresion = new RegExp(this.value, "i");

      if (!expresion.test(nombre)) {
        valor.classList.add("invisible");
      } else {
        valor.classList.remove("invisible");
      }
    }
  } else {
    for (var i = 0; i < valores.length; i++) {
      var valor = valores[i];
      valor.classList.remove("invisible");
    }
  }
});
