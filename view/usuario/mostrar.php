<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{

require_once('../../model/usuarioCrud_Mdl.php');
require_once('../../model/usuarioMdl.php');
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
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
	<title>Mostrar Usuarios</title>
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
            <th colspan="7">Listado de Usuarios <a href='ingresar.php'><button type="button" id="agregar"><i class="fa-solid fa-plus"></i>  Nuevo Usuario</button></a>
            <a href='../inicio/menu.php'><button type="button" id="volver"><i class="fa-solid fa-arrow-rotate-left"></i> Volver</button></a></th>
        </tr>
		<tr id="lis">
        <th colspan="7">
            <div class="buscar">
                <label for="filtrar-tabla"></label>
		        <input type="text" name="filtrar-tabla" id="filtrar-tabla" placeholder="Usuarios" class="buscar1">
            </div>
        </th>
        </tr>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Usuario</th>
			<th>Correo</th>
			<th>Rol</th>
			<th colspan="2">Opciones</th>
		</tr>
		</thead>
			<?php foreach ($listaUsuario as $Usuario) {?>
			<tr class="usuario">
	
				<td class="idUsua"><?php echo $Usuario->getId_doc() ?></td>
				<td class="nombUsua"><?php echo $Usuario->getNombre1()." ".$Usuario->getNombre2()." ".$Usuario->getApellido1()." ".$Usuario->getapellido2() ?></td>
				<td class="nickUsua"><?php echo $Usuario->getUserName() ?></td>
				<td class="emailUsua"><?php echo $Usuario->getEmail() ?></td>
				<td class="rolUsua"><?php echo $Usuario->getRol() ?></td>

				<td><a class="btn btn-outline-light editar" id="btnActualizar" name="btnActualizar" href="actualizar.php?id_doc=<?php echo $Usuario->getId_doc()?>&accion=a"><button type="button"><i class="fa-solid fa-pencil"></i></button></a></td>
				<td><a type="submit" class="btn btn-outline-light eliminar" id="btnEliminar" name="btnEliminar" href="../../controller/usuarioCtrl.php?id_doc=<?php echo $Usuario->getId_doc()?>&accion=e"><button type="button" id="eliminar"><i class="fa-solid fa-trash-can"></i></button></a></td>	
			</tr>
			<?php }?>
		</div>
	</table>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<script src="../../public/js/usuario/filtrarUsuarios.js"></script>
	
</body>
</html>
<?php } ?>