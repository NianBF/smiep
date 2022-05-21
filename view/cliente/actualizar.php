<?php
session_start();
require_once('../../model/clienteCrud_Mdl.php');
require_once('../../model/clienteMdl.php');
	$crud= new CrudCliente();
	$Cliente=new Cliente();
	
	$dato = $_GET['id_cliDoc'];
    $Cliente=$crud->obtenerCliente($_GET['id_cliDoc']);
    	  
?>



<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    
	<title>Actualizar cliente</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/actualizar.css">

</head>
<body>
<div class="contenedor">
	<span class="icon"><figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure></span>
<header class="header">
Cambia los datos del Producto
</header>
	<div class="tabla">
	<form action='../../controller/clienteCtrl.php' name="formulario" method='post'>
	
	<table>
		<tr>
		<td class="text">documento</td>
		</tr><tr>
		<td><input type='text' placeholder="documento" id="doc" name='id_cliDoc' value='<?php echo $Cliente->getId_cliDoc()?>'></td>
		</tr>

		<tr>	
		<td class="text">primer nombre</td>
		</tr><tr>
		<td><input type='text' placeholder="primer nombre" id="nombreCli1" name='nombreCli1' value='<?php echo $Cliente->getNombreCli1()?>'></td>
		</tr>

		<tr>	
		<td class="text">segundo nombre</td>
		</tr><tr>
		<td><input type='text' placeholder="segundo nombre" id="nombreCli2" name='nombreCli2' value='<?php echo $Cliente->getNombreCli2()?>'></td>
		</tr>

		<tr>	
		<td class="text">primer apellido</td>
		</tr><tr>
		<td><input type='text' placeholder="primer apellido" id="apellidoCli1" name='apellidoCli1' value='<?php echo $Cliente->getApellidoCli1()?>'></td>
		</tr>

		<tr>	
		<td class="text">segundo apellido</td>
		</tr><tr>
		<td><input type='text' placeholder="segundo apellido" id="apellidoCli2" name='apellidoCli2' value='<?php echo $Cliente->getApellidoCli2()?>'></td>
		</tr>

		<tr>
			<td class="text">direccion</td>
			</tr><tr>
			<td><input type='text' id="direc" placeholder="direccion" name='direccionCli' value='<?php echo $Cliente->getDireccionCli()?>' ></td>
		</tr>

		<tr>
			<td class="text">telefono</td>
			</tr><tr>
			<td><input type='number' id="tel" placeholder="telefono" name='telCli' value='<?php echo $Cliente->getTelCli()?>' ></td>
		</tr>

		<tr>
			<td class="text">correo</td>
			</tr><tr>
			<td><input type='email' id="email" placeholder="ejemplo@email.co" name='emailCli' value='<?php echo $Cliente->getEmailCli()?>' ></td>
		</tr>

		<tr>
			<td class="text">fecha nacimiento</td>
			</tr><tr>
			<td><input type='date' id="FecNac" placeholder="fecha de nacimineto" name='fechaNac' value='<?php echo $Cliente->getFechaNac()?>' ></td>
		</tr>
	
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<div class="boton">
	<input class="btn btn-outline-light" id="btn" name="btn"  type='submit' value='Guardar'>
	<a class="btn btn-outline-light" href="mostrar.php">Volver</a>
	</div>
	
</form>
</div>
</div>
<script src="js/ingresar.js"></script>	
</body>
</html>