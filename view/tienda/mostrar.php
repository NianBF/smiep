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
	<link rel="stylesheet" type="text/css" href="../../public/css/tienda.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />	
</head>
<body>
<header>
<table>
<?php include_once("../plantillas/header.html"); ?>
        </header>
	<br>
	<hr>
	<div id="main-container">
	<thead>
		<tr>
            <th>Tienda</th>
            <th colspan="6" class="bot1"><a href='ingresar.php'><button type="button" id="agregar"><i class="fa-solid fa-plus"></i>  Agregar</button></a>
            <a class="bot1" href='../inicio/menu.php'><button type="button" id="volver"><i class="fa-solid fa-arrow-rotate-left"></i> Volver</button></a></th>
        </tr>
		<tr id="lis">
        <th colspan="6">
            <div class="buscar">
            	<label for="filtrar-tabla"></label>
		        <input type="text" name="filtrar-tabla" id="buscar1" placeholder="ID Tienda" class="buscar1">
            	
				<label for="filtrar-tabla"></label>
		        <input type="text" name="filtrar-tabla" id="buscar2" placeholder="Tienda" class="buscar1">
            </div>
		</th>
		<th colspan="2">
                <a id="mod" class="mod" onclick="cambiarModo()"><span id="id-moon" class="btn-mode moon"><i class="fas fa-sun"></i></span>/<span  id="id-sun" class="btn-mode sun active"><i class="fas fa-moon"></i></span></a>
                <script type="text/javascript" src="../../public/js/darkMode/darkMode.js"></script>
            </th>
            </tr>
        </tr>
			<tr class="tb">
			<th class="tb">ID</th>
			<th class="to">Nombre</th>
			<th class="tl">Direccion</th>
			<th class="tx">Telefono</th>
			<th class="teo">Correo</th>
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
	<footer class="footer">
        <p>© S.M.I.E.P | 2022</p>
    </footer>
	<script src="../../public/js/tienda/filtrarTienda.js"></script>
	
</body>
</html>
<?php } ?>