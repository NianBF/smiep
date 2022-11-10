/**
 * Enviar productos al carrito, recibe los parámetros enviados desde el front con los datos consultados de la BD
 * @param {string} ref
 * @param {string} titulo
 * @param {string} precio
 * @param {string} cantidad
 * @param {string} imagen
 */
function envia_carrito(ref, titulo, precio, imagen, cantidad) {
  let parametros = {
    //Parámetros recibidos generan un array para mostrar en el carrito
    ref: ref,
    titulo: titulo,
    precio: precio,
    imagen: imagen,
    cantidad: cantidad,
  };
  $.ajax({
    //Envía los parámetros al archivo independiente para el carrito
    data: parametros,
    url: "model/cartMdl.php",
    type: "POST",
    beforeSend: function () { },
    success: function (response) {
      // todo ok
    },
    error: function (response, error) {
      //error
    },
  });
}

/**
 * Consultar productos en el carrito
 */
const cart = document.querySelector(".modal");
function consultar_carrito() {
  cart.style.display = "block";
  let parametros = {}; //Parámetros => Productos almacenados anteriormente
  $.ajax({
    //Función AJAX
    data: parametros,
    type: "POST",
    url: "model/modalCartMdl.php",
    success: function (data) {
      document.getElementById("mi_carrito").innerHTML = data;
    },
  });
}
function closeModal() {
  cart.style.display = "none";
} //Cerrar carrito
/**
 * Elimina todos los datos que se encuentran en el carrito
 */
function borrar_carrito() {
  let parametros = {};
  $.ajax({
    data: parametros,
    type: "POST",
    url: "model/delCartMdl.php",
    success: function (data) {
      consultar_carrito();
    },
  });
}
