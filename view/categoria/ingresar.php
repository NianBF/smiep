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
    
	<title> Ingresar categoria</title>
	<link rel="stylesheet" href="../../public/css/ingresar.css">
</head>
<body>
<div class="contenedor">
	<span class="icon"><figure class=""> <img src="../../img/favicon.png" alt="Logo SMIEP" width="170px" ></figure></span>
        
<header class="header">
Ingresa los datos de categoria
</header>
<div class="tabla">
<form  action='../../controller/categoriaCtrl.php' id="formulario" name="formulario" method='post'>
	<table class="tabla">
		<tr>
			<td class="text">ID categoria:</td>
			</tr>
			<tr>
			<td> <input type='text' id="id_cat" name='id_cat' placeholder="ID CATEGORIA"></td>
		</tr>
		<tr>
			<td class="text">CATEGORIA:</td>
		</tr>
		<tr>
			<td><input type='text' id="nCategoria" name='nCategoria' placeholder="NOMBRE CATEGORIA"></td>
		</tr>
	
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<div class="boton">
	<input type='submit' name="btn" id="btn" value='Guardar'>
	<a class="btn btn-outline-success" href="mostrar.php">Volver</a>
	</div>
</form>
</div>
</div>
<script src="../../public/js/categoria/ingresarCategoria.js"></script>

 </body>
</html>

