<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
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
	<title>Mostrar Categoria</title>
	<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
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
        <br>
        <div id="main-container">
        <thead>
        <tr>
            <th colspan="7">Listado de Categoria <a href='ingresar.php'><button type="button" id="agregar"><i class="fa-solid fa-plus"></i>  Nueva Categoria</button></a>
            <a href='../inicio/menu.php'><button type="button" id="volver"><i class="fa-solid fa-arrow-rotate-left"></i> Volver</button></a></th>
        </tr>
        <tr id="lis">
            <th colspan="7">
             <div class="buscar">
                <label for="filtrar-tabla"></label>
		        <input type="text" name="filtrar-tabla" id="filtrar-tabla" placeholder="Categoria" class="buscar1">
             </div>
            </th>
            </tr>
	    <tr>
            <th>ID Categoria</th>
            <th>Categoria</th>
            <th>Opcion</th>
        </tr>
        </thead>
		<?php foreach ($listaCategoria as $Categoria) {?>
		<tr class="categoria">
	
				<td class="idCat"><?php echo $Categoria->getid_Cat() ?></td>
				<td class="nombCat"><?php echo $Categoria->getnCategoria() ?></td>
				<td><a class="eliminar" type="submit"  
                href="../../controller/categoriaCtrl.php?id_Cat=<?php echo $Categoria->getid_Cat()?>&accion=e"><button type="button" id="eliminar"><i class="fa-solid fa-trash-can"></i></button></a></td>
			</tr>
        </div>
			<?php }?>
	</table>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../public/js/categoria/filtrarCategoria.js"></script>
</body>
</html>
<?php } ?>