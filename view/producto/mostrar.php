<?php
session_start();
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
    <title>Mostrar producto</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/catalogo.css">

</head>

<body>
    <table>
        <div>
            <a href="../../controller/salirCtrl.php"><button class="boton"><span>salir</span></button></a>
        </div>
        <header>
            <a href="../inicio/menu.php"><span class="icon">
                    <figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="150px"></figure>
            </a>
            <h1 class="titulo">S.M.I.E.P</h1>
            <h3 class="subtitulo">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
        </header>
        <br>
        <br>
        <br>
        <hr>
        <br>
        <h4>Productos</h4>
        <h5>Productos de Grano</h5>
        <a href="agregarProducto.php" class="agregar">Agregar</a>
        <br>
        <br>

        <tr>
            <th>ID</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Editar</th>
            <th>Eliminar</th>

        </tr>

        <?php foreach ($listaProducto as $Producto) {?>
        <tr>

            <td>
                <?php echo $Producto->getId_prod() ?>
            </td>
            <td>
                <?php echo $Producto->getCodBar() ?>
            </td>
            <td>
                <?php echo $Producto->getNombreProd() ?>
            </td>
            <td>
                <?php echo $Producto->getPrecio() ?>
            </td>

            <td>
                <?php echo $Producto->getCantidadDisp() ?>
            </td>
            <td><a class="editar" id="btnActualizar" name="btnActualizar"
                    href="actualizar.php?id_prod=<?php echo $Producto->getId_prod()?>&accion=a">Actualizar</a>
            </td>
            <td><a type="submit" class="btn btn-outline-light eliminar" id="btnEliminar" name="btnEliminar"
                    href="../../controller/productoCtrl.php?id_prod=<?php echo $Producto->getId_prod()?>&accion=e">Eliminar</a>
            </td>
        </tr>
        <?php }?>

    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</body>

</html>