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
    
	<title> Ingresar Proveedor</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/ingresar.css">
</head>
<div class="contenedor">
	<span class="icon"><figure class=""><img src="../../home/img/favicon.png" alt="Logo SMIEP" width="170px"></figure></span>
<header class="header">
Ingresa los datos del Proveedor
</header>
<div class="tabla">
<form action='../controlador/administrar_Proveedor.php' name="formulario" method='post'>
	<table class="tabla">
		<tr>
			<td  class="text">ID PROVEEDOR</td>
		</tr>
		<tr>
			<td> <input type='text' name='id_DocProv' id="id_Prov" placeholder="ID PROVEEDOR"></td>
		</tr>
		<tr>
			<td class="text">EMPRESA</td>
		</tr>
		<tr>
			<td> <input type='text' name='empresa' id="empresa" placeholder="EMPRESA"></td>
		</tr>
		<tr>
			<td class="text">IMAGEN EMPRESA</td>
		</tr>
		<tr>
			<td><input type='file' name='imgEmpresa'></td>
		</tr>

		<tr>	
		<td class="text">PRIMER NOMBRE</td>
		</tr>
		<tr>
		<td><input type='text' placeholder="PRIMER NOMBRE" id="nombProv1" name='nombProv1' ></td>
		</tr>

		<tr>	
		<td class="text">SEGUNDO NOMBRE</td>
		</tr>
		<tr>
		<td><input type='text' placeholder="SEGUNDO NOMBRE" id="nombProv2" name='nombProv2' ></td>
		</tr>

		<tr>	
		<td class="text">PRIMER APELLIDO</td>
		</tr>
		<tr>
		<td><input type='text' placeholder="PRIMER APELLIDO" id="apeProv1" name='apeProv1' ></td>
		</tr>

		<tr>	
		<td class="text">SEGUNDO APELLIDO</td>
		</tr>
		<tr>
		<td><input type='text' placeholder="SEGUNDO APELLIDO" id="apeProv2" name='apeProv2' ></td>
		</tr>

		<tr>
			<td class="text">DIRECCION</td>
		</tr>
		<tr>
			<td><input type='text' placeholder="DIRECCION" id="direc" name='direccion1' ></td>
		</tr>

		<tr>
			<td class="text">DIRECCION</td>
		</tr>
		<tr>
			<td><input type='text' placeholder="(OPCIONAL) " name='direccion2' ></td>
		</tr>

		<tr>
			<td class="text">TELEFONO</td>
		</tr>
		<tr>
			<td><input type='tel' placeholder="TELEFONO" id="tel" name='numTel1' ></td>
		</tr>

		<tr>
			<td class="text">TELEFONO</td>
		</tr>
		<tr>
			<td><input type='tel' placeholder="(OPCIONAL)" name='numTel2' ></td>
		</tr>

		<tr>
			<td class="text">CORREO</td>
		</tr>
		<tr>
			<td><input type='email' placeholder="ejemplo@email.co" id="email" name='email1' ></td>
		</tr>

		<tr>
			<td class="text">CORREO</td>
		</tr>
		<tr>
			<td><input type='email' placeholder="(OPCIONAL)" name='email2' ></td>
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