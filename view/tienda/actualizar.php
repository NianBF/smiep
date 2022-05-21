<?php

session_start();
require_once('../../model/tiendaCrud_Mdl.php');
require_once('../../model/tiendaMdl.php');
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
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    
	<title>Actualizar tienda</title>
	
	<link rel="stylesheet" type="text/css" href="../../public/css/actualizar.css">

</head>
<div class="contenedor">
	<span class="icon"><figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure></span>
<header class="header">
Cambia los datos de la tienda
</header>
<body>
	<div class="tabla">
	<form action='../../controller/productoCtrl.php' name="formulario" method='post'>
	
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../public/js/tienda/actualizarTienda.js"></script>	
</body>
</html>