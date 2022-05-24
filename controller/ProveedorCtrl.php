
<?php

require_once('../model/proveedorCrud_Mdl.php');
require_once('../model/proveedorMdl.php');
 
$crud= new crudProveedor();
$Proveedor = new Proveedor();
 
	// si el elemento insertar no viene nulo llama al crud e inserta
	if (isset($_POST['insertar'])) {
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
		//$Proveedor->setCreadoEn($_POST['creadoEn']);

		//llama a la función insertar definida en el crud
		$crud->insertar($Proveedor);
		header('Location: ../view/proveedor/mostrar.php');
		
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza
	}elseif(isset($_POST['actualizar'])){

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
		//$Proveedor->setCreadoEn($_POST['creadoEn']);
		
		$crud->actualizar($Proveedor);
		header('Location: ../view/proveedor/mostrar.php');

					
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina
	}elseif ($_GET['accion']=='e') {
		//echo sweetAlert("Sucesso!", "As informações foram atualizadas.", "success");

		$idDelete = $_GET['id_DocProv'];

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
				 url: '../controller/proveedorCtrl.php?id_DocProv=".$idDelete."&accion=eliminar',
				 success: function(response)
				 {					
					window.location.href = '../view/proveedor/mostrar.php';					
				}
			 
			});
		   } else{
			window.location.href = '../view/proveedor/mostrar.php';
		   }
		 })
		 </script>";

	/*	
*/
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: ../view/proveedor/actualizar.php');
	}
	elseif($_GET['accion']=='eliminar'){
		$crud->eliminar($_GET['id_DocProv']);
		
	}
?>
