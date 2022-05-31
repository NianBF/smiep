<?php
session_start();
require_once('../../model/categoriaCrud_Mdl.php');
require_once('../../model/categoriaMdl.php');
$crud=new CrudCategoria();
$Categoria= new Categoria();

$listaCategoria=$crud->mostrar();
?>


 <!DOCTYPE html>
 <html lang="es">
<head>
<meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    
	<title>categoria</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../public/css/catalogo.css">
</head>
<body>
<table>
	<div>
    <a href="../../controller/salirCtrl.php"><button class="boton"><span>salir</span></button></a>
    </div>
    <header>
        <a href="../inicio/menu.php"><span class="icon"><figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="150px"></figure></a>
        <h1 class="titulo">S.M.I.E.P</h1>
        <h3 class="subtitulo">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
    </header>
        <br>
        <hr>
        <br>
        <h4>CATEGORIA</h4>
        <h5>TIPOS DE CATEGORIA</h5>
        <a href="ingresar.php" class="agregar">Agregar</a>
        <br>
        <br>

        <label for="filtrar-tabla"></label>
		<input type="text" name="filtro" id="filtrar-tabla" placeholder="categoria">

		<tr>
    <th>ID CATEGORIA</th>
    <th>CATEGORIA</th>
    <th>Eliminar</th>

    </tr>
		<?php foreach ($listaCategoria as $Categoria) {?>
		<tr class="categoria">
	
				<td class="idCat"><?php echo $Categoria->getid_Cat() ?></td>
				<td class="nombCat"><?php echo $Categoria->getnCategoria() ?></td>
				<td><a class="eliminar" type="submit"  
                href="../../controller/categoriaCtrl.php?id_Cat=<?php echo $Categoria->getid_Cat()?>&accion=e" >Eliminar</a></td>	
			</tr>
			<?php }?>
	</table>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../public/js/categoria/filtrarCategoria.js"></script>
	
	
	
</body>
</html>