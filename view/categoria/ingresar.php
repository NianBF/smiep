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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
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

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/ingresar.js"></script>

 </body>
</html>

