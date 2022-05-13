
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

</head>	
<body>

<?php

require_once('../modelo/crud_Categoria.php');
require_once('../modelo/Categoria.php');
 
$crud= new CrudCategoria();
$Categoria= new Categoria();
 
	
	if (isset($_POST['insertar'])) {
		$Categoria->setId_cat($_POST['id_cat']);
		$Categoria->setnCategoria($_POST['nCategoria']);
		
		
		$crud->insertar($Categoria);
		header('Location: ../vista/mostrar.php');
		
	}elseif ($_GET['accion']=='e') {
		
		$idDelete = $_GET['id_Cat'];

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
				 url: '../controlador/administrar_Categoria.php?id_Cat=".$idDelete."&accion=eliminar',
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
	}elseif($_GET['accion']=='a'){
		header('Location: ../vistas/actualizar.php');
	}
	elseif($_GET['accion']=='eliminar'){
		$crud->eliminar($_GET['id_Cat']);
		
	}
?>


</body>
</html>