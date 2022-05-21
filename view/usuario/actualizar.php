<?php

session_start();
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
   
	<title>Actualizar usuarios</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../public/css/actualizar.css">

</head>
<body>
<div class="contenedor">
	<span class="icon"><figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure></span>
<header class="header">
Cambia los datos del Producto
</header>

	<div class="tabla">
	<form action='../../controller/usuarioCtrl.php' name="formulario" method='post'>
	
	<table>
		<tr>
		<input type='hidden' name='id_doc' value='<?php echo $Usuario->getId_doc()?>'>
			
			<td class="text">PRIMER NOMBRE:</td>
			</tr><tr>
			<td><input type='text' name='nombre1' placeholder="PRIMER NOMBRE" value='<?php echo $Usuario->getNombre1()?>'></td>
		</tr>

		<tr>
			<td class="text">SEGUNDO NOMBRE:</td>
			</tr><tr>
			<td> <input type='text' name='nombre2' placeholder="SEGUNDO NOMBRE" value='<?php echo $Usuario->getNombre2()?>'></td>
		</tr>

		<tr>
			<td class="text">PRIMER APELLIDO:</td>
			</tr><tr>
			<td><input type='text' name='apellido1' placeholder="PRIMER APELLIDO" value='<?php echo $Usuario->getApellido1()?>'></td>
		</tr>

		<tr>
			<td class="text">SEGUNDO APELLIDO:</td>
			</tr><tr>
			<td> <input type='text' name='apellido2' placeholder="SEGUNDO APELLIDO" value='<?php echo $Usuario->getApellido2()?>'></td>
		</tr>

		<tr>
			<td class="text">USERNAME:</td>
			</tr><tr>
			<td><input type='text' name='userName' placeholder="NOMBRE DE USUARIO" value='<?php echo $Usuario->getUserName()?>'></td>
		</tr>
		<tr>
			<td class="text">CORREO:</td>
			</tr><tr>
			<td><input type='text' name='email' placeholder="EXAMPLE@EMAIL.COM" value='<?php echo $Usuario->getEmail()?>'></td>
		</tr>
		<tr>
			<td class="text">CONTRASEÑA:</td>
			</tr><tr>
			<td><input type='password' name='pass' placeholder="**********" value='<?php echo $Usuario->getPass()?>'></td>
		</tr>
		<tr>
			<td class="text">ROL:</td>
			</tr><tr>
			<td><input type='text' name='rol' placeholder="ROL" value='<?php echo $Usuario->getRol()?>'></td>
		</tr>
		<tr>
			<td class="text">ID ESTADO:</td>
			</tr><tr>
			<td><input type='text' name='id_estado' placeholder="ID ESTADO" value='<?php echo $Usuario->getId_estado()?>'></td>
		</tr>
		<tr>
			<td class="text">ID TIENDA:</td>
			</tr><tr>
			<td><input type='text' name='id_ti' placeholder="ID TIENDA" value='<?php echo $Usuario->getId_ti()?>'></td>
		</tr>
	
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<div class="boton">
	<input class="btn btn-outline-light" id="btn" name="btn"  type='submit' value='Guardar'>
	<a class="btn btn-outline-light" href="mostrar.php">Volver</a>
	</div>
	
</form>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../public/js/usuario/actualizarUsuario.js"></script>	
</body>
</html>