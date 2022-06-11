<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">

	<title> Ingresar Producto</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/agregarpru.css">
</head>
<div class="contenedor">
<span class="icon">
			<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="200rem"></figure>
		</span>
	<div class="contact-wrapper animated bounceInUp">
	<div class="contact-form">
		<h3>Agregar Productos</h3>
		<form action="../../controller/productoCtrl.php" name="formulario" method="POST">
				<p>
					<label for="id_prod">ID Producto</label>
					<input type="text" placeholder="ID Producto" id="id_prod" name="id_prod">
				</P>

				<p>
					<label for="img">Imagen</label>
					<input type='text' placeholder="Imagen" id="img" name='imgProd'>
				</p>

				<p>
					<label for="codBar">Cod de Barras</label>
					<input type='text' placeholder="Codigo de Barras" id="codBar" name='codBar'>
				</p>

				<p>
					<label for="producto">Producto</label>
					<input type='text' placeholder="Producto" id="producto" name='nombreProd'>
				</p>

				<p>
					<label for="descripcion">Descripción</label>
					<input type='text' placeholder="Descripción" value="Sin detalles" id="descripcion" name='descripcion'>
				</p>

				<p>
					<label for="precio">Precio</label>
					<input type='text' placeholder="Precio" id="precio" name='precio'>
				</p>

				<p>
					<label for="cantMin">Cant Minima</label>
					<input type='text' placeholder="Cantidad Minima" id="cantMin" name='cantidadMin'>
				</p>

				<p>
					<label for="cantDisp">Cant Disponible</label>
					<input type='text' placeholder="Cantidad Disponible" id="cantDisp" name='cantidadDisp'>
				</p>

				<p>
					<label for="tipoPresentacion">Presentacion</label>
					<input type='text' placeholder="Tipo Presentacion" id="tipoPresentacion" name='tipoPresentacion'>
				</p>

				<p>
					<label for="creadoEn">Creado en</label>
					<input type='text' placeholder="Creado en" value="00000000" id="creadoEn" name='creadoEn'>
				</p>

				<p>
					<label for="id_docUsu">ID Usuario</label>
					<input type='text' placeholder="ID Usuario" id="id_docUsu" name='id_docUsu'>
				</p>

				<p>
					<label for="id_cat">ID Categoria</label>
					<input type='text' placeholder="ID Categoria" id="id_cat" name='id_cat'>
				</p>

				<p class="block">
					<label for="id_estado">ID Estado</label>
					<input type='text' placeholder="ID Estado" id="id_estado" name='id_estado'>
				</p>

				<input type='hidden' name='insertar' value='insertar'>

				<p class='block'>
					<button type='submit' id="btn" name="btn" value='Guardar'>
						Guardar
					</button>
				</p>
				<p class='block'>
					<a href='mostrar.php'><button type="button">Volver</button></a>
				</p>
		</form>
	</div>
</div>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="../../public/js/producto/ingresar.js"></script>
	</body>

</html>
<?php } ?>