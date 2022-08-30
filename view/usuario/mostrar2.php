<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
	header("location:../../index.php");
}
else
{
	require_once('../../model/usuarioCrud_Mdl.php');
	require_once('../../model/usuarioMdl.php');
	$crud = new CrudUsuario();
	$Usuario = new Usuario();
	$listaUsuario = $crud->mostrar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">

	<title>Mostrar Usuarios</title>

	<link rel="stylesheet" href="../../public/css/usuario2.css">
	<link rel="stylesheet" href="../../public/css/plantillas/header1.css">
	<link rel="stylesheet" href="../../public/css/plantillas/footer.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

	<header>
	<?php include_once("../plantillas/header.html"); ?>
	</header>
	<main>
		<div class="title-btn">
			<p>Listado de Usuario</p>
			<div class="btn_main">
				<a href='ingresar.php'>
					<button type="button" class="agregar">
					<i class="fa-solid fa-plus"></i> Agregar</button>
				</a>

				<a href='../inicio/menu.php'>
					<button type="button" class="volver">
					<i class="fa-solid fa-arrow-rotate-left"></i> Volver</button>
				</a>
			</div>
		</div>

		<div class="filtro">
			<div class="campos_filtro">
				<label for="filtrar-tabla"></label>
				<input type="text" name="filtrar-tabla" id="buscar1" placeholder="ID Usuario" class="buscar1">
				<label for="filtrar-tabla"></label>
				<input type="text" name="filtrar-tabla" id="buscar2" placeholder="Usuario" class="buscar1">
				<label for="filtrar-tabla"></label>
				<input type="text" name="filtrar-tabla" id="buscar3" placeholder="Rol" class="buscar1">
			</div>

			<div class="btn-mod">
				<a id="mod" class="mod" onclick="cambiarModo()"><span id="id-moon" class="btn-mode moon"><i
							class="fas fa-sun"></i></span>/<span id="id-sun" class="btn-mode sun active"><i
							class="fas fa-moon"></i></span></a>
			</div>
		</div>
		
		<div class="table-contenedor">
			<table class="tabla">
				<thead>
					<tr>
						<th class="id">ID</th>
						<th class="nomb">Nombre</th>
						<th class="usu">Usuario</th>
						<th class="email">Correo</th>
						<th class="rol">Rol</th>
						<th colspan="2">Opciones</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($listaUsuario as $Usuario) {?>
					<tr class="usuario">

						<td class="idUsua">
							<?php echo $Usuario->getId_doc() ?>
						</td>
						<td class="nombUsua">
							<?php echo $Usuario->getNombre1()." ".$Usuario->getNombre2()." ".$Usuario->getApellido1()." ".$Usuario->getapellido2() ?>
						</td>
						<td class="nickUsua">
							<?php echo $Usuario->getUserName() ?>
						</td>
						<td class="emailUsua">
							<?php echo $Usuario->getEmail() ?>
						</td>
						<td class="rolUsua">
							<?php echo $Usuario->getRol() ?>
						</td>

						<td class="btn-usu">
							<a class="btn editar" id="btnActualizar" name="btnActualizar"
								href="actualizar.php?id_doc=<?php echo $Usuario->getId_doc()?>&accion=a">
								<button type="button" class="editar">
									<i class="fa-solid fa-pencil"></i>
								</button>
							</a>
						</td>
						<td class="btn-usu">
							<a type="submit" class="btn eliminar" id="btnEliminar" name="btnEliminar"
								href="../../controller/usuarioCtrl.php?id_doc=<?php echo $Usuario->getId_doc()?>&accion=e">
								<button type="button" class="eliminar">
									<i class="fa-solid fa-trash-can"></i>
								</button>
							</a>
						</td>
					</tr>
				<?php }?>
				</tbody>
			</table>
		</div>
	</main>
	<footer>
		<?php include_once("../plantillas/footer.html"); ?>
	</footer>

	<script src="../../public/js/usuario/filtrarUsuarios.js"></script>
	<script type="text/javascript" src="../../public/js/darkMode/darkMode.js"></script>
</body>
</html>


<?php
}?>