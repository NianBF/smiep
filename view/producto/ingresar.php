<?php
session_start();
if (
	$_SESSION['email'] == null or $_SESSION["userName"] == null or
	$_SESSION["pass"] == null
) {
	header("location:../../index.php");
} else {
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
								<p>Debes llenar los campos del formulario, cada campo es necesario y obligatorio para el
									correcto manejo de este nuevo dato a agregar en la base de datos.</p></br>
								<p><strong>ID Producto:</strong> En este campo se va a ingresar el ID Producto que sea
									consecutivo a las ID anteriores, debe ser diferente a los ya existentes.</p>
								</br>
								<p><strong>Nombre Producto:</strong> Se debe ingresar el nombre del producto, no debe ser
									igual a los ya existentes.</p>
								</br>
								<p><strong>Imangen Producto:</strong> Se debe poner el URL de la Imagen del producto o de lo contrario
								se pondra una imagen determinada.</p>
								</br>
								<strong>Precio y Cantidad Disponible:</strong> Se debe ingresar el valor de cuanto vale el producto,
								y la Cantidad Disponible de cuantos Productos se encuentran en Stock.</p>
								</br>
								<p><strong>Codigo de Barras:</strong> Se debe ingresar el Codigo de barras del producto.</p>
								</br>
								<p><strong>Categoria:</strong> En este campo se debe colocar que tipo de Categoria es el prodcuto <strong>(ej: GRANOS).</strong>
								</p>
								</br>
								<p><strong>Estado</strong> En este campo se debe colocar en que tipo se encuentra el producto <strong>(ej: DISPONIBLE).</strong>
								</p>

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
									<input type='number' id='id_prod' name='id_prod' placeholder=" " required>
									<label for="id_prod">ID Producto</label>
								</div>

								<div class="userBox">
									<input type='text' id="prod" name='nombreProd' placeholder=" " required>
									<label for="prod">Producto</label>
								</div>

								<div class="userBox">
									<input type='text' id="img" name='imgProd' placeholder=" " value="https://i.ibb.co/2s4D1rc/bags-SMIEP.png">
									<label for="img">imagen</label>
								</div>
								<div class="btn">
									<button class="firstNext next" id="boton1">Siguiente</button>
								</div>
							</div>

							<div class="page formPage">
								<h4 class="titleSect">Precio Disponibilidad</h4>
								<div class="userBox">
									<input type='number' id="precio" name='precio' placeholder=" " required>
									<label for="precio">Precio</label>
								</div>
							

								<div class="userBox">
									<input type='number' id="cantDisp" name='cantidadDisp' placeholder=" " required>
									<label for="cantDisp">cantidad Disponible</label>
								</div>


								<div class="btn">
									<button class="prev-1 prev" id="boton1">Atrás</button>
									<button class="next-1 next" id="boton1">Siguiente</button>
								</div>
							</div>

							<div class="page page1 formPage">
								


								<div class="userBox">
									<input type='text' id="codBar" name='codBar' placeholder=" ">
									<label for="codBar">Cod Barras</label>
								</div>

								<div class="btn">
									<button class="prev-2 prev" id="boton1">Atrás</button>
									<button class="next-2 next" id="boton1">Siguiente</button>
								</div>
							</div>
							<div class="page infTi">

								<h4 class="titleSect">Estado Categoria</h4>
								<div class="userBox">
									
									<label for="id_cat" class="lSel">Categoria</label><br>
									<select id="id_cat" name='id_cat' required>
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
										<optgroup label="Estado">
											<option selected value="0">Elige una opción</option>
											<option value="1">Disponible</option>
											<option value="2">No Disponible</option>
										</optgroup>
									</select>
								</div>

								<input type='hidden' name='insertar' value='insertar'>

								<div class="btn">
									<button class="prev-3 prev" id="boton1">Atrás</button>
									<button type="submit" class="submit" id="btn-enviar" id="boton1">Enviar</button>
								</div>
							</div>
							<figure class="info add"><i class="fa-duotone fa-question"></i></figure>

						</section>
					</fieldset>
				</form>
			</div>

		</section>
		<footer>
			<?php 
            include_once("../plantillas/btnModOsc.html");
            include_once("../plantillas/footer.html"); ?>
		</footer>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="../../public/js/producto/stepsFormProd.js"></script>
		<script type="module" src="../../public/js/producto/validarDatosProd.js"></script>
		<script src="../../public/js/darkMode/darkMode.js"></script>
	</body>

	</html>
<?php
} ?>