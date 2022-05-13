<?php

session_start();
require_once('../modelo/crud_Usuario.php');
require_once('../modelo/Usuario.php');
$crud=new CrudUsuario();
$Usuario= new Usuario();

$listaUsuario=$crud->mostrar();
?>


 <!DOCTYPE html>
 <html lang="en">
<head>
<meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="icon" type="image/png" href="../../home/img/favicon.png" sizes="any">
   
	<title>Mostrar usuarios</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/mostrar.css">	
	<script src="js/eliminar.js"></script>
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
        <hr>
        <br>
        <h4>USUARIOS</h4>
        <h5>DATOS USUARIOS</h5>
        <a href="ingresar.php" class="agregar">Agregar</a>
        <br>
        <br>


		<tr>

<th>ID</th>
<th>NOMBRE</th>
<th>USUARIO</th>
<th>CORREO</th>
<th>ROL</th>
<th>EDITAR</th>
<th>Eliminar</th>

</tr>

		
			<?php foreach ($listaUsuario as $Usuario) {?>
			<tr>
	
				<td><?php echo $Usuario->getId_doc() ?></td>
				<td><?php echo $Usuario->getNombre1()." ".$Usuario->getNombre2()." ".$Usuario->getApellido1()." ".$Usuario->getapellido2() ?></td>
				<td><?php echo $Usuario->getUserName() ?></td>
				<td><?php echo $Usuario->getEmail() ?></td>
				<td><?php echo $Usuario->getRol() ?></td>

				<td><a class="btn btn-outline-light editar" id="btnActualizar" name="btnActualizar" href="../vista/actualizar.php?id_doc=<?php echo $Usuario->getId_doc()?>&accion=a">Actualizar</a> </td>
				<td><a type="submit" class="btn btn-outline-light eliminar" id="btnEliminar" name="btnEliminar" href="../controlador/administrar_Usuario.php?id_doc=<?php echo $Usuario->getId_doc()?>&accion=e" >Eliminar</a></td>	
			</tr>
			<?php }?>
		
	</table>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	
	
</body>
</html>