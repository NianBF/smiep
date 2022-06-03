<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{

	require_once('../../model/proveedorCrud_Mdl.php');
	require_once('../../model/proveedorMdl.php');
	$crud= new CrudProveedor();
	$Proveedor=new Proveedor();
	
	$dato = $_GET['id_DocProv'];
    $Proveedor=$crud->obtenerProveedor($_GET['id_DocProv']);
    	  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../home/img/favicon.png" sizes="any">
	<title>Actualizar Proveedor</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/agregarpru.css">

</head>

<body>
<div class="contenedor">
		<span class="icon">
			<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure>
		</span>
		<div class="contact-wrapper animated bounceInUp">
			<div class="contact-form">
			<h3>Cambia los datos del Proveedor</h3>
	<form action='../../controller/ProveedorCtrl.php' id="formulario" name="formulario" method='post'>
		<p>
			<label>Primer Nombre</label>
			<input type='hidden' name='id_DocProv' value='<?php echo $Proveedor->getId_DocProv()?>'>
			<input type='text' placeholder="Primer Nombre"  name='nombProv1' value='<?php echo $Proveedor->getNombProv1()?>'>
		</p>
		<p>
			<label>Segundo Nombre</label>
			<input type='text' placeholder="Segundo Nombre"  name='nombProv2' value='<?php echo $Proveedor->getNombProv2()?>'>
		</p>
		<p>
			<label>Primer Apellido</label>
			<input type='text' placeholder="Primer Apellido"  name='apeProv1' value='<?php echo $Proveedor->getApeProv1()?>'>
		</p>
		<p>
			<label>Segundo Nombre</label>
			<input type='text' placeholder="Segundo Apellido"  name='apeProv2' value='<?php echo $Proveedor->getApeProv2()?>'>
		</p>
		<p>
			<label>Empresa</label>
			<input type='text' placeholder="Empresa"  name='empresa' value='<?php echo $Proveedor->getEmpresa()?>'>
		</p>
		<p>
			<label>Dirección</label>
			<input type='text' placeholder="Dirección" name='direccion1' value='<?php echo $Proveedor->getDireccion1()?>'>
		</p>
		<p>
			<label>Dirección Opc</label>
			<input type='text' placeholder="(Opcional) " name='direccion2' value='<?php echo $Proveedor->getDireccion2()?>'>
		</p>
		<p>
			<label>Telefono</label>
			<input type='tel' placeholder="Telefono" name='numTel1' value='<?php echo $Proveedor->getNumTel1()?>'>
		</p>
		<p>
			<label>Telefono Opc</label>
			<input type='tel' placeholder="(Opcional)" name='numTel2' value='<?php echo $Proveedor->getNumTel2()?>'>
		</p>
		<p>
			<label>Correo</label>
			<input type='email' placeholder="ejemplo@smiep.com.co" name='email1' value='<?php echo $Proveedor->getEmail1()?>'>
		</p>
		<p class='block'>
			<label>Correo Opc</label>
			<input type='email' placeholder="(Opcional)" name='email2' value='<?php echo $Proveedor->getEmail2()?>'>
		</p>

		<input type='hidden' name='actualizar' value='Actualizar'>

		<p class='block'>
			<button type='submit' id="btn" name="btn" value='Guardar'>
			Guardar
			</button>
		</p>
		<p class='block'>
			<a href="mostrar.php"><button type="button">Volver</button></a>
		</p>
	
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../public/js/proveedor/actualizarProveedor.js"></script>	



</body>
</html>
<?php } ?>