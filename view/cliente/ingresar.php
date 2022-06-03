<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    
	<title> Ingresar Cliente</title>
	
	<link rel="stylesheet" href="../../public/css/agregarpru.css">
</head>
<body>
<div class="contenedor">
	<span class="icon">
		<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="200rem"></figure>
	</span>
	<div class="contact-wrapper animated bounceInUp">
	<div class="contact-form">
		<h3>Agregar Cliente</h3>
<form action='../../controller/clienteCtrl.php' name="formulario" method='post'>
		<p>
			<label>Documento</label>
			<input type='text' id="doc" placeholder="Documento" name='id_cliDoc'>
		</p>
		<p>
			<label>Primer Nombre</label>
			<input type='text' placeholder="Primer Nombre" id="nombreCli1" name='nombreCli1'>
		</p>
		<p>
			<label>Segundo Nombre</label>
			<input type='text' placeholder="Segundo Nombre"  name='nombreCli2' >
		</p>
		<p>
			<label>Primero Apellido</label>
			<input type='text' placeholder="Primer Apellido" id="apellidoCli1" name='apellidoCli1'>
		</p>
		<p>
			<label>Segundo Apellido</label>
			<input type='text' placeholder="Segundo Apellido" name='apellidoCli2'>
		</p>
		<p>
			<label>Dirección</label>
			<input type='text' placeholder="Dirección" id="direc" name='direccionCli'>
		</p>
		<p>
			<label>Telefono</label>
			<input type='text' id="tel" placeholder="Telefono" name='telCli'>
		</p>
		<p>
			<label>Correo</label>
			<input type='email' id="email" placeholder="ejemplo@smiep.com.co" name='emailCli'>
		</p>

		<p class='block'>
			<label>Fecha de Nacimiento</label>
			<input type='date' id="FecNac" name='fechaNac'>
		</p>
	
		<input type='hidden' name='insertar' value='insertar'>

		<p class='block'>
			<button type='submit' id="btn" name="btn" value='Guardar'>
			Guardar
			</button>
		</p>
		<p class='block'>
			<a href='mostrar.php'><button type="button">Volver</button></a>
		</p

</form>
	</div>
	</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../public/js/cliente/ingresarCliente.js"></script>
 </body>
</html>
<?php } ?>