let campoIdProd = document.querySelector("#buscar1");
let campoCodBar = document.querySelector("#buscar2");
let campoNombProd = document.querySelector("#buscar3");
let valores = document.querySelectorAll(".row");

campoIdProd.addEventListener("input", function () {
  if (this.value.length > 0) {
    for (var i = 0; i < valores.length; i++) {
      var valor = valores[i];

      /* en la sigiente linea indicamos el campo al que queremos realizar el filtro*/
      var tdNombre = valor.querySelector(".idProd");
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

campoCodBar.addEventListener("input", function () {
  if (this.value.length > 0) {
    for (var i = 0; i < valores.length; i++) {
      var valor = valores[i];

      /* en la sigiente linea indicamos el campo al que queremos realizar el filtro*/
      var tdNombre = valor.querySelector(".codBar");
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

campoNombProd.addEventListener("input", function () {
  if (this.value.length > 0) {
    for (var i = 0; i < valores.length; i++) {
      var valor = valores[i];

      /* en la sigiente linea indicamos el campo al que queremos realizar el filtro*/
      var tdNombre = valor.querySelector(".nombProd");
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
