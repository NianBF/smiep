<?php
session_start();

	require_once('../modelo/crud_Proveedor.php');
	require_once('../modelo/Proveedor.php');
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/actualizar.css">

</head>
<div class="contenedor">
	<span class="icon"><figure class=""><img src="../../home/img/favicon.png" alt="Logo SMIEP" width="170px"></figure></span>
<header class="header">
Cambia los datos del Proveedor
</header>
<body>
	<div class="tabla">
	<form action='../controlador/administrar_Proveedor.php' id="formulario" name="formulario" method='post'>
	
	<table>
		<tr>
			<input type='hidden' name='id_DocProv' value='<?php echo $Proveedor->getId_DocProv()?>'>
			<td class="text">PRIMER NOMBRE</td>
		</tr>
		<tr>
			<td> <input type='text' placeholder="PRIMER NOMBRE"  name='nombProv1' value='<?php echo $Proveedor->getNombProv1()?>'></td>
		</tr>

		<tr>
			<td class="text">SEGUNDO NOMBRE</td>
		</tr>
		<tr>
			<td> <input type='text' placeholder="SEGUNDO NOMBRE"  name='nombProv2' value='<?php echo $Proveedor->getNombProv2()?>'></td>
		</tr>

		<tr>
			<td class="text">PRIMER APELLIDO</td>
		</tr>
		<tr>
			<td> <input type='text' placeholder="PRIMER APELLIDO"  name='apeProv1' value='<?php echo $Proveedor->getApeProv1()?>'></td>
		</tr>

		<tr>
			<td class="text">SEGUNDO APELLIDO</td>
		</tr>
		<tr>
			<td> <input type='text' placeholder="SEGUNDO APELLIDO"  name='apeProv2' value='<?php echo $Proveedor->getApeProv2()?>'></td>
		</tr>

		<tr>
			<td class="text">EMPRESA</td>
		</tr>
		<tr>
			<td> <input type='text' placeholder="EMPRESA"  name='empresa' value='<?php echo $Proveedor->getEmpresa()?>'></td>
		</tr>
		<tr>
			<td class="text">DIRECCION</td>
		</tr>
		<tr>
			<td><input type='text' placeholder="DIRECCION	" name='direccion1' value='<?php echo $Proveedor->getDireccion1()?>'></td>
		</tr>
		<tr>
			<td class="text">DIRECCION</td>
		</tr>
		<tr>
			<td><input type='text' placeholder="(OPCIONAL) " name='direccion2' value='<?php echo $Proveedor->getDireccion2()?>' ></td>
		</tr>

		<tr>
			<td class="text">TELEFONO</td>
		</tr>
		<tr>
			<td><input type='tel' placeholder="TELEFONO" name='numTel1' value='<?php echo $Proveedor->getNumTel1()?>'></td>
		</tr>
		<tr>
			<td class="text">TELEFONO</td>
		</tr>
		<tr>
			<td><input type='tel' placeholder="(OPCIONAL)" name='numTel2' value='<?php echo $Proveedor->getNumTel2()?>'></td>
		</tr>
		<tr>
			<td class="text">CORREO</td>
		</tr>
		<tr>
			<td><input type='email' placeholder="ejemplo@email.co" name='email1' value='<?php echo $Proveedor->getEmail1()?>'></td>
		</tr>
		<tr>
			<td class="text">CORREO</td>
		</tr>
		<tr>
			<td><input type='email' placeholder="(OPCIONAL)" name='email2' value='<?php echo $Proveedor->getEmail2()?>'></td>
		</tr>
	
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<div class="boton">
	<input id="btn" name="btn"  type='submit' value='Guardar'>
	<a class="btn btn-outline-light" href="../vista/mostrar.php">Volver</a>
	</div>
	
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/actualizar.js"></script>	



</body>
</html>