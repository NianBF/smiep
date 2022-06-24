<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{

require_once('../../model/productoCRUD_Mdl.php');
require_once('../../model/productoMdl.php');
$crud = new CrudProducto();
$Producto = new Producto();

$dato = $_GET['id_prod'];
$Producto = $crud->obtenerProducto($_GET['id_prod']);


?>



<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">

	<title>Actualizar Producto</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/agregar.css">

</head>

<body>
	<div class="contenedor">
		<span class="icon">
			<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure>
		</span>
		<div class="contact-wrapper animated bounceInUp">
			<div class="contact-form">
			<h3>Cambia los datos del Producto</h3>
			<form action='../../controller/productoCtrl.php' name="formulario" method='post'>
				<p>
					<label for="id_prod">ID Producto</label>
					<input type='text' placeholder="ID Producto" id="id_prod" name='id_prod'
								value='<?php echo $Producto->getId_prod()?>'>
				</p>

				<p>
					<label for="img">Imagen</label>
					<input type='text' placeholder="Imagen" id="img" name='imgProd'
								value='<?php echo $Producto->getImgProd()?>'>
				</p>

				<p>
					<label for="producto">Producto</label>
					<input type='text' placeholder="Producto" id="producto" name='nombreProd'
								value='<?php echo $Producto->getNombreProd()?>'>
				</p>

				<p>
					<label for="descripcion">Descripción</label>
					<input type='text' placeholder="Descripción" value="Sin detalles" id="descripcion"
								name='descripcion' value='<?php echo $Producto->getNombreProd()?>'>
				</p>

				<p>
					<label for="precio">Precio</label>
					<input type='text' placeholder="Precio" id="precio" name='precio'
								value='<?php echo $Producto->getPrecio()?>'>
				</p>

				<p>
					<label for="cantMin">Cant Minima</label>
					<input type='text' placeholder="Cantidad Minima" value="1" readonly id="cantMin"
								name='cantidadMin' value='<?php echo $Producto->getCantidadMin()?>'>
				</p>

				<p>
					<label for="cantDisp">Cant Disponible</label>
					<input type='text' placeholder="Cantidad Disponible" id="cantDisp" name='cantidadDisp'
								value='<?php echo $Producto->getCantidadDisp()?>'>
				</p>

				<p>
					<label for="tipoPresentacion">Tipo Presentación</label>
					<input type='text' placeholder="Tipo Presentación" id="tipoPresentacion"
								name='tipoPresentacion' value='<?php echo $Producto->getTipoPresentacion()?>'>
				</p>

				<p>
					<label for="id_cat">ID Categoria</label>
					<input type='text' placeholder="ID Categoria" id="id_cat" name='id_cat'
								value='<?php echo $Producto->getId_cat()?>'>
				</p>

				<p>
					<label for="id_estado">ID Estado</label>
					<input type='text' placeholder="ID Estado" id="id_estado" name='id_estado'
								value='<?php echo $Producto->getId_estado()?>'>
				</p>
					<input type='hidden' name='actualizar' value='actualizar'>

					<p class='block'>
					<button type='submit' id="btn" name="btn" value='Guardar'>
						Guardar
					</button>
				</p>
				<p class='block'>
				<a href="mostrar.php"><button type="button">Volver</button></a>
				</p>
			</form>
			</div>
	</div>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="../../public/js/producto/actualizar.js"></script>
</body>
</html>
<?php } ?>