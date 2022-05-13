
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

</head>	
<body>

<?php
//incluye la clase usuario y Crudusuario
require_once('../modelo/crud_Usuario.php');
require_once('../modelo/Usuario.php');
 
$crud= new CrudUsuario();
$Usuario= new Usuario();
 
	// si el elemento insertar no viene nulo llama al crud e inserta
	if (isset($_POST['insertar'])) {
		$Usuario->setId_doc($_POST['id_doc']);
		$Usuario->setNombre1($_POST['nombre1']);
		$Usuario->setNombre2($_POST['nombre2']);
		$Usuario->setApellido1($_POST['apellido1']);
		$Usuario->setApellido2($_POST['apellido2']);
		$Usuario->setUserName($_POST['userName']);
		$Usuario->setEmail($_POST['email']);
		$Usuario->setPass($_POST['pass']);
		$Usuario->setRol($_POST['rol']);
		$Usuario->setId_estado($_POST['id_estado']);
		$Usuario->setId_ti($_POST['id_ti']);
		
		//llama a la función insertar definida en el crud
		$crud->insertar($Usuario);
		header('Location: ../vista/mostrar.php');
		
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza
	}elseif(isset($_POST['actualizar'])){
		$Usuario->setId_doc($_POST['id_doc']);
		$Usuario->setNombre1($_POST['nombre1']);
		$Usuario->setNombre2($_POST['nombre2']);
		$Usuario->setApellido1($_POST['apellido1']);
		$Usuario->setApellido2($_POST['apellido2']);
		$Usuario->setUserName($_POST['userName']);
		$Usuario->setEmail($_POST['email']);
		$Usuario->setPass($_POST['pass']);
		$Usuario->setRol($_POST['rol']);
		$Usuario->setId_estado($_POST['id_estado']);
		$Usuario->setId_ti($_POST['id_ti']);
		
		$crud->actualizar($Usuario);
		header('Location: ../vista/mostrar.php');

					
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina
	}elseif ($_GET['accion']=='e') {
		//echo sweetAlert("Sucesso!", "As informações foram atualizadas.", "success");

		$idDelete = $_GET['id_doc'];

		echo "<script>
		Swal.fire({
		   title: 'Are you sure?',
			 text: 'You wont be able to revert this!',
			 icon: 'warning',
			 showCancelButton: true,
			 confirmButtonColor: '#3085d6',
			 cancelButtonColor: '#d33',
			 confirmButtonText: 'Yes, delete it!'
		 }).then((result) => {
		   /* Read more about isConfirmed, isDenied below */
		   if (result.isConfirmed) {
			
			 $.ajax({
				 type: 'GET',
				 url: '../controlador/administrar_Usuario.php?id_doc=".$idDelete."&accion=eliminar',
				 success: function(response)
				 {					
					window.location.href = '../vista/mostrar.php';					
				}
			 
			});
		   } else{
			window.location.href = '../vista/mostrar.php';
		   }
		 })
		 </script>";

	/*	
*/
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: ../vistas/actualizar.php');
	}
	elseif($_GET['accion']=='eliminar'){
		$crud->eliminar($_GET['id_doc']);
		
	}
?>


</body>
</html>