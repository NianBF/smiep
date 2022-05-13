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

	<title> Ingresar Producto</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../home/css/ingresar.css">
</head>
<div class="contenedor">
	<span class="icon">
		<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure>
	</span>
	<header class="header">
		Ingresa los datos del Producto
	</header>
	<div class="tabla">
		<form action='../../controller/productoCtrl.php' name="formulario" method='POST'>
			<table class="tabla">
				<tr>
					<td class="text">ID PRODUCTO</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="ID PRODUCTO" id="id_prod" name='id_prod'></td>
				</tr>

				<tr>
					<td class="text">IMAGEN</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="IMAGEN" id="img" name='imgProd'></td>
				</tr>

				<tr>
					<td class="text">CODBAR</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="CODIGO DE BARRAS" id="codBar" name='codBar'></td>
				</tr>

				<tr>
					<td class="text">PRODUCTO</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="PRODUCTO" id="producto" name='nombreProd'></td>
				</tr>

				<tr>
					<td class="text">DESCRIPCIÓN</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="DESCRIPCIÓN" value="Sin detalles" id="descripcion" name='descripcion'></td>
				</tr>

				<tr>
					<td class="text">PRECIO</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="PRECIO" id="precio" name='precio'></td>
				</tr>

				<tr>
					<td class="text">CANT MINIMA</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="CANTIDAD MINIMA" id="cantMin" name='cantidadMin'></td>
				</tr>

				<tr>
					<td class="text">CANT DISPONIBLE</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="CANTIDAD DISPONIBLE" id="cantDisp" name='cantidadDisp'></td>
				</tr>

				<tr>
					<td class="text">PRESENTACION</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="TIPO PRESENTACION" id="tipoPresentacion"
							name='tipoPresentacion'></td>
				</tr>

				<tr>
					<td class="text">CREADO EN</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="Creado en" value="00000000" id="creadoEn" name='creadoEn'></td>
				</tr>

				<tr>
					<td class="text">ID USUARIO</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="ID USUARIO" id="id_docUsu" name='id_docUsu'></td>
				</tr>

				<tr>
					<td class="text">ID CATEGORIA</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="ID CATEGORIA" id="id_cat" name='id_cat'></td>
				</tr>

				<tr>
					<td class="text">ID ESTADO</td>
				</tr>
				<tr>
					<td> <input type='text' placeholder="ID ESTADO" id="id_estado" name='id_estado'></td>
				</tr>

				<input type='hidden' name='insertar' value='insertar'>
			</table>
			<div class="boton">
				<input type='submit' class="btn btn-outline-light" id="btn" name="btn" value='Guardar'>
				<a class="btn btn-outline-light" href="mostrar.php">Volver</a>
			</div>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="../home/js/ingresar.js"></script>
	</body>

</html>