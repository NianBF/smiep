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
    $state = $crud->UpdState();
    $state = $crud->UpdStateU();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="1800" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <!--Color para navegador móvil-->
    <meta name="theme-color" content="#339999">
    <title>SMIEP</title>
    
  
    <link rel="stylesheet" href="../../public/css/mostarAll.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <!--Fuente de iconos-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
    <header>
        <?php include_once("../plantillas/header.html"); ?>
    </header>

    <section class="contentList">
        <fieldset>

        <legend>Listado de Productos</legend>
        <div class="btnMos">
                <a href='ingresar.php' class="add"><span><i class="fa-solid fa-plus"></i></span>Agregar</a>
                <a href='../inicio/menu.php' class="back"><span><i
                            class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
        </div>

        
        <div class="searchNav">
            <div class="buscarOne">
                <input type="text" name="filtrar-tabla1" class="buscar1" id="buscar1" placeholder="ID Producto"
                    class="buscar1">
                <button type="button" class="searchBtn">
                    <i class="ri-search-2-line"></i>
                </button>
            </div>
            <span class="labelsito">
                <label for="filtrar-tabla1">ID</label>
            </span>
            <div class="buscarTwo">
                    <input type="text" name="filtrar-tabla2" class="buscar1" id="buscar2" placeholder="Codigo de Barras"
                        class="buscar1">
                    <button type="button" class="searchBtn">
                        <i class="ri-search-2-line"></i>
                    </button>
                </div>
                <span class="labelsito">
                    <label for="filtrar-tabla2">Cod Barras</label>
                </span>
                <div class="buscarThree">
                    <input type="text" name="filtrar-tabla3" class="buscar1" id="buscar3" placeholder="Producto"
                        class="buscar1">
                    <button type="button" class="searchBtn">
                        <i class="ri-search-2-line"></i>
                    </button>
                </div>
                <span class="labelsito">
                    <label for="filtrar-tabla3">Producto</label>
                </span>
                
            <div class="darkMode">
                <a id="mod" class="mod" onclick="cambiarModo()">
                    <span id="id-moon" class="btn-mode moon">
                        <i class="fas fa-sun"></i>
                    </span>/
                    <span id="id-sun" class="btn-mode sun active">
                        <i class="fas fa-moon"></i>
                    </span>
                </a>
            </div>
        </div>

        <div class="listElements">
            <table>
                <thead>
                    <tr class="titleTable">
                        <th>Imagen</th>
                        <th>ID</th>
                        <th>Codigo de Barras</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>precio</th>
                        <th>Disponible</th>
                        <th>Estado</th>
                        <th class="opcTitle">Opciones</th>
                    </tr>
                </thead>
                <tbody class="contentTable">
                <?php foreach ($listaProducto as $Producto) {?>
                <tr class="row">

                    <td class="img">
                        <img src="<?php echo $Producto->getImgProd() ?>"
                        alt="<?php echo $Producto->getNombreProd() ?>">
                    </td>
                    <td class="idProd">
                        <?php echo $Producto->getId_prod() ?>
                    </td>
                    <td class="codBar">
                        <?php echo $Producto->getCodBar() ?>
                    </td>
                    <td class="nombProd">
                        <?php echo $Producto->getNombreProd() ?>
                    </td>
                    <td class="descripcion">
                        <?php echo $Producto->getDescripcion() ?>
                    </td>
                    <td class="precio">
                        <?php echo $Producto->getPrecio() ?> COP
                    </td>
                    <td class="disponible">
                        <?php echo $Producto->getCantidadDisp() ?>
                    </td>
                   <td class="Estado">
                        <?php echo $Producto->getEstado(); ?>
                    </td> 

                    <td class="btnOpt">
                        <a class="delete btnOptDel" type="submit"
                        href="../../controller/productoCtrl.php?id_prod=<?php echo $Producto->getId_prod()?>&accion=e">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                
                        <a class="update btnOptUpd" type="submit"
                        href="actualizar.php?id_prod=<?php echo $Producto->getId_prod()?>&accion=a">
                                <i class="fa-solid fa-pencil"></i>
                        </a>
                    </td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
        </fieldset>
    </section>

    <footer>
        <?php include_once("../plantillas/footer.html"); ?>
    </footer>
    

    <script type="module" src="../../public/js/producto/filtrarProducto.js"></script>
</body>

</html>
<?php
}?>