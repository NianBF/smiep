<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
require_once('../../model/tiendaCrud_Mdl.php');
require_once('../../model/tiendaMdl.php');
$crud=new CrudTienda();
$Tienda= new Tienda();

$listaTienda=$crud->mostrar();
?>


 <!DOCTYPE html>
 <html lang="en">
<head>
<meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
	<title>Mostrar Tienda</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/producto.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />	
</head>
<body>
<table>
	<header>
     <div class="logo">
        <img src="../../img/favicon.png" alt="Logo SMIEP" width="150rem">
        <h1 class="titulo">S.M.I.E.P</h1>
    	<h3 class="subtitulo">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
	 </div>
    </header>
	<br>
	<hr>
	<div id="main-container">
	<thead>
		<tr>
            <th colspan="7">Tienda <a href='ingresar.php'><button type="button" id="agregar"><i class="fa-solid fa-plus"></i>  Nueva Tienda</button></a>
            <a href='../inicio/menu.php'><button type="button" id="volver"><i class="fa-solid fa-arrow-rotate-left"></i> Volver</button></a></th>
        </tr>
		<tr id="lis">
        <th colspan="7">
            <div class="buscar">
            	<label for="filtrar-tabla"></label>
		        <input type="text" name="filtrar-tabla" id="filtrar-tabla" placeholder="Tienda" class="buscar1">
            </div>
		</th>
        </tr>

			<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th colspan="2">Opciones</th>
			</tr>
	</thead>
		
			<?php foreach ($listaTienda as $Tienda) {?>
			<tr class="tienda">
	
				<td class="idTienda"><?php echo $Tienda->getId_ti() ?></td>
				<td class="nombTienda"><?php echo $Tienda->getNombreTienda() ?></td>
				<td class="direccion"><?php echo $Tienda->getDireccionTi() ?></td>
				<td class="numTienda"><?php echo $Tienda->getTelTi() ?></td>
				<td class="emailTienda"><?php echo $Tienda->getEmailTi() ?></td>
				<td><a class="editar" id="btnActualizar" name="btnActualizar" href="actualizar.php?id_ti=<?php echo $Tienda->getId_ti()?>&accion=a"><button type="button"><i class="fa-solid fa-pencil"></i></button></a></td>
				<td><a type="submit" class="eliminar" id="btnEliminar" name="btnEliminar" href="../../controller/tiendaCtrl.php?id_ti=<?php echo $Tienda->getId_ti()?>&accion=e"><button type="button" id="eliminar"><i class="fa-solid fa-trash-can"></i></button></a></td>	
			</tr>
			<?php }?>
	</div>	
	</table>
	
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="../../public/js/tienda/filtrarTienda.js"></script>
	
</body>
</html>
<?php } ?>