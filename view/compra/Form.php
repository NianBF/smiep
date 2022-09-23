<?php
session_start();
if (
	$_SESSION['email'] == null or $_SESSION["userName"] == null or
	$_SESSION["pass"] == null
) {
	header("location:../../index.php");
} else {?>

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
				<a href='../inicio/menu.php' class="back"><span><i class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
			</div>
			<div class="contForm">
				<form action='../../controller/compraCtrl.php' id="formulario" name="formulario" method='post'>

					<fieldset class="anuncio movAds">
						<div class="closer"><i class="fa-sharp fa-solid fa-xmark ex"></i></div>

						<legend>Advertencia</legend>
						<div>
							<article>
								<p>Debes llenar los dos campos del formulario, cada campo es necesario y obligaotrio para el
									correcto manejo de este nuevo dato a agregar en la base de datos.</p></br>
								<p><strong>ID Compra:</strong> En este campo se va a ingresar el número que indica la factura mas
                                la inicial de la empresa al principio (ej: Ramo-> R00001).</p>
								</br>
								<p><strong>Valor Total:</strong> Ingrese el Total de la factura.</p></br>
								<p><strong>Descripcion:</strong> Ingrese el nombre de los productos que llegaron en el pedido.</p>
							</article>
						</div>
					</fieldset>

					<fieldset class="contact-form">
						<legend>Agregar Pedido</legend>

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
								<h4 class="titleSect">Pedido</h4>

								<div class="userBox">
									<input type='text' id='id_compra' name='id_compra' placeholder=" " required>
									<label for="id_compra">ID Compra</label>
								</div>

								<div class="userBox">
									<input type='number' id='cantidadCP' name='cantidadCP' placeholder=" " required>
									<label for="cantidadCP">Valor Total $</label>
								</div>

								<div class="userBox">
									<input type='text' id="descr" name='descr' placeholder=" " required>
									<label for="precio">Descripcion</label>
								</div>

								<div class="btn">
									<button class="firstNext next">Siguiente</button>
								</div>
							</div>

							<div class="page formPage">
								<h4 class="titleSect">Pedido</h4>
								<div class="userBox">
									<input type='number' id="docUsu" name='docUsu' value="<?php echo $_SESSION['docUsu']; ?>" required readonly>
									<label for="priceArrive">Documento Usuario</label>
								</div>

								<div class="userBox">
									<input type='number' id="docProv" name='docProv' placeholder=" " required>
									<label for="cantDisp">Documento Proveedor</label>
								</div>

								<input type='hidden' name='insertar' value='insertar'>

								<div class="btn">
									<button class="prev-1 prev">Atrás</button>
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
		<script src="../../public/js/compra/stepsFormComp.js"></script>
		<script src="../../public/js/compra/validarDatosComp.js"></script>
	</body>

	</html>

<?php } ?>