<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../home/img/favicon.png" sizes="any">
    
	<title> Ingresar cliente</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/ingresar.css">
</head>
<body>
<div class="contenedor">
	<span class="icon"><figure class=""><img src="../../home/img/favicon.png" alt="Logo SMIEP" width="170px"></figure></span>
<header class="header">
Ingresa los datos del cliente
</header>
<div class="tabla">
<form action='../controlador/administrar_Cliente.php' name="formulario" method='post'>
	<table>
	<tr>
		<td class="text">documento</td>
		</tr><tr>
		<td><input type='text' id="doc" placeholder="documento" name='id_cliDoc'></td>
		</tr>

		<tr>	
		<td class="text">primer nombre</td>
		</tr><tr>
		<td><input type='text' placeholder="primer nombre" id="nombreCli1" name='nombreCli1' ></td>
		</tr>

		<tr>	
		<td class="text">segundo nombre</td>
		</tr><tr>
		<td><input type='text' placeholder="segundo nombre"  name='nombreCli2' ></td>
		</tr>

		<tr>	
		<td class="text">primer apellido</td>
		</tr><tr>
		<td><input type='text' placeholder="primer apellido" id="apellidoCli1" name='apellidoCli1' ></td>
		</tr>

		<tr>	
		<td class="text">segundo apellido</td>
		</tr><tr>
		<td><input type='text' placeholder="segundo apellido" name='apellidoCli2' ></td>
		</tr>

		<tr>
			<td class="text">direccion</td>
			</tr><tr>
			<td><input type='text' placeholder="direccion" id="direc" name='direccionCli' ></td>
		</tr>

		<tr>
			<td class="text">telefono</td>
			</tr><tr>
			<td><input type='text' id="tel" placeholder="telefono" name='telCli' ></td>
		</tr>

		<tr>
			<td class="text">correo</td>
			</tr><tr>
			<td><input type='email' id="email" placeholder="ejemplo@email.co" name='emailCli' ></td>
		</tr>

		<tr>
			<td class="text">fecha nacimiento</td>
			</tr><tr>
			<td><input type='date' id="FecNac" name='fechaNac' ></td>
		</tr>
	
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<div class="boton">
	<input type='submit' class="btn btn-outline-light"  id="btn" name="btn" value='Guardar'>
	<a class="btn btn-outline-light" href="mostrar.php">Volver</a>
	</div>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/ingresar.js"></script>



 </body>
</html>