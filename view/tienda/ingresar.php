<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
	header("location:../../index.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
	<title> Ingresar Tienda</title>
	<link rel="stylesheet" href="../../public/css/agregar.css">
</head>

<body>
	<div class="contenedor">
		<span class="icon">
			<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="200rem"></figure>
		</span>
		<div class="contact-wrapper animated bounceInUp">
			<div class="contact-form">
				<h3>Agregar Tienda</h3>
				<form action='../../controller/tiendaCtrl.php' name="formulario" method='post'>
					<p>
						<label>ID Tienda</label>
						<input type='number' id="id_ti" name='id_ti' placeholder="ID Tienda">
					</p>
					<p>
						<label>Nombre</label>
						<input type='text' id="nomTi" name='nombreTienda' placeholder="Nombre Tienda">
					</p>
					<p>
						<label>Dirección</label>
						<input type='text' id="direc" name='direccionTi' placeholder="Dirección">
					</p>
					<p>
						<label>Telefono</label>
						<input type='number' id="tel" name='telTi' placeholder="Telefono">
					</p>
					<p class='block'>
						<label>Correo</label>
						<input type='email' id="email" name='emailTi' placeholder="ejemplo@smiep.com.co">
					</p>

					<input type='hidden' name='insertar' value='insertar'>
					<p class='block'>
						<button type='submit' id="btn" name="btn" value='Guardar'>
							Guardar
						</button>
					</p>
					<p class='block'>
						<a href='mostrarTi.php'><button type="button">Volver</button></a>
					</p>
				</form>
			</div>
		</div>

		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="../../public/js/tienda/ingresarTienda.js"></script>
</body>

</html>
<?php
}?>