<?php
session_start();
if (
	$_SESSION['email'] == null or $_SESSION["userName"] == null or
	$_SESSION["pass"] == null
) {
	header("location:../../index.php");
} else {
	//Se llama la categoría para poder mostrarla en el select
	require_once('../../model/categoriaCrud_Mdl.php');
	require_once('../../model/categoriaMdl.php');
	$crud = new CrudCategoria();
	$Categoria = new Categoria();
	$listaCategoria = $crud->mostrar();
	//Se llaman las clases de producto para obtener toda la información
	require_once('../../model/productoCRUD_Mdl.php');
	require_once('../../model/productoMdl.php');
	$crud = new CrudProducto();
	$Producto = new Producto();
	$Producto = $crud->obtenerProducto($_GET['id_prod']);


?>



	<!DOCTYPE html>
	<html lang="es">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
		<!--Color para navegador móvil-->
		<meta name="theme-color" content="#339999">
		<title>SMIEP</title>
		<link rel="stylesheet" href="../../public/css/formularios.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>

		<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">

	</head>

	<body>
		<header>
			<?php include_once("../plantillas/header.html"); ?>
		</header>
		<section class="initForm">

			<div class="btnMos">
				<a href='../producto/mostrarProd.php' class="back"><span><i class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
			</div>

			<div class="contForm">
				<form action='../../controller/productoCtrl.php' id="formulario" name="formulario" method='post'>

					<fieldset class="anuncio movAds">
						<div class="closer"><i class="fa-sharp fa-solid fa-xmark ex"></i></div>

						<legend>Advertencia</legend>
						<div>
							<article>
								<p>Debes llenar los dos campos del formulario, cada campo es necesario y obligaotrio para el
									correcto manejo de este nuevo dato a agregar en la base de datos.</p></br>
								<p><strong>ID Categoría:</strong> En este campo se va a ingresar un número que sea
									consecutivo a las categorías anteriores, debe ser diferente a los ya existentes.</p>
								</br>
								<p><strong>Categoría:</strong> Se debe ingresar el nombre de la nueva categoría, no debe ser
									igual a las ya existentes.</p>
							</article>
						</div>
					</fieldset>

					<fieldset class="contact-form">
						<legend>Agregar Productos</legend>

						<?php include_once("../plantillas/progres_bar.html"); ?>

						<section class="formularios">
							<div class="slide-page formPage">
								<h4 class="titleSect">Producto</h4>

								<div class="userBox">
									<input type='number' id='id_prod' name='id_prod' placeholder=" " value='<?php echo $Producto->getId_prod() ?>' required>
									<label for="id_prod">ID Producto</label>
								</div>

								<div class="userBox">
									<input type='text' id="prod" name='nombreProd' placeholder=" " value='<?php echo $Producto->getNombreProd() ?>' required>
									<label for="prod">Producto</label>
								</div>

								<div class="userBox">
									<input type='text' id="img" name='imgProd' placeholder=" " value='<?php echo $Producto->getImgProd() ?>'>
									<label for="img">imagen</label>
								</div>
								<div class="btn">
									<button class="firstNext next">Siguiente</button>
								</div>
							</div>

							<div class="page formPage">
								<h4 class="titleSect">Precio Disponibilidad</h4>
								<div class="userBox">
									<input type='number' id="precio" name='precio' placeholder=" " value='<?php echo $Producto->getPrecio() ?>' required>
									<label for="precio">Precio</label>
								</div>
								<div class="userBox">
									<input type='text' value='<?php echo $Producto->getPriceArrive(); ?>' id="priceArrive" name='priceArrive' placeholder=" " required>
									<label for="priceArrive">Precio de llegada</label>
								</div>
								<!-- <div class="userBox">
									<input type='number' id="cantMin" name='cantidadMin' placeholder=" " value="1" readonly>
									<label for="cantMin">cantidad minima</label>
								</div> -->

								<div class="userBox">
									<input type='number' id="cantDisp" name='cantidadDisp' placeholder=" " value="<?php echo $Producto->getCantidadDisp(); ?>" required>
									<label for="cantDisp">cantidad Disponible</label>
								</div>


								<div class="btn">
									<button class="prev-1 prev">Atrás</button>
									<button class="next-1 next">Siguiente</button>
								</div>
							</div>

							<div class="page page1 formPage">
								<div class="userBox">
									<input type='text' id="Presentacion" name='tipoPresentacion' placeholder=" " value='<?php echo $Producto->getTipoPresentacion() ?>'>
									<label for="apellido2">Presentacion</label>
								</div>

								<div class="userBox">
									<input type='text' id="descrip" name='descripcion' placeholder=" " value='<?php echo $Producto->getNombreProd() ?>'>
									<label for="descrip">Descripcion</label>
								</div>

								<div class="userBox">
									<input type='text' id="codBar" name='codBar' placeholder=" " value='<?php echo $Producto->getCodBar() ?>'>
									<label for="codBar">Cod Barras</label>
								</div>

								<div class="btn">
									<button class="prev-2 prev">Atrás</button>
									<button class="next-2 next">Siguiente</button>
								</div>
							</div>
							<div class="page infTi">

								<h4 class="titleSect">Usuario Categoria</h4>
								<div class="userBox">
									<input type='number' id="id_docUsu" name='id_docUsu' placeholder=" " value="<?php echo $Producto->getId_docUsu(); ?>" required>
									<label for="userName">Id Usuario</label>
								</div>

								<div class="userBox">

									<label for="id_cat" class="lSel">Categoria</label><br>
									<select id="id_cat" name='id_cat' required>
										<optgroup label="Seleccionado">
											<option value='<?php echo $Producto->getId_cat(); ?>' selected>
												<?php echo $Producto->getnCategoria();?>
											</option>

										</optgroup>
										<optgroup label="Categoria">
											<option value="0">Elige una opción</option>
											<?php foreach ($listaCategoria as $Categoria) { ?>
												<option value="<?php echo $Categoria->getid_Cat(); ?>">
													<?php echo $Categoria->getnCategoria(); ?></option>
											<?php } ?>
										</optgroup>
									</select>
								</div>

								<div class="userBox">
									<label for="id_estado" class="lSel">Estado</label><br>
									<select name="id_estado" id="estado" required>
										<optgroup label="Seleccionado">
											<option value='<?php echo $Producto->getId_estado() ?>' selected>
												<?php switch ($Producto->getId_estado()) {
													case 2:
														echo "Disponible";
														break;
													case 3:
														echo "No Disponible";
														break;
												} ?></option>
										</optgroup>
										<optgroup label="Estado">
											<option value="0">Elige una opción</option>
											<option value="2">Disponible</option>
											<option value="3">No Disponible</option>
										</optgroup>
									</select>
								</div>

								<input type='hidden' name='actualizar' value='actualizar'>

								<div class="btn">
									<button class="prev-3 prev">Atrás</button>
									<button type="submit" class="submit" id="btn-enviar">Enviar</button>
								</div>
							</div>
							<figure class="info add"><i class="fa-duotone fa-question"></i></figure>

						</section>
					</fieldset>
				</form>
			</div>

		</section>
		<footer>

			<?php include_once("../plantillas/footer.html"); ?>
		</footer>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="../../public/js/producto/stepsFormProd.js"></script>
		<script type="module" src="../../public/js/producto/validarDatosProd.js"></script>
	</body>

	</html>
<?php
} ?>