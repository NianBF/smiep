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
//incluye la clase usuario y Crudusuario
require_once('../model/usuarioCrud_Mdl.php');
require_once('../model/usuarioMdl.php');

$crud = new CrudUsuario();
$Usuario = new Usuario();

$Usuario->setId_doc($_POST['id_doc']);
$Usuario->setNombre1($_POST['nombre1']);
$Usuario->setNombre2($_POST['nombre2']);
$Usuario->setApellido1($_POST['apellido1']);
$Usuario->setApellido2($_POST['apellido2']);
$Usuario->setUserName($_POST['userName']);
$Usuario->setEmail($_POST['email']);
$Usuario->setPass($_POST['pass']);
$Usuario->setId_estado($_POST['id_estado']);
$Usuario->setId_ti($_POST['id_ti']);

// si el elemento insertar no viene nulo llama al crud e inserta
if (isset($_POST['insertar']))
{
	//llama a la función insertar definida en el crud
	
	$Usuario->setRol($_POST['rol']);
	$crud->insertar($Usuario);
	header('Location: ../view/usuario/mostrarUsu.php');

// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza
}
elseif (isset($_POST['actualizar']))
{
	$crud->actualizar($Usuario);
	header('Location: ../view/usuario/mostrarUsu.php');

// si la variable accion enviada por GET es == 'e' llama al crud y elimina
}
elseif ($_GET['accion'] == 'e')
{
	//echo sweetAlert("Sucesso!", "As informações foram atualizadas.", "success");

	$idDelete = $_GET['id_doc'];

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
				 url: '../controller/usuarioCtrl.php?id_doc=" . $idDelete . "&accion=eliminar',
				 success: function(response)
				 {					
					window.location.href = '../view/usuario/mostrar.php';					
				}
			 
			});
		   } else{
			window.location.href = '../view/usuario/mostrar.php';
		   }
		 })
		</script>";

/*	 */
// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
}
elseif ($_GET['accion'] == 'a')
{
	header('Location: ../view/usuario/actualizar.php');
}
elseif ($_GET['accion'] == 'eliminar')
{
	$crud->eliminar($_GET['id_doc']);

}
}
?>


</body>
</html>