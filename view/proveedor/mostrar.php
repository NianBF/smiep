<?php
session_start();
require_once('../../model/proveedorCrud_Mdl.php');
require_once('../../model/proveedorMdl.php');
$crud=new CrudProveedor();
$Proveedor= new Proveedor();

$listaProveedor=$crud->mostrar();
?>


 <!DOCTYPE html>
 <html lang="en">
<head>
<meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
	 <title>Mostrar proveedor</title>
	<link rel="stylesheet" href="../../public/css/catalogo.css">	
	
</head>
<body>
	<table>
	<div>
	<a href="../../controller/salirCtrl.php"><button class="boton"><span>salir</span></button></a>
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
		<h4>Proveedor</h4>
		<br>
		<a href="ingresar.php" class="agregar">Agregar</a>
		<br>
		<br>

		<label for="filtrar-tabla"></label>
		<input type="text" name="filtro" id="filtrar-tabla" placeholder="proveedor">

			<tr>
			<th>ID PROVEEDOR</th>
			<th>NOMBRE</th>
			<th>EMPRESA</th>
			<th>DIRECCION</th>
			<th>NUMERO TEL</th>
			<th>CORREO</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
           </tr>
		
			<?php foreach ($listaProveedor as $Proveedor) {?>
			<tr class="proveedor">
	
				<td class="idProv"><?php echo $Proveedor->getId_DocProv() ?></td>
				<td class="nombreProv"><?php echo $Proveedor->getNombProv1()." ".$Proveedor->getNombProv2()." ".$Proveedor->getApeProv1()." ".$Proveedor->getApeProv2() ?></td>
				<td class="empresa"><?php echo $Proveedor->getEmpresa() ?></td>
				<td class="direccion"><?php echo $Proveedor->getDireccion1()." ".$Proveedor->getDireccion2() ?></td>
				<td class="numProv"><?php echo $Proveedor->getNumTel1() ?></td>
				<td class="email"><?php echo $Proveedor->getEmail1() ?></td>
				
				
				<td><a class="editar" id="btnActualizar" name="btnActualizar" href="actualizar.php?id_DocProv=<?php echo $Proveedor->getId_DocProv()?>&accion=a">Actualizar</a> </td>
				<td><a type="submit" class="eliminar" id="btnEliminar" name="btnEliminar" href="../../controller/proveedorCtrl.php?id_DocProv=<?php echo $Proveedor->getId_DocProv()?>&accion=e" >Eliminar</a></td>	
			</tr>
			<?php }?>
		
	</table>
	
	<script src="../../public/js/proveedor/filtrarProveedor.js"></script>
	
</body>
</html>