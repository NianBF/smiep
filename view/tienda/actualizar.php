<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
require_once('../../model/tiendaCrud_Mdl.php');
require_once('../../model/tiendaMdl.php');
	$crud= new CrudTienda();
	$Tienda=new Tienda();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$dato = $_GET['id_ti'];
    $Tienda=$crud->obtenerTienda($_GET['id_ti']);
    	  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    
	<title>Actualizar tienda</title>
	
	<link rel="stylesheet" type="text/css" href="../../public/css/agregarpru.css">

</head>

<body>
	<div class="contenedor">
		<span class="icon">
			<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="200rem"></figure>
		</span>
	<div class="contact-wrapper animated bounceInUp">
	<div class="contact-form">
	<h3>Cambia los datos de la Tienda</h3>
	<form action='../../controller/tiendaCtrl.php' name="formulario" method='post'>
		<p>
			<label>Nombre</label>
			<input type='hidden' name='id_ti' value='<?php echo $Tienda->getId_ti()?>'>
			<td> <input type='text' placeholder="Nombre Tienda" id="nomTienda" name='nombreTienda' value='<?php echo $Tienda->getNombreTienda()?>'>
		</p>
		<p>
			<label>Dirección</label>
			<input type='text' placeholder="Dirección" name='direccionTi' value='<?php echo $Tienda->getDireccionTi()?>' >
		</p>
		<p>
			<label>Telefono</label>
			<input type='text' placeholder="Numero Telefono" name='telTi' value='<?php echo $Tienda->getTelTi()?>' >
		</p>
		<p>
			<label>Correo</label>
			<input type='text' placeholder="ejemplo@smiep.com.co" name='emailTi' value='<?php echo $Tienda->getEmailTi()?>' >
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
	<script src="../../public/js/tienda/actualizarTienda.js"></script>	
</body>
</html>
<?php } ?>