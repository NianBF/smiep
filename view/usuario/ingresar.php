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
   
	<title> Ingresar Usuario</title>
	
	<link rel="stylesheet" href="../../public/css/agregar.css">
</head>
<body>
<div class="contenedor">
<span class="icon">
			<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="200rem"></figure>
		</span>
	<div class="contact-wrapper animated bounceInUp">
	<div class="contact-form">
		<h3>Agregar Usuario</h3>
<form action='../../controller/usuarioCtrl.php' name="formulario" method='post'>
		<p>
			<label for="doc">ID Doc</label>
			<input type='text' name='id_doc' id="doc" placeholder="Documento">
		</p>
		<p>
			<label for="nomb1">Primer Nombre</label>
			<input type='text' name='nombre1' id="nomb1" placeholder="Primer Nombre">
		</p>
		<p>
			<label for="nomb2">Segundo Nombre</label>
			<input type='text' id="nomb2" name='nombre2' placeholder="Segundo Nombre">
		</p>
		<p>
			<label for="ape1">Primer Apellido</label>
			<input type='text' name='apellido1' id="ape1" placeholder="Primer Apellido">
		</p>
		<p>
			<label for="ape2">Segundo Nombre</label>
			<input type='text' id="ape2" name='apellido2' placeholder="SEGUNDO APELLIDO">
		</p>
		<p>
			<label for="nick">Usuario</label>
			<input type='text' name='userName' id="nick" placeholder="Nombre Usuario">
		</p>
		<p>
			<label for="email">Correo</label>
			<input type='text' name='email' id="email" placeholder="ejemplo@smiep.com.co">
		</p>
		<p>
			<label for="pass">Contraseña</label>
			<input type='password' name='pass' id="pass" placeholder="**********">
		</p>
		<p>
			<label for="rol">Rol</label>
			<input type='text' name='rol' id="rol" placeholder="Rol">
		</p>
		<p>
			<label for="estado">ID Estado</label>
			<input type='text' name='id_estado' id="estado" placeholder="ID Estado">
		</p>
		<p class='block'>
			<label for="idTi">ID Tienda</label>
			<input type='text' name='id_ti' id="idTi" placeholder="ID Tienda">
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
<script src="../../public/js/usuario/ingresarUsuario.js"></script>
 </body>
</html>
<?php } ?>