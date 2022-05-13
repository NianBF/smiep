<?php
session_start();
require_once('../modelo/crud_Proveedor.php');
require_once('../modelo/Proveedor.php');
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
	<title>Mostrar proveedor</title>
	
	<link rel="stylesheet" href="css/mostrar.css">	
	
</head>
<body>
	<table>
	<div>
	<a href="../../sesiones/salir.php"><button class="boton"><span>salir</span></button></a>
    </div>
    <header>
	<a href="../../sesiones/menu.php"><span class="icon"><figure class=""><img src="../../home/img/favicon.png" alt="Logo SMIEP" width="150px"></figure>
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
			<tr>
	
				<td><?php echo $Proveedor->getId_DocProv() ?></td>
				<td><?php echo $Proveedor->getNombProv1()." ".$Proveedor->getNombProv2()." ".$Proveedor->getApeProv1()." ".$Proveedor->getApeProv2() ?></td>
				<td><?php echo $Proveedor->getEmpresa() ?></td>
				<td><?php echo $Proveedor->getDireccion1()." ".$Proveedor->getDireccion2() ?></td>
				<td><?php echo $Proveedor->getNumTel1() ?></td>
				<td><?php echo $Proveedor->getEmail1() ?></td>
				
				
				<td><a class="editar" id="btnActualizar" name="btnActualizar" href="../vista/actualizar.php?id_DocProv=<?php echo $Proveedor->getId_DocProv()?>&accion=a">Actualizar</a> </td>
				<td><a type="submit" class="eliminar" id="btnEliminar" name="btnEliminar" href="../controlador/administrar_Proveedor.php?id_DocProv=<?php echo $Proveedor->getId_DocProv()?>&accion=e" >Eliminar</a></td>	
			</tr>
			<?php }?>
		
	</table>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	
	
</body>
</html>