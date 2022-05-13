<?php
session_start();
require_once('../modelo/crud_Cliente.php');
require_once('../modelo/Cliente.php');
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
	 <link rel="icon" type="image/png" href="../../home/img/favicon.png" sizes="any">
    <title>Mostrar cliente</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/mostrarCli.css">	
	<script src="js/eliminar.js"></script>
</head>
<body>
<table>
	<div>
    <a href="../../sesiones/salir.php"><button class="boton"><span>salir</span></button></a>
    </div>
    <header>
    <a href="../../sesiones/menu.php"><span class="icon"><figure class=""><img src="../../home/img/favicon.png" alt="Logo SMIEP" width="150px"></figure></a>
        <h1 class="titulo">S.M.I.E.P</h1>
        <h3 class="subtitulo">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
    </header>
        <br>
        <hr>
        <br>
        <h4>CLIENTES</h4>
        <h5>DATOS CLIENTE</h5>
        <a href="ingresar.php" class="agregar">Agregar</a>
        <br>
        <br>

		<tr>

    <th>DOCUMENTO</th>
    <th>NOMBRE</th>
    <th>TELEFONO</th>
    <th>CORREO</th>
    <th>FECHA DE NACIMIENTO</th>
    <th>EDITAR</th>
    <th>Eliminar</th>

    </tr>
<?php foreach ($listaCliente as $Cliente) {?>
			<tr>
	
				<td><?php echo $Cliente->getId_CliDoc() ?></td>	
				<td > <?php echo $Cliente->getNombreCli1()." ".$Cliente->getNombreCli2()." ".$Cliente->getApellidoCli1()." ".$Cliente->getApellidoCli2() ?></td>
				<td><?php echo $Cliente->getTelCli() ?></td>
				<td><?php echo $Cliente->getEmailCli() ?></td>
				<td><?php echo $Cliente->getFechaNac() ?></td>
				
		
				<td><a class="editar" id="btnActualizar" name="btnActualizar" href="../vista/actualizar.php?id_cliDoc=<?php echo $Cliente->getId_cliDoc()?>&accion=a">Actualizar</a> </td>
				<td><a type="submit" class="eliminar" id="btnEliminar" name="btnEliminar" href="../controlador/administrar_Cliente.php?id_cliDoc=<?php echo $Cliente->getId_CliDoc()?>&accion=e" >Eliminar</a></td>	
			</tr>
			<?php }?>
			
</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
</body>
</html>