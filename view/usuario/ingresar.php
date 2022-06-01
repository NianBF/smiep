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
   
	<title> Ingresar categoria</title>
	
	<link rel="stylesheet" href="../../public/css/ingresar.css">
</head>
<body>
<div class="contenedor">
	<span class="icon"><figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure></span>
<header class="header">
Ingresa los datos del Producto
</header>
<div class="tabla">
<form action='../../controller/usuarioCtrl.php' name="formulario" method='post'>
	<table>
		<tr>
			<td class="text">ID DOC:</td>
			</tr><tr>
			<td> <input type='text' name='id_doc' id="doc" placeholder="DOCUMENTO IDENTIFICACION"></td>
		</tr>
		
		<tr>
			<td class="text">PRIMER NOMBRE:</td>
			</tr><tr>
			<td><input type='text' name='nombre1' id="nomb1" placeholder="PRIMER NOMBRE"></td>
		</tr>

		<tr>
			<td class="text">SEGUNDO NOMBRE:</td>
			</tr><tr>
			<td> <input type='text' name='nombre2' placeholder="SEGUNDO NOMBRE"></td>
		</tr>

		<tr>
			<td class="text">PRIMER APELLIDO:</td>
			</tr><tr>
			<td><input type='text' name='apellido1' id="ape1" placeholder="PRIMER APELLIDO"></td>
		</tr>

		<tr>
			<td class="text">SEGUNDO APELLIDO:</td>
			</tr><tr>
			<td> <input type='text' name='apellido2' placeholder="SEGUNDO APELLIDO"></td>
		</tr>

		<tr>
			<td class="text">USERNAME:</td>
			</tr><tr>
			<td><input type='text' name='userName' id="nick" placeholder="NUMBRE DE USUARIO"></td>
		</tr>
		<tr>
			<td class="text">CORREO:</td>
			</tr><tr>
			<td><input type='text' name='email' id="email" placeholder="EXAMPLE@EMAIL.COM"></td>
		</tr>
		<tr>
			<td class="text">CONTRASEÑA:</td>
			</tr><tr>
			<td><input type='password' name='pass' id="pass" placeholder="**********"></td>
		</tr>
		<tr>
			<td class="text">ROL:</td>
			</tr><tr>
			<td><input type='text' name='rol' id="rol" placeholder="ROL"></td>
		</tr>
		<tr>
			<td class="text">ID ESTADO:</td>
			</tr><tr>
			<td><input type='text' name='id_estado' id="estado" placeholder="ID ESTADO"></td>
		</tr>
		<tr>
			<td class="text">ID TIENDA:</td>
			</tr><tr>
			<td><input type='text' name='id_ti' id="ti" placeholder="ID TIENDA"></td>
		</tr>
		
	
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<div class="boton">
	<input type='submit' class="btn btn-outline-light"  id="btn" name="btn" value='Guardar'>
	<a class="btn btn-outline-light" href="mostrar.php">Volver</a>
	</div>
</form>
</div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../public/js/usuario/ingresarUsuario.js"></script>
 </body>
</html>
<?php } ?>