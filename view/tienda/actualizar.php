<?php
session_start();
if (
	$_SESSION['email'] == null or $_SESSION["userName"] == null or
	$_SESSION["pass"] == null
) {
	header("location:../../index.php");
} else {
	require_once('../../model/tiendaCrud_Mdl.php');
	require_once('../../model/tiendaMdl.php');
	$crud = new CrudTienda();
	$Tienda = new Tienda();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$dato = $_GET['id_ti'];
	$Tienda = $crud->obtenerTienda($_GET['id_ti']);


?>

	<!DOCTYPE html>
	<html lang="en">

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

		<header>
			<?php include_once("../plantillas/header.html"); ?>
		</header>
		<section class="initForm">

			<div class="btnMos">
				<a href='../tienda/mostrarTi.php' class="back"><span><i class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
			</div>

			<div class="contForm">


				<form action='../../controller/tiendaCtrl.php' id="formulario" name="formulario" method='post'>

					<fieldset class="anuncio movAds">
						<div class="closer"><i class="fa-sharp fa-solid fa-xmark ex"></i></div>

						<legend>Advertencia</legend>
						<div>
							<article>
								<p>Debes llenar los campos del formulario, cada campo es necesario y obligatorio para el
									correcto manejo de este nuevo dato a agregar en la base de datos.</p></br>
								<p><strong>ID Tienda:</strong>  En este campo se podra actualizar el ID de la tienda.</p>
								</br>
								<p><strong>Información Tienda:</strong> En estos cuatro campos se podra actualizar la informacion del nombre de la tienda, Dirección, Telefono y Correo, todos son obligatorios.</p>
							</article>
						</div>
					</fieldset>

					<fieldset class="contact-form">
						<legend>Actualizar Tienda</legend>

						<section>
							<div class="progress-bar">
								<div class="step">
									<p>Paso </p>
									<div class="bullet">
										<span>1</span>
									</div>
									<div class="check fas fa-check"></div>
								</div>
								<div class="step">
									<p>Fin</p>
									<div class="bullet">
										<span>2</span>
									</div>
									<div class="check fas fa-check"></div>
								</div>
							</div>
						</section>

						<section class="formularios">
							<div class="slide-page formPage">
								<h4 class="titleSect">Id Tienda</h4>
								<div class="userBox">
									<input type='number' id="id_ti" name='id_ti' placeholder=" " value='<?php echo $Tienda->getId_ti() ?>' required readonly>
									<label for="id_ti">ID Tienda</label>
								</div>
								<div class="btn">
									<button class="firstNext next" id="boton1">Siguiente</button>
								</div>
							</div>
							<div class="page formPage">
								<h4 class="titleSect">Información Tienda</h4>
								<div class="userBox">
									<input type='text' id="nombTi" name='nombreTienda' placeholder=" " value='<?php echo $Tienda->getNombreTienda() ?>'>
									<label for="nombTi">Nombre</label>
								</div>
								<div class="userBox">
									<input type='text' id="direc" name='direccionTi' placeholder=" " value='<?php echo $Tienda->getDireccionTi() ?>'>
									<label for="direc">Dirección</label>
								</div>

								<div class="userBox">
									<input type='number' id="tel" name='telTi' placeholder=" " value='<?php echo $Tienda->getTelTi() ?>'>
									<label for="apellido1">Telefono</label>
								</div>

								<div class="userBox">
									<input type='email' id="email" name='emailTi' placeholder=" " value='<?php echo $Tienda->getEmailTi() ?>'>
									<label for="email">Correo</label>
								</div>
								<input type='hidden' name='actualizar' value='actualizar'>

								<div class="btn">
									<button class="prev-1 prev" id="boton1">Atrás</button>
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
		<script src="../../public/js/darkMode/darkMode.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="../../public/js/tienda/stepsFormTi.js"></script>
		<script type="module" src="../../public/js/tienda/validarDatosTi.js"></script>

		</body>

	</html>
<?php
} ?>