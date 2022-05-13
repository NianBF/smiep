
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

</head>	
<body>

<?php

require_once('../modelo/crud_Cliente.php');
require_once('../modelo/Cliente.php');
 
$crud= new CrudCliente();
$Cliente= new Cliente();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un cliente
	if (isset($_POST['insertar'])) {
		$Cliente->setId_cliDoc($_POST['id_cliDoc']);
		$Cliente->setNombreCli1($_POST['nombreCli1']);
		$Cliente->setNombreCli2($_POST['nombreCli2']);
		$Cliente->setApellidoCli1($_POST['apellidoCli1']);
		$Cliente->setApellidoCli2($_POST['apellidoCli2']);
		$Cliente->setDireccionCli($_POST['direccionCli']);
		$Cliente->setTelCli($_POST['telCli']);
		$Cliente->setEmailCli($_POST['emailCli']);
		$Cliente->setFechaNac($_POST['fechaNac']);
		
		//llama a la función insertar definida en el crud
		$crud->insertar($Cliente);
		header('Location: ../vista/mostrar.php');
		


	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el cliente
	}elseif(isset($_POST['actualizar'])){
		$Cliente->setId_cliDoc($_POST['id_cliDoc']);
		$Cliente->setNombreCli1($_POST['nombreCli1']);
		$Cliente->setNombreCli2($_POST['nombreCli2']);
		$Cliente->setApellidoCli1($_POST['apellidoCli1']);
		$Cliente->setApellidoCli2($_POST['apellidoCli2']);
		$Cliente->setDireccionCli($_POST['direccionCli']);
		$Cliente->setEmailCli($_POST['emailCli']);
		$Cliente->setTelCli($_POST['telCli']);
		$Cliente->setFechaNac($_POST['fechaNac']);
		
		$crud->actualizar($Cliente);
		header('Location: ../vista/mostrar.php');

					
	// si la variable accion enviada por GET es == 'e' llama al crud y envia el mensaje si la respuesta es acepto se envia a eliminar y elimina el cliente
	}elseif ($_GET['accion']=='e') {
		//echo sweetAlert("Sucesso!", "As informações foram atualizadas.", "success");

		$idDelete = $_GET['id_cliDoc'];

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
				 url: '../controlador/administrar_Cliente.php?id_cliDoc=".$idDelete."&accion=eliminar',
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
		$crud->eliminar($_GET['id_cliDoc']);
		
	}
?>


</body>
</html>