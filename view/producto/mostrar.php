<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
require_once('../../model/productoCRUD_Mdl.php');
require_once('../../model/productoMdl.php');
$crud=new CrudProducto();
$Producto= new Producto();

$listaProducto=$crud->mostrar();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <title>Mostrar Producto</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/producto.css">   
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script> 
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
                <th colspan="7">Listado de Productos <a href='agregarProducto.php'><button type="button" id="agregar"><i class="fa-solid fa-plus"></i>  Nuevo Producto</button></a>
                <a href='../inicio/menu.php'><button type="button" id="volver"><i class="fa-solid fa-arrow-rotate-left"></i> Volver</button></a></th>
            </tr>
            <tr id="lis">
            <th colspan="7">
             <div class="buscar">
                <label for="filtrar-tabla"></label>
		        <input type="text" name="filtrar-tabla" id="filtrar-tabla" placeholder="Productos" class="buscar1">
             </div>
            </th>
            </tr>

        <tr>
            <th>ID</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th colspan="2">Opciones</th>
        </tr>
        </thead>

        <?php foreach ($listaProducto as $Producto) {?>
        <tr class="producto">

            <td class="id">
                <?php echo $Producto->getId_prod() ?>
            </td>
            <td class="codigo-bar">
                <?php echo $Producto->getCodBar() ?>
            </td>
            <td class="nomb_prod">
                <?php echo $Producto->getNombreProd() ?>
            </td>
            <td class="precio">
                <?php echo $Producto->getPrecio() ?>
            </td>

            <td class="cantidad">
                <?php echo $Producto->getCantidadDisp() ?>
            </td>
            <td><a id="btnActualizar" name="btnActualizar"
                    href="actualizar.php?id_prod=<?php echo $Producto->getId_prod()?>&accion=a"><button type="button"><i class="fa-solid fa-pencil"></i></button></a>
            </td>
            <td><a type="submit" id="btnEliminar" name="btnEliminar"
                    href="../../controller/productoCtrl.php?id_prod=<?php echo $Producto->getId_prod()?>&accion=e"><button type="button" id="eliminar"><i class="fa-solid fa-trash-can"></i></button></a>
            </td>
            
        </tr>
        </div>
        <?php }?>

    </table>
        <script src="../../public/js/producto/filtrarProducto.js"></>
</body>

</html>
<?php } ?>