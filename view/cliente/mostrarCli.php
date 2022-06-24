<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
require_once('../../model/clienteCrud_mdl.php');
require_once('../../model/ClienteMdl.php');
$crud=new CrudCliente();
$Cliente= new Cliente();

$listaCliente=$crud->mostrar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <title>Mostrar Cliente</title>
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
        <br>
        <hr>
        <div id="main-container">
        <thead>
            <tr>
                <th colspan="7">Listado de Clientes <a href='ingresar.php'><button type="button" id="agregar"><i class="fa-solid fa-plus"></i>  Nuevo Cliente</button></a>
                <a href='../inicio/menu.php'><button type="button" id="volver"><i class="fa-solid fa-arrow-rotate-left"></i> Volver</button></a></th>
            </tr>
            <tr id="lis">
            <th colspan="7">
             <div class="buscar">
                <label for="filtrar-tabla"></label>
		        <input type="text" name="filtrar-tabla" id="buscar1" placeholder="ID Clientes" class="buscar1">
             </div>
            </th>
            </tr>

		<tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Fecha de Nacimiento</th>
            <th colspan="2">Opciones</th>
        </tr>
        </thead>
<?php foreach ($listaCliente as $Cliente) {?>
			<tr class="cliente">
	
				<td class="idCli"><?php echo $Cliente->getId_CliDoc(); ?></td>	
				<td class="nombCli"> <?php echo $Cliente->getNombreCli1()." ".$Cliente->getNombreCli2()." ".$Cliente->getApellidoCli1()." ".$Cliente->getApellidoCli2(); ?></td>
				<td class="numbCli"><?php echo $Cliente->getTelCli(); ?></td>
				<td class="emailCli"><?php echo $Cliente->getEmailCli(); ?></td>
				<td class="fechNacCli"><?php echo $Cliente->getFechaNac(); ?></td>
				
		
				<td><a class="editar" id="btnActualizar" name="btnActualizar" href="actualizar.php?id_cliDoc=<?php echo $Cliente->getId_cliDoc();?>&accion=a"><button type="button"><i class="fa-solid fa-pencil"></i></button></a></td>
				<td><a type="submit" class="eliminar" id="btnEliminar" name="btnEliminar" href="../../controller/clienteCtrl.php?id_cliDoc=<?php echo $Cliente->getId_CliDoc()?>&accion=e"><button type="button" id="eliminar"><i class="fa-solid fa-trash-can"></i></button></a></td>	
			</tr>
			<?php }?>
			
</table>
	<script src="../../public/js/cliente/filtrarCliente.js"></script>
</body>
</html>
<?php } ?>