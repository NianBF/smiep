<?php
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null){
	header("location: ../index.php");
}else{
?>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

</head>	
<body>

<?php

require_once('../model/clienteCrud_mdl.php');
require_once('../model/ClienteMdl.php');

$crud = new CrudCliente();
$Cliente = new Cliente();

$Cliente->setId_cliDoc($_POST['id_cliDoc']);
$Cliente->setNombreCli1($_POST['nombreCli1']);
$Cliente->setNombreCli2($_POST['nombreCli2']);
$Cliente->setApellidoCli1($_POST['apellidoCli1']);
$Cliente->setApellidoCli2($_POST['apellidoCli2']);
$Cliente->setDireccionCli($_POST['direccionCli']);
$Cliente->setTelCli($_POST['telCli']);
$Cliente->setEmailCli($_POST['emailCli']);
$Cliente->setFechaNac($_POST['fechaNac']);

if (isset($_POST['insertar'])){ //Si se obtiene 'insertar' del $_POST llama a la función de insertar del CRUD
	$crud->insertar($Cliente);
	header('Location: ../view/cliente/mostrarCli.php');

}
elseif (isset($_POST['actualizar'])){ //Si la vista es 'actualizar' se llama a la función actualizar
	$crud->actualizar($Cliente);
	header('Location: ../view/cliente/mostrarCli.php');


}//si la variable GET=='e' llama al crud y envía una alerta, si la respesta es afirmativa se envía a 'eliminar'
elseif ($_GET['accion'] == 'e'){

	$idDelete = $_GET['id_cliDoc'];
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
				 url: '../controller/clienteCtrl.php?id_cliDoc=" . $idDelete . "&accion=eliminar',
				 success: function(response)
				 {					
					window.location.href = '../view/cliente/mostrarCli.php';					
				}
			 
			});
		   } else{
			window.location.href = '../view/cliente/mostrarCli.php';
		   }
		 })
		 </script>";
// si la variable accion enviada por GET es == 'a', envía a la vista actualizar.php 
}
elseif ($_GET['accion'] == 'a')
{
	header('Location: ../view/cliente/actualizar.php');
}
elseif ($_GET['accion'] == 'eliminar')
{
	$crud->eliminar($_GET['id_cliDoc']);

}
}
?>
</body>
</html>