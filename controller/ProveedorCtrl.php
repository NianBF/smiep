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

</html>
<?php 
require_once('../model/proveedorCrud_Mdl.php');
require_once('../model/proveedorMdl.php');

$crud = new CrudProveedor();
$Proveedor = new Proveedor();

$Proveedor->setId_DocProv($_POST['id_DocProv']);
$Proveedor->setEmpresa($_POST['empresa']);
$Proveedor->setImgEmpresa($_POST['imgEmpresa']);
$Proveedor->setNombProv1($_POST['nombProv1']);
$Proveedor->setNombProv2($_POST['nombProv2']);
$Proveedor->setApeProv1($_POST['apeProv1']);
$Proveedor->setApeProv2($_POST['apeProv2']);
$Proveedor->setDireccion1($_POST['direccion1']);
$Proveedor->setDireccion2($_POST['direccion2']);
$Proveedor->setNumTel1($_POST['numTel1']);
$Proveedor->setNumTel2($_POST['numTel2']);
$Proveedor->setEmail1($_POST['email1']);
$Proveedor->setEmail2($_POST['email2']);

if (isset($_POST['insertar'])){
	//llama a la función insertar definida en el crud
	date_default_timezone_set("America/Bogota");
	$Proveedor->setCreadoEn(date("Y-m-d"));
	$crud->insertar($Proveedor);
	header('Location: ../view/proveedor/mostrarProv.php');
}elseif (isset($_POST['actualizar'])){
	$crud->actualizar($Proveedor);
	header('Location: ../view/proveedor/mostrarProv.php');
}elseif ($_GET['accion'] == 'e'){

	$idDelete = $_GET['id_DocProv'];

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
		   if (result.isConfirmed) {
			
			 $.ajax({
				 type: 'GET',
				 url: '../controller/ProveedorCtrl.php?id_DocProv=" . $idDelete . "&accion=eliminar',
				 success: function(response)
				 {					
					window.location.href = '../view/proveedor/mostrarProv.php';					
				}
			 
			});
		   } else{
			window.location.href = '../view/proveedor/mostrarProv.php';
		   }
		 })
		 </script>";

// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
}
elseif ($_GET['accion'] == 'a')
{
	header('Location: ../view/proveedor/actualizar.php');
}
elseif ($_GET['accion'] == 'eliminar')
{
	$crud->eliminar($_GET['id_DocProv']);

}
}
?>
