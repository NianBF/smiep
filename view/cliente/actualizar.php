<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
	header("location:../../index.php");
}
else
{	require_once('../../model/clienteCrud_mdl.php');	require_once('../../model/ClienteMdl.php');
	$crud = new CrudCliente();
	$Cliente = new Cliente();

	$dato = $_GET['id_cliDoc'];
	$Cliente = $crud->obtenerCliente($_GET['id_cliDoc']);


?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">

	<title>Actualizar Cliente</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/agregar.css">

</head>

<body>
	<div class="contenedor">
		<span class="icon">
			<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure>
		</span>
		<div class="contact-wrapper animated bounceInUp">
			<div class="contact-form">
				<h3>Cambia los datos del Cliente</h3>
				<form action='../../controller/clienteCtrl.php' name="formulario" method='post'>
					<p>
						<label for="doc">Documento</label>
						<input type='text' placeholder="Documento" id="doc" name='id_cliDoc'
							value='<?php echo $Cliente->getId_cliDoc()?>'>
					</p>
					<p>
						<label for="nombreCli1">Primer Nombre</label>
						<input type='text' placeholder="Primer Nombre" id="nombreCli1" name='nombreCli1'
							value='<?php echo $Cliente->getNombreCli1()?>'>
					</p>
					<p>
						<label for="nombreCli2">Segundo Nombre</label>
						<input type='text' placeholder="Segundo Nombre" id="nombreCli2" name='nombreCli2'
							value='<?php echo $Cliente->getNombreCli2()?>'>
					</p>
					<p>
						<label for="apellidoCli1">Primer Apellido</label>
						<input type='text' placeholder="Primer Apellido" id="apellidoCli1" name='apellidoCli1'
							value='<?php echo $Cliente->getApellidoCli1()?>'>
					</p>
					<p>
						<label for="apellidoCli2">Segundo Apellido</label>
						<input type='text' placeholder="Segundo Apellido" id="apellidoCli2" name='apellidoCli2'
							value='<?php echo $Cliente->getApellidoCli2()?>'>
					</p>
					<p>
						<label for="direc">Dirección</label>
						<input type='text' id="direc" placeholder="Dirección" name='direccionCli'
							value='<?php echo $Cliente->getDireccionCli()?>'>
					</p>
					<p>
						<label for="tel">Telefono</label>
						<input type='number' id="tel" placeholder="telefono" name='telCli'
							value='<?php echo $Cliente->getTelCli()?>'>
					</p>
					<p>
						<label for="email">Correo</label>
						<input type='email' id="email" placeholder="ejemplo@smiep.com.co" name='emailCli'
							value='<?php echo $Cliente->getEmailCli()?>'>
					</p>
					<p class='block'>
						<label for="FecNac">Fecha de Nacimiento</label>
						<input type='date' id="FecNac" placeholder="fecha de nacimineto" name='fechaNac'
							value='<?php echo $Cliente->getFechaNac()?>'>
					</p>

					<input type='hidden' name='actualizar' value='actualizar'>

					<p class='block'>
						<button type='submit' id="btn" name="btn" value='Guardar'>
							Guardar
						</button>
					</p>
					<p class='block'>
						<a href="mostrarCli.php"><button type="button">Volver</button></a>
					</p>

				</form>
			</div>
		</div>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="../../public/js/cliente/actializarCliente.js"></script>
</body>

</html>
<?php
}?>