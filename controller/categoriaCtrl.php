<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
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

require_once('../model/categoriaCrud_Mdl.php');
require_once('../model/categoriaMdl.php');

$crud = new CrudCategoria();
$Categoria = new Categoria();

if (isset($_POST['insertar'])) //Si se obtiene 'insertar' del $_POST llama a la función de insertar del CRUD
{
	$Categoria->setId_cat($_POST['id_cat']);
	$Categoria->setnCategoria($_POST['nCategoria']);

	$crud->insertar($Categoria);
	header('Location: ../view/categoria/mostrarCat.php');

}
elseif ($_GET['accion'] == 'e')//si la variable GET=='e' llama al crud y envía una alerta, si la respesta es afirmativa se envía a 'eliminar'
{
	$idDelete = $_GET['id_Cat'];
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
				 url: '../controller/categoriaCtrl.php?id_Cat=" . $idDelete . "&accion=eliminar',
				 success: function(response)
				 {					
					window.location.href = '../view/categoria/mostrarCat.php';					
				}
			 
			});
		   } else{
			window.location.href = '../view/categoria/mostrarCat.php';
		   }
		 })
		 </script>";
}
elseif ($_GET['accion'] == 'a') // si la variable accion enviada por GET es == 'a', envía a la vista actualizar.php 
{
	header('Location: ../view/categoria/actualizar.php');
}
elseif ($_GET['accion'] == 'eliminar')
{
	$crud->eliminar($_GET['id_Cat']);

}
}
?>
</body>
</html>