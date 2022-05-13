<?php

session_start();
	require_once('../modelo/crud_Tienda.php');
	require_once('../modelo/Tienda.php');
	$crud= new CrudTienda();
	$Tienda=new Tienda();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$dato = $_GET['id_ti'];
    $Tienda=$crud->obtenerTienda($_GET['id_ti']);
    	  
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../home/img/favicon.png" sizes="any">
    
	<title>Actualizar tienda</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/actualizar.css">

</head>
<div class="contenedor">
	<span class="icon"><figure class=""><img src="../../home/img/favicon.png" alt="Logo SMIEP" width="170px"></figure></span>
<header class="header">
Cambia los datos de la tienda
</header>
<body>
	<div class="tabla">
	<form action='../controlador/administrar_tienda.php' name="formulario" method='post'>
	
	<table>
		<tr>
			<input type='hidden' name='id_ti' value='<?php echo $Tienda->getId_ti()?>'>
			<td class="text">NOMBRE</td>
		</tr>
		<tr>
			<td> <input type='text' placeholder="NOMBRE TIENDA" id="nomTienda" name='nombreTienda' value='<?php echo $Tienda->getNombreTienda()?>'></td>
		</tr>
		<tr>
			<td class="text">DIRECCION</td>
		</tr>
		<tr>
			<td><input type='text' placeholder="DIRECCION" name='direccionTi' value='<?php echo $Tienda->getDireccionTi()?>' ></td>
		</tr>
	
		<tr>
			<td class="text">TELEFONO</td>
		</tr>
		<tr>
			<td><input type='text' placeholder="NUMERO DE CONTACTO" name='telTi' value='<?php echo $Tienda->getTelTi()?>' ></td>
		</tr>

		<tr>
			<td class="text">CORREO</td>
		</tr>
		<tr>
			<td><input type='text' placeholder="example@email.co" name='emailTi' value='<?php echo $Tienda->getEmailTi()?>' ></td>
		</tr>

		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<div class="boton">
	<input class="btn btn-outline-light" id="btn" name="btn"  type='submit' value='Guardar'>
	<a class="btn btn-outline-light" href="mostrar.php">Volver</a>
	</div>
	
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/ingresar.js"></script>	
</body>
</html>