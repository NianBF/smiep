<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    
	<title> Ingresar tienda</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../../public/css/ingresar.css">
</head>
<body>
<div class="contenedor">
	<span class="icon"><figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure></span>
<header class="header">
Ingresa los datos del Producto
</header>
<div class="tabla">
<form action='../../controller/tiendaCtrl.php' name="formulario" method='post'>
	<table class="tabla">
		<tr>
			<td class="text">ID TIENDA:</td>
		</tr>
		<tr>
			<td> <input type='number' id="id_ti" name='id_ti' placeholder="ID TIENDA"></td>
		</tr>

		<tr>
			<td class="text">NOMBRE:</td>
		</tr>
		<tr>
			<td> <input type='text' id="nomTi" name='nombreTienda' placeholder="NOMBRE TIENDA"></td>
		</tr>

		<tr>
			<td class="text">DIRECCION:</td>
		</tr>
		<tr>
			<td><input type='text' id="direc" name='direccionTi' placeholder="DiRECCION"></td>
		</tr>

		<tr>
			<td class="text">TELEFONO:</td>
		</tr>
		<tr>
			<td> <input type='number' id="tel" name='telTi' placeholder="TELEFONO"></td>
		</tr>

		<tr>
			<td class="text">CORREO:</td>
		</tr>
		<tr>
			<td> <input type='email' id="email" name='emailTi' placeholder="ejemplo@email.co"></td>
		</tr>
	
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<div class="boton">
	<input type='submit' class="btn btn-outline-light"  id="btn" name="btn" value='Guardar'>
	<a class="btn btn-outline-light" href="mostrar.php">Volver</a>
	</div>
</form>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../public/js/tienda/ingresarTienda.js"></script>
 </body>
</html>