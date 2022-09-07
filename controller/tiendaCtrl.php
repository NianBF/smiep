<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or $_SESSION["pass"] == null)
{
	header("location: ../index.php");
}else{ ?>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

</head>

<body>

    <?php

require_once('../model/tiendaCrud_Mdl.php');
require_once('../model/tiendaMdl.php');


$crud = new CrudTienda();
$Tienda = new Tienda();

$Tienda->setId_ti($_POST['id_ti']);
$Tienda->setNombreTienda($_POST['nombreTienda']);
$Tienda->setDireccionTi($_POST['direccionTi']);
$Tienda->setTelTi($_POST['telTi']);
$Tienda->setEmailTi($_POST['emailTi']);

if (isset($_POST['insertar'])){
	$crud->insertar($Tienda);
	header('Location: ../view/tienda/mostrarTi.php');

}
elseif (isset($_POST['actualizar'])){

	$crud->actualizar($Tienda);
	header('Location: ../view/tienda/mostrarTi.php');

}
elseif ($_GET['accion'] == 'e')
{

	$idDelete = $_GET['id_ti'];

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
				 url: '../controller/tiendaCtrl.php?id_ti=" . $idDelete . "&accion=eliminar',
				 success: function(response)
				 {					
					window.location.href = '../view/tienda/mostrarTi.php';					
				}
			 
			});
		   } else{
			window.location.href = '../view/tienda/mostrarTi.php';
		   }
		 })
		 </script>";

/*	 */
// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
}
elseif ($_GET['accion'] == 'a')
{
	header('Location: ../view/tienda/actualizar.php');
}
elseif ($_GET['accion'] == 'eliminar')
{
	$crud->eliminar($_GET['id_ti']);

}
}
?>


</body>

</html>