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
    
	<title>Ingresar Proveedor</title>
	
	<link rel="stylesheet" href="../../public/css/agregar.css">
</head>
<div class="contenedor">
<span class="icon">
			<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="200rem"></figure>
		</span>
	<div class="contact-wrapper animated bounceInUp">
	<div class="contact-form">
		<h3>Agregar Proveedor</h3>
<form action='../../controller/ProveedorCtrl.php' name="formulario" method='post'>
		<p>
			<label for="id_Prov">ID Proveedor</label>
			<input type='text' name='id_DocProv' id="id_Prov" placeholder="ID Proveedor">
		</p>
		<p>
			<label for="empresa">Empresa</label>
			<input type='text' name='empresa' id="empresa" placeholder="Empresa">
		</p>
		<p>
			<label for="imgEmpresa">IMG Empresa</label>
			<input type='file' id="imgEmpresa" name='IMG Empresa'>
		</p>
		<p>
			<label for="nombProv1">Primer Nombre</label>
			<input type='text' placeholder="Primer Nombre" id="nombProv1" name='nombProv1'>
		</p>
		<p>
			<label for="nombProv2">Segundo Nombre</label>
			<input type='text' placeholder="Segundo Nombre" id="nombProv2" name='nombProv2'>
		</p>
		<p>
			<label for="apeProv1">Primer Apellido</label>
			<input type='text' placeholder="Primer Apellido" id="apeProv1" name='apeProv1'>
		</p>
		<p>
			<label for="apeProv2">Segundo Nombre</label>
			<input type='text' placeholder="Segundo Apellido" id="apeProv2" name='apeProv2' >
		</p>
		<p>
			<label for="direc">Dirección</label>
			<input type='text' placeholder="Dirección" id="direc" name='direccion1'>
		</p>
		<p>
			<label for="direccion2">Dirección Opc</label>
			<input type='text' placeholder="(Opcional)" name='direccion2'>
		</p>
		<p>
			<label for="tel">Telefono</label>
			<input type='tel' placeholder="Telefono" id="tel" name='numTel1'>
		</p>
		<p>
			<label for="tel2">Telefono Opc</label>
			<input type='tel'id="tel2"  placeholder="(Opcional)" name='numTel2'>
		</p>
		<p>
			<label for="email">Correo</label>
			<input type='email' placeholder="ejemplo@smiep.com.co" id="email" name='email1'>
		</p>
		<p class='block'>
			<label for="email2">Correo Opc</label>
			<input type='email' placeholder="(Opcional)" id="email2" name='email2'>
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
	<script src="../../public/js/proveedor/ingresarProveedor.js"></script>
 </body>
</html>
<?php } ?>