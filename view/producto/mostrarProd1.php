<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
    header("location:../../index.php");
}
else
{
    require_once('../../model/productoCRUD_Mdl.php');
    require_once('../../model/productoMdl.php');
    $crud = new CrudProducto();
    $Producto = new Producto();
    $listaProducto = $crud->mostrar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <title>Mostrar Producto</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/producto1.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <table>
            <?php include_once("../plantillas/header.html"); ?>
    </header>
    <br>
    <hr>
    <br>
    <div id="main-container">
        <thead>
            <tr>
                <th>Listado de Productos</th>
                <th colspan="1" class="bot1"><a href='agregarProducto.php'><button type="button" id="agregar"><i
                                class="fa-solid fa-plus"></i> Agregar</button></a></th>
                <th class="bot1"><a href='../inicio/menu.php'><button type="button" id="volver"><i
                                class="fa-solid fa-arrow-rotate-left"></i> Volver</button></a></th>
            </tr>
            <tr id="lis">
                <th colspan="2">
                    <div class="buscar">
                        <label for="filtrar-tabla"></label>
                        <input type="text" name="filtrar-tabla" id="buscar1" placeholder="ID Producto" class="buscar1">

                        <label for="filtrar-tabla"></label>
                        <input type="text" name="filtrar-tabla" id="buscar2" placeholder="Nombre Producto"
                            class="buscar1">


                    </div>
                </th>
                <th colspan="2">
                    <a id="mod" class="mod" onclick="cambiarModo()"><span id="id-moon" class="btn-mode moon"><i
                                class="fas fa-sun"></i></span>/<span id="id-sun" class="btn-mode sun active"><i
                                class="fas fa-moon"></i></span></a>
                    <script type="text/javascript" src="../../public/js/darkMode/darkMode.js"></script>
                </th>
            </tr>

            <tr>
                <th class="prod">Producto</th>
                <th class="opc" colspan="1">Modificar</th>
                <th class="opc" colspan="1">Eliminar</th>
            </tr>
        </thead>

        <?php foreach ($listaProducto as $Producto) {?>
        <tr class="producto">

            <td class="prod">
                <p>
                <div class="column">Imagen: </div><br><span class="img"><img src="<?php echo $Producto->getImgProd() ?>"
                        alt="<?php echo $Producto->getNombreProd() ?>"></span></p>

                <p><span class="column">ID: </span><span class="id">
                        <?php echo $Producto->getId_prod() ?>
                    </span></p>
                    
                <p><span class="column">Código de barras: </span><span class="codigo_bar">
                        <?php echo $Producto->getCodBar() ?>
                    </span></p>
                <p><span class="column">Nombre: </span><span class="nomb_prod nombProd">
                        <?php echo $Producto->getNombreProd() ?>
                    </span></p>
                <p><span class="column">Descripción: </span><span class="nomb_prod">
                        <?php echo $Producto->getDescripcion() ?>
                    </span></p>
                <p><span class="column">Precio: </span><span class="precio">$
                        <?php echo $Producto->getPrecio() ?> COP
                    </span></p>
                <p><span class="column">Disponible: </span><span class="cantidad">
                        <?php echo $Producto->getCantidadDisp() ?>
                    </span></p>
            </td>
            <td><a id="btnActualizar" name="btnActualizar"
                    href="actualizar.php?id_prod=<?php echo $Producto->getId_prod()?>&accion=a"><button type="button"><i
                            class="fa-solid fa-pencil"></i></button></a>
            </td>
            <td>
                <a type="submit" id="btnEliminar" name="btnEliminar"
                    href="../../controller/productoCtrl.php?id_prod=<?php echo $Producto->getId_prod()?>&accion=e"><button
                        type="button" id="eliminar"><i class="fa-solid fa-trash-can"></i></button></a>
            </td>

        </tr>
    </div>
    <?php }?>

    </table>
    <footer class="footer">
        <p>© S.M.I.E.P | 2022</p>
    </footer>
    <script src="../../public/js/producto/filtrarProducto.js"></script>

</body>

</html>
<?php
}?>