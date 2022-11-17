<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
	header("location:../../index.php");
}
else
{

	require_once('../../model/proveedorCrud_Mdl.php');
	require_once('../../model/proveedorMdl.php');
	$crud = new CrudProveedor();
	$Proveedor = new Proveedor();

	$dato = $_GET['id_DocProv'];
	$Proveedor = $crud->obtenerProveedor($_GET['id_DocProv']);


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

	<body>
		<header>
			<?php include_once("../plantillas/header.html"); ?>
		</header>
		<section class="initForm">

			<div class="btnMos">
				<a href='../proveedor/mostrarProv.php' class="back"><span><i class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
			</div>
			<div class="contForm">
				<form action='../../controller/ProveedorCtrl.php' id="formulario" name="formulario" method='post'>

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
						<legend>Actualizar Proveedor</legend>

						<?php include_once("../plantillas/progres_bar.html"); ?>

						<section class="formularios">
							<div class="slide-page formPage">
								<h4 class="titleSect">Documento de Identidad</h4>
								<div class="userBox">
									<input type='number' name='id_DocProv' id="id_Prov" placeholder=" " value='<?php echo $Proveedor->getId_DocProv()?>' readonly>
									<label for="id_doc">ID Usuario</label>
								</div>
								<div class="btn">
									<button class="firstNext next" id="boton1">Siguiente</button>
								</div>
							</div>
							<div class="page formPage">
								<h4 class="titleSect">Nombres y Apellidos</h4>
								<div class="userBox">
									<input type='text' id="nombre1" name='nombProv1' placeholder=" " value='<?php echo $Proveedor->getNombProv1()?>' required>
									<label for="nombre1">Primer Nombre</label>
								</div>
								<div class="userBox">
									<input type='text' id="nombProv2" name='nombProv2' placeholder=" " value='<?php echo $Proveedor->getNombProv2()?>'>
									<label for="nombre2">Segundo Nombre</label>
								</div>

								<div class="userBox">
									<input type='text' id="apeProv1" name='apeProv1' placeholder=" " value='<?php echo $Proveedor->getApeProv1()?>' required>
									<label for="apellido1">Primer Apellido</label>
								</div>

								<div class="userBox">
									<input type='text' id="apeProv2" name='apeProv2' placeholder=" " value='<?php echo $Proveedor->getApeProv2()?>'>
									<label for="apellido2">Segundo Apellido</label>
								</div>
								<div class="btn">
									<button class="prev-1 prev" id="boton1">Atrás</button>
									<button class="next-1 next" id="boton1">Siguiente</button>
								</div>
							</div>
							<div class="page page1 formPage">
								<h4 class="titleSect">Información Empresa</h4>
								<div class="userBox">
									<input type='text' name='empresa' id="empresa" placeholder=" " value='<?php echo $Proveedor->getEmpresa()?>' required>
									<label for="userName">Empresa</label>
								</div>

								<div class="userBox">
									<input type='text' id="img" name='imgEmpresa' placeholder=" " value='<?php echo $Proveedor->getImgEmpresa()?>'>
									<label for="email">Imagen Empresa</label>
								</div>

								<div class="userBox">
									<input type='text' id="direc" name='direccion1' placeholder=" " value='<?php echo $Proveedor->getDireccion1()?>' required>
									<label for="direc">Direccion</label>
								</div>

								<div class="userBox">
									<input type='text' name='direccion2' placeholder=" " value='<?php echo $Proveedor->getDireccion2()?>'>
									<label for="direccion">Direccion (opcional)</label>
								</div>
								<div class="btn">
									<button class="prev-2 prev" id="boton1">Atrás</button>
									<button class="next-2 next" id="boton1">Siguiente</button>
								</div>
							</div>
							<div class="page infTi">
								<h4 class="titleSect">Información Empresa</h4>
								
								<div class="userBox">
									<input type='tel' id="tel" name='numTel1' placeholder=" " value='<?php echo $Proveedor->getNumTel1()?>' required>
									<label for="direc">Telefono</label>
								</div>

								<div class="userBox">
									<input type='tel' id="" name='numTel2' placeholder=" " value='<?php echo $Proveedor->getNumTel2()?>'>
									<label for="direccion">Telefono (opcional)</label>
								</div>
					
								<div class="userBox">
									<input type='email' id="email" name='email1' placeholder=" " value='<?php echo $Proveedor->getEmail1()?>' required>
									<label for="direc">correo</label>
								</div>

								<div class="userBox">
									<input type='email' id="" name='email2' placeholder=" " value='<?php echo $Proveedor->getEmail2()?>'>
									<label for="direccion">correo (opcional)</label>
								</div>
								<input type='hidden' name='actualizar' value='Actualizar'>

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

			<?php include_once("../plantillas/footer.html"); ?>
		</footer>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="../../public/js/proveedor/stepsFormProv.js"></script>
		<script type="module" src="../../public/js/proveedor/validarDatosProv.js"></script>
	</body>

</html>
<?php
}?>