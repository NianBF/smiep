<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
	<link rel="stylesheet" href="ingresar2.css">
   <!--  <link rel="stylesheet" href="../../public/css/ingresar2.css"> -->
	<title> Ingresar cliente</title>
</head>
<body>
		
	<header>
	<span class="icon"><figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure></span>
	<h1 class="titulo">S.M.I.E.P</h1>
        <h3 class="subtitulo">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
        
        <div>
            <a href="../../controller/salirCtrl.php"><button class="boton"><span>salir</span></button></a>
        </div>	
</header>


	
	<form action='../../controller/clienteCtrl.php' name="formulario" method='post'>
		<legend>Ingresa los datos del cliente</legend>

		<div class="contenedor">

		<div class="input">
			<label for="doc">Documento</label>
			<input type='text' id="doc" placeholder="documento" name='id_cliDoc'>
		</div>

		<div class="input">
			<label for="nombreCli1">Primer Nombre</label>
			<input type='text' placeholder="primer nombre" id="nombreCli1" name='nombreCli1' >
		</div>	
		
		<div class="input">
			<label for="nombreCli2">Segundo Nombre</label>
			<input type='text' placeholder="segundo nombre" id='nombreCli2' name='nombreCli2' >
		</div>

		<div class="input">
			<label for="apellidoCli1">Primer Apellido</label>
			<input type='text' placeholder="primer apellido" id="apellidoCli1" name='apellidoCli1' >
		</div>
		
		<div class="input">
			<label for="apellidoCli2">Segundo Apellido</label>
			<input type='text' placeholder="segundo apellido" id="apellidoCli2" name='apellidoCli2' >
		</div>

		<div class="input">
			<label for="direc">Dirección</label>
			<input type='text' placeholder="direccion" id="direc" name='direccionCli' >
		</div>

		<div class="input">
			<label for="tel">Telefono</label>
			<input type='text' id="tel" placeholder="telefono" name='telCli' >
		</div>

		<div class="input">
			<label for="email">Correo</label>
			<input type='email' id="email" placeholder="ejemplo@email.co" name='emailCli' >
		</div>

		<div class="input">
			<label for="FecNac">Fecha de Nacimiento</label>
			<input type='date' id="FecNac" name='fechaNac' >
		</div>
		
		<input type='hidden' name='insertar' value='insertar'>
		
			
		<div class="boton">
		<input type='submit' class="btn btn-outline-light"  id="btn" name="btn" value='Guardar'>
		<a class="btn btn-outline-light" href="mostrar.php">Volver</a>
		</div>

		</div>
	</form>
	

<!-- 	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="../../public/js/cliente/ingresarCliente.js"></script> -->
 </body>
</html>
<?php } ?>