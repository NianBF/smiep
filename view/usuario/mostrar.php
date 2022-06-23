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
	
	<link rel="stylesheet" href="../../public/css/usuario.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />	

</head>
<header>
<table>
        <div class="header__superior">
            <div class="logo">
                <img src="../../img/favicon.png" alt="">
            </div>
            <div class="contenedor">
            <section class="titulito">
                <h1 class="title">S.M.I.E.P</h1>
                <h3 class="nameEmp">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
                <h3 class="nameEmp2">Software de Manejo <br>de Inventarios <br>para Empresas Pequeñas</h3>
            </section>
        </div>
        </div>
        </header>
			<br>
			<hr>
			<br>
			<div id="main-container">
			<thead>
			<tr>
            <th>Listado de Categoria</th>
            	<th colspan="6" class="bot1"><a href='ingresar.php'><button type="button" id="agregar"><i class="fa-solid fa-plus"></i>  Agregar</button></a>
            	<a class="bot1 "href='../inicio/menu.php'><button type="button" id="volver"><i class="fa-solid fa-arrow-rotate-left"></i> Volver</button></a></th>
        	</tr>
			<tr id="lis">
			<th colspan="6">
				<div class="buscar">
					<label for="filtrar-tabla"></label>
					<input type="text" name="filtrar-tabla" id="buscar1" placeholder="ID Usuario" class="buscar1">
					
					<label for="filtrar-tabla"></label>
					<input type="text" name="filtrar-tabla" id="buscar2" placeholder="Usuario" class="buscar1">
					
					<label for="filtrar-tabla"></label>
					<input type="text" name="filtrar-tabla" id="buscar3" placeholder="Rol" class="buscar1">
				</div>
			</th>
			<th colspan="2">
                <a id="mod" class="mod" onclick="cambiarModo()"><span id="id-moon" class="btn-mode moon"><i class="fas fa-sun"></i></span>/<span  id="id-sun" class="btn-mode sun active"><i class="fas fa-moon"></i></span></a>
                <script type="text/javascript" src="../../public/js/darkMode/darkMode.js"></script>
            </th>
			</tr>
			<tr class="tb">
				<th class="tb">ID</th>
				<th class="to">Nombre</th>
				<th class="tb">Usuario</th>
				<th class="tx">Correo</th>
				<th class="tz">Rol</th>
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
		<footer class="footer">
        <p>© S.M.I.E.P | 2022</p>
    	</footer>
		
		<script src="../../public/js/usuario/filtrarUsuarios.js"></script>
		
		
	</body>
</html>
<?php } ?>