<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
	header("location:../../index.php");
}
else
{
    require_once('../../model/categoriaCrud_Mdl.php');
    require_once('../../model/categoriaMdl.php');
    $crud = new CrudCategoria();
    $Categoria = new Categoria();
    $listaCategoria = $crud->mostrar();
	require_once('../../model/productoCRUD_Mdl.php');
    require_once('../../model/productoMdl.php');
    $crud = new CrudProducto();
    $Producto = new Producto();
    $listaProducto = $crud->mostrar();

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
	<script async src="https://imgbb.com/upload.js" data-auto-insert="viewer-links"></script>

	<title> Ingresar Producto</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/agregar.css">
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
					<input type='text' placeholder="Imagen" id="img" name='imgProd'
						value="https://i.ibb.co/2s4D1rc/bags-SMIEP.png">
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
					<input type='text' placeholder="Descripción" value="Sin detalles" id="descripcion"
						name='descripcion'>
				</p>

				<p>
					<label for="precio">Precio</label>
					<input type='text' placeholder="Precio" id="precio" name='precio'>
				</p>

				<p>
					<label for="cantMin">Cant Minima</label>
					<input type='text' placeholder="Cantidad Minima" id="cantMin" name='cantidadMin' value="1" readonly>
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
					<label for="id_cat">Categoria</label>
					<select id="id_cat" name='id_cat'>
					<?php foreach ($listaCategoria as $Categoria)
    				{ ?><option value="<?php $Categoria->getid_Cat();?>">
					<?php echo $Categoria->getnCategoria();?></option><?php } ?>
					</select>
				</p>

				<p class="block">
					<label for="id_estado">Estado</label>
					<select id="id_estado" name='id_estado'>
					<?php foreach ($listaProducto as $Producto) {?>
					<option><?php echo $Producto->getId_estado();?></option><?php } ?>
				</select>
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
	<footer class="footer">
		<p>© S.M.I.E.P | 2022</p>
	</footer>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="../../public/js/producto/ingresar.js"></script>

	</body>

</html>
<?php
}?>