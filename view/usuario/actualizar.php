<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
	require_once('../../model/usuarioCrud_Mdl.php');
	require_once('../../model/usuarioMdl.php');
	$crud= new CrudUsuario();
	$Usuario=new Usuario();
	
	$dato = $_GET['id_doc'];
    $Usuario=$crud->obtenerUsuario($_GET['id_doc']);
    	  
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
   
	<title>Actualizar Usuario</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/agregarpru.css">

</head>
<body>
<div class="contenedor">
		<span class="icon">
			<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure>
		</span>
	<div class="contact-wrapper animated bounceInUp">
	<div class="contact-form">
	<h3>Cambia los datos de Usuario</h3>
	<form action='../../controller/usuarioCtrl.php' name="formulario" method='post'>
		<p>
			<label>Primer Nombre</label>
			<input type='hidden' name='id_doc' value='<?php echo $Usuario->getId_doc()?>'>
			<input type='text' name='nombre1' placeholder="Primer Nombre" value='<?php echo $Usuario->getNombre1()?>'>
		</p>
		<p>
			<label>Segundo Nombre</label>
			<input type='text' name='nombre2' placeholder="Segundo Nombre" value='<?php echo $Usuario->getNombre2()?>'>
		</p>
		<p>
			<label>Primer Apellido</label>
			<input type='text' name='apellido1' placeholder="Primer Apellido" value='<?php echo $Usuario->getApellido1()?>'>
		</p>
		<p>
			<label>Segundo Apellido</label>
			<input type='text' name='apellido2' placeholder="Segundo Apellido" value='<?php echo $Usuario->getApellido2()?>'>
		</p>
		<p>
			<label>Usuario</label>
			<input type='text' name='userName' placeholder="NOMBRE DE USUARIO" value='<?php echo $Usuario->getUserName()?>'>
		</p>
		<p>
			<label>Correo</label>
			<input type='text' name='email' placeholder="ejemplo@smiep.com.co" value='<?php echo $Usuario->getEmail()?>'>
		</p>
		<p>
			<label>Contraseña</label>
			<input type='password' name='pass' placeholder="**********" value='<?php echo $Usuario->getPass()?>'>
		</p>
		<p>
			<label>Rol</label>
			<input type='text' name='rol' placeholder="Rol" value='<?php echo $Usuario->getRol()?>'>
		</p>
		<p>
			<label>ID Estado</label>
			<input type='text' name='id_estado' placeholder="ID Estado" value='<?php echo $Usuario->getId_estado()?>'>
		</p>
		<p>
			<label>ID Tienda</label>
			<input type='text' name='id_ti' placeholder="ID Tienda" value='<?php echo $Usuario->getId_ti()?>'>
		</p>
	
		<input type='hidden' name='actualizar' value='actualizar'>

		<p class='block'>
			<button type='submit' id="btn" name="btn" value='Guardar'>
			Guardar
			</button>
		</p>
		<p class='block'>
			<a href="mostrar.php"><button type="button">Volver</button></a>
		</p>
</form>
	</div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../public/js/usuario/actualizarUsuario.js"></script>	
</body>
</html>
<?php } ?>