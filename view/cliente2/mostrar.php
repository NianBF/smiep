<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
include_once('../../controller/loginCtrl.php');
require_once('../../model/clienteCrud_Mdl.php');
require_once('../../model/clienteMdl.php');
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
    <title>Mostrar cliente</title>
	
	<link rel="stylesheet" type="text/css" href="../../public/css/catalogo.css">
</head>
<body>
    <header>
        <a href="../inicio/menu.php"><span class="icon">
            <figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="150px"></figure>
        </a>

        <h1 class="titulo">S.M.I.E.P</h1>
        <h3 class="subtitulo">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
        
        <div>
            <a href="../../controller/salirCtrl.php"><button class="boton"><span>salir</span></button></a>
        </div>
    </header>
        <h4>CLIENTES</h4>
        <h5>DATOS CLIENTE</h5>
        <a href="ingresar.php" class="agregar">Agregar</a>
<table>
    <thead>

        <th>DOCUMENTO</th>
        <th>NOMBRE</th>
        <th>TELEFONO</th>
        <th>CORREO</th>
        <th>FECHA DE NACIMIENTO</th>
        <th>EDITAR</th>
        <th>Eliminar</th>

    </thead>
    <tbody>
        <?php foreach ($listaCliente as $Cliente) {?>
			<tr>
	
				<td><?php echo $Cliente->getId_CliDoc() ?></td>	
				<td><?php echo $Cliente->getNombreCli1()." ".$Cliente->getNombreCli2()." ".$Cliente->getApellidoCli1()." ".$Cliente->getApellidoCli2() ?></td>
				<td><?php echo $Cliente->getTelCli() ?></td>
				<td><?php echo $Cliente->getEmailCli() ?></td>
				<td><?php echo $Cliente->getFechaNac() ?></td>
				
		
				<td><a class="editar" id="btnActualizar" name="btnActualizar" href="actualizar.php?id_cliDoc=<?php echo $Cliente->getId_cliDoc()?>&accion=a">Actualizar</a> </td>
				<td><a type="submit" class="eliminar" id="btnEliminar" name="btnEliminar" href="../../controller/clienteCtrl.php?id_cliDoc=<?php echo $Cliente->getId_CliDoc()?>&accion=e" >Eliminar</a></td>	
			</tr>
		<?php }?>
    </tbody>

			
</table>
	
</body>
</html>
<?php } ?>