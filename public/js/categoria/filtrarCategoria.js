let campoIdCateg = document.querySelector("#buscar1");
let campoCateg = document.querySelector("#buscar2");
let valores = document.querySelectorAll(".row");

campoCateg.addEventListener("input", function () {
  if (this.value.length > 0) {
    for (var i = 0; i < valores.length; i++) {
      var valor = valores[i];

        //en la sigiente linea indicamos el campo al que queremos realizar el filtro
      let TbNombre = valor.querySelector(".colName");
      let nombre = TbNombre.textContent;
      let expresion = new RegExp(this.value, "i");

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

       //en la sigiente linea indicamos el campo al que queremos realizar el filtro
      let tdNombre = valor.querySelector(".id");
      let nombre = tdNombre.textContent;
      let expresion = new RegExp(this.value, "i");

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