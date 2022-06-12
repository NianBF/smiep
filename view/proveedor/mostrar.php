<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
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
	 <title>Mostrar Proveedor</title>
	<link rel="stylesheet" href="../../public/css/producto.css">
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
                <th colspan="7">Listado de Proveedores <a href='ingresar.php'><button type="button" id="agregar"><i class="fa-solid fa-plus"></i>  Nuevo Proveedor</button></a>
                <a href='../inicio/menu.php'><button type="button" id="volver"><i class="fa-solid fa-arrow-rotate-left"></i> Volver</button></a></th>
            </tr>
			<tr id="lis">
            <th colspan="8">
             <div class="buscar">
                <label for="filtrar-tabla"></label>
		        <input type="text" name="filtrar-tabla" id="buscar1" placeholder="ID Proveedor" class="buscar1 ">

				<label for="filtrar-tabla"></label>
		        <input type="text" name="filtrar-tabla" id="buscar2" placeholder="empresa" class="buscar1">
             </div>
            </th>
            </tr>

			<tr>
			<th>ID Proveedor</th>
			<th>Nombre</th>
			<th>Empresa</th>
			<th>Dirección</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th colspan="2">Opciones</th>
           </tr>
		</thead>
			<?php foreach ($listaProveedor as $Proveedor) {?>
			<tr class="proveedor">
	
				<td class="idProv"><?php echo $Proveedor->getId_DocProv() ?></td>
				<td class="nombreProv"><?php echo $Proveedor->getNombProv1()." ".$Proveedor->getNombProv2()." ".$Proveedor->getApeProv1()." ".$Proveedor->getApeProv2() ?></td>
				<td class="empresa"><?php echo $Proveedor->getEmpresa() ?></td>
				<td class="direccion"><?php echo $Proveedor->getDireccion1()." ".$Proveedor->getDireccion2() ?></td>
				<td class="numProv"><?php echo $Proveedor->getNumTel1() ?></td>
				<td class="email"><?php echo $Proveedor->getEmail1() ?></td>
				
				
				<td><a class="editar" id="btnActualizar" name="btnActualizar" href="actualizar.php?id_DocProv=<?php echo $Proveedor->getId_DocProv()?>&accion=a"><button type="button"><i class="fa-solid fa-pencil"></i></button></a></td>
				<td><a type="submit" class="eliminar" id="btnEliminar" name="btnEliminar" href="../../controller/proveedorCtrl.php?id_DocProv=<?php echo $Proveedor->getId_DocProv()?>&accion=e"><button type="button" id="eliminar"><i class="fa-solid fa-trash-can"></i></button></a></td>	
			</tr>
			</div>
			<?php }?>
		
	</table>
	
	<script src="../../public/js/proveedor/filtrarProveedor.js"></script>
	
</body>
</html>
<?php } ?>