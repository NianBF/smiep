<?php

session_start();
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
    
	<title>Mostrar tienda</title>
	
	<link rel="stylesheet" type="text/css" href="../../public/css/catalogo.css">	
</head>
<body>

<table>
	<div>
	<a href="../../sesiones/salir.php"><button class="boton"><span>salir</span></button></a>
    </div>
    <header>
	<a href="../inicio/menu.php"><span class="icon"><figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="150px"></figure>
    </a>    
	<h1 class="titulo">S.M.I.E.P</h1>
        <h3 class="subtitulo">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
    </header>
		<br>
		<br>
		<br>
		<hr>
		<h4>Tienda</h4>
        <a href="ingresar.php" class="agregar">Agregar</a>
		<br>
		<br>
		
			<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>DIRECCION</th>
			<th>TELEFONO</th>
			<th>CORREO</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
			</tr>
		
			<?php foreach ($listaTienda as $Tienda) {?>
			<tr>
	
				<td><?php echo $Tienda->getId_ti() ?></td>
				<td><?php echo $Tienda->getNombreTienda() ?></td>
				<td><?php echo $Tienda->getDireccionTi() ?></td>
				<td><?php echo $Tienda->getTelTi() ?></td>
				<td><?php echo $Tienda->getEmailTi() ?></td>
				<td><a class="editar" id="btnActualizar" name="btnActualizar" href="../vista/actualizar.php?id_ti=<?php echo $Tienda->getId_ti()?>&accion=a">Actualizar</a> </td>
				<td><a type="submit" class="eliminar" id="btnEliminar" name="btnEliminar" href="../controlador/administrar_tienda.php?id_ti=<?php echo $Tienda->getId_ti()?>&accion=e" >Eliminar</a></td>	
			</tr>
			<?php }?>
		
	</table>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	
	
</body>
</html>