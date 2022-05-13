<?php
session_start();

require_once('../../model/productoCRUD_Mdl.php');
require_once('../../model/productoMdl.php');
$crud = new CrudProducto();
$Producto = new Producto();

$dato = $_GET['id_prod'];
$Producto = $crud->obtenerProducto($_GET['id_prod']);


?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../home/img/favicon.png" sizes="any">

	<title>Actualizar Producto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../home/css/actualizar.css">

</head>

<body>
	<div class="contenedor">
		<span class="icon">
			<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure>
		</span>
		<header class="header">
			Cambia los datos del Producto
		</header>

		<div class="tabla">
			<form action='../../controller/productoCtrl.php' name="formulario" method='post'>

				<table>
					<tr>
						<td class="text">ID PRODUCTO</td>
					</tr>
					<tr>
						<td> <input type='text' placeholder="ID PRODUCTO" id="id_prod" name='id_prod'
								value='<?php echo $Producto->getId_prod()?>'></td>
					</tr>

					<tr>
						<td class="text">IMAGEN</td>
					</tr>
					<tr>
						<td> <input type='text' placeholder="IMAGEN" id="img" name='imgProd'
								value='<?php echo $Producto->getImgProd()?>'></td>
					</tr>

					<tr>
						<td class="text">PRODUCTO</td>
					</tr>
					<tr>
						<td> <input type='text' placeholder="PRODUCTO" id="producto" name='nombreProd'
								value='<?php echo $Producto->getNombreProd()?>'></td>
					</tr>

					<tr>
						<td class="text">DESCRIPCIÓN</td>
					</tr>
					<tr>
						<td> <input type='text' placeholder="DESCRIPCIÓN" value="Sin detalles" id="descripcion"
								name='descripcion' value='<?php echo $Producto->getNombreProd()?>'></td>
					</tr>

					<tr>
						<td class="text">PRECIO</td>
					</tr>
					<tr>
						<td> <input type='text' placeholder="PRESIO" id="precio" name='precio'
								value='<?php echo $Producto->getPrecio()?>'></td>
					</tr>

					<tr>
						<td class="text">CANT MINIMA</td>
					</tr>
					<tr>
						<td> <input type='text' placeholder="CANTIDAD MINIMA" value="1" disabled readonly id="cantMin"
								name='cantidadMin' value='<?php echo $Producto->getCantidadMin()?>'></td>
					</tr>

					<tr>
						<td class="text">CANT DISPONIBLE</td>
					</tr>
					<tr>
						<td> <input type='text' placeholder="CANTIDAD DISPONIBLE" id="cantDisp" name='cantidadDisp'
								value='<?php echo $Producto->getCantidadDisp()?>'></td>
					</tr>

					<tr>
						<td class="text">TIPO PRESENTACION</td>
					</tr>
					<tr>
						<td> <input type='text' placeholder="TIPO PRESENTACION" id="tipoPresentacion"
								name='tipoPresentacion' value='<?php echo $Producto->getTipoPresentacion()?>'></td>
					</tr>

					<tr>
						<td class="text">ID CATEGORIA</td>
					</tr>
					<tr>
						<td> <input type='text' placeholder="ID CATEGORIA" id="id_cat" name='id_cat'
								value='<?php echo $Producto->getId_cat()?>'></td>
					</tr>

					<tr>
						<td class="text">ID ESTADO</td>
					</tr>
					<tr>
						<td> <input type='text' placeholder="ID ESTADO" id="id_estado" name='id_estado'
								value='<?php echo $Producto->getId_estado()?>'></td>
					</tr>


					<input type='hidden' name='actualizar' value'actualizar'>
				</table>
				<div class="boton">
					<input class="btn btn-outline-light" id="btn" name="btn" type='submit' value='Guardar'>
					<a class="btn btn-outline-light" href="mostrar.php">Volver</a>
				</div>

			</form>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="js/actualizar.js"></script>
</body>

</html>