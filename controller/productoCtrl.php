<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
	header("location: ../index.php");
}else{ ?>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

</head>	
<body>

<?php
//incluye la clase producto y Crudproducto
require_once('../model/productoCRUD_Mdl.php');
require_once('../model/productoMdl.php');


$crud = new CrudProducto();
$Producto = new Producto();

date_default_timezone_set("America/Bogota");
$Producto->setId_prod($_POST['id_prod']);
$Producto->setImgProd($_POST['imgProd']);
$Producto->setCodBar($_POST['codBar']);
$Producto->setNombreProd($_POST['nombreProd']);
$Producto->setDescripcion($_POST['descripcion']);
$Producto->setPrecio($_POST['precio']);
//La fecha será un valor actual
$Producto->setCantidadDisp($_POST['cantidadDisp']);
$Producto->setTipoPresentacion($_POST['tipoPresentacion']);
$Producto->setCreadoEn(date("Y-m-d H:i:s"));
$Producto->setId_docUSu($_SESSION["docUsu"]);
$Producto->setId_cat($_POST['id_cat']);
$Producto->setId_estado($_POST['id_estado']);
$Producto->setPriceArrive($_POST['priceArrive']);
$Producto->setEstado($_POST['tEstado']);

if (isset($_POST['insertar']))
{
	//llama a la función insertar definida en el crud si el POST es Insertar
	$crud->insertar($Producto);
	header('Location: ../view/producto/mostrarProd.php');

}
elseif (isset($_POST['actualizar']))
{//llama a la función actualizar definida en el crud si el POST es Actualizar
	$crud->actualizar($Producto);
	header('Location: ../view/producto/mostrarProd.php');

}
elseif ($_GET['accion'] == 'e'){// si la variable accion enviada por GET es == 'e' llama al crud y elimina
	$idDelete = $_GET['id_prod'];
	echo "<script>
		Swal.fire({
			title: '¿Está seguro?',
			text: 'No se podrá revertir esta acción!',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Sí, Eliminar!'
		 }).then((result) => {
		   /* Read more about isConfirmed, isDenied below */
		   if (result.isConfirmed) {
			
			 $.ajax({
				 type: 'GET',
				 url: '../controller/productoCtrl.php?id_prod=" . $idDelete . "&accion=eliminar',
				 success: function(response)
				 {					
					window.location.href = '../view/producto/mostrarProd.php';					
				}
			 
			});
		   } else{
			window.location.href = '../view/producto/mostrarProd.php';
		   }
		 })
		 </script>";
// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
}
elseif ($_GET['accion'] == 'a')
{
	header('Location: ../view/producto/actualizar.php');
}
elseif ($_GET['accion'] == 'eliminar')
{
	$crud->eliminar($_GET['id_prod']);

}
}
?>


</body>
</html>