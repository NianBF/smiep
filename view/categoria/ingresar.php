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
    
	<title>Ingresar Categoria</title>
	<link rel="stylesheet" href="../../public/css/agregar.css">
</head>
<body>
<div class="contenedor">
	<span class="icon">
			<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="200rem"></figure>
		</span>

	<div class="contact-wrapper animated bounceInUp">
		<div class="contact-form">
		<h3>Agregar Categoria</h3>
	<form  action='../../controller/categoriaCtrl.php' id="formulario" name="formulario" method='post'>
		<p>
			<label>ID Categoria</label>
			<input type='text' id="id_cat" name='id_cat' placeholder="ID Categoria">
		</p>

		<p>
			<label>Categoria</label>
			<input type='text' id="nCategoria" name='nCategoria' placeholder="Nombre Categoria">
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
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../public/js/categoria/ingresarCategoria.js"></script>

 </body>
</html>
<?php } ?>