<?php
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
    header("location:../../");
}
else
{
    require_once('model/productoCRUD_Mdl.php');
    require_once('model/productoMdl.php');
    $crud = new CrudProducto();
    $Producto = new Producto();
    $listaProducto = $crud->mostrar();
?>


        <legend>Listado de Productos</legend>
        <div class="btnMos">
                <a href='?u=accion&action=create&table=producto' class="add"><span><i class="fa-solid fa-plus"></i></span>Agregar</a>
                <a href='?u=inicio' class="back"><span><i
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
                        href="controller/productoCtrl.php?id_prod=<?php echo $Producto->getId_prod()?>&accion=e">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                
                        <a class="update btnOptUpd" type="submit"
                        href="?u=accion&action=update&table=producto&id_prod=<?php echo $Producto->getId_prod()?>&accion=a">
                                <i class="fa-solid fa-pencil"></i>
                        </a>
                    </td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
<?php
}?>