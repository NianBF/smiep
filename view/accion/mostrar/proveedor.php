<?php
if (
    $_SESSION['email'] == null or $_SESSION["userName"] == null or
    $_SESSION["pass"] == null
) {
    header("location:../../");
} else {
    require_once('model/proveedorCrud_Mdl.php');
    require_once('model/proveedorMdl.php');
    $crud = new CrudProveedor();
    $Proveedor = new Proveedor();
    $listaProveedor = $crud->mostrar();
?>
<legend>Listado de Proveedores</legend>
<div class="btnMos">
    <a href='?u=accion&action=create&table=proveedor' class="add"><span><i class="fa-solid fa-plus"></i></span>Agregar</a>
    <a href='?u=inicio' class="back"><span><i class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
</div>
<div class="searchNav">
    <div class="buscarOne">
        <input type="text" name="filtrar-tabla1" class="buscar1" id="buscar1" placeholder="ID Clientes" class="buscar1">
        <button type="button" class="searchBtn">
            <i class="ri-search-2-line"></i>
        </button>
    </div>
    <span class="labelsito">
        <label for="filtrar-tabla1">ID</label>
    </span>
    <div class="buscarTwo">
        <input type="text" name="filtrar-tabla2" class="buscar1" id="buscar2" placeholder="Empresa" class="buscar1">
        <button type="button" class="searchBtn">
            <i class="ri-search-2-line"></i>
        </button>
    </div>
    <span class="labelsito">
        <label for="filtrar-tabla2">Empresa</label>
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
                <th>ID Proveedor</th>
                <th>Nombre</th>
                <th>Empresa</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th class="opcTitle">Opciones</th>
            </tr>
        </thead>
        <tbody class="contentTable">
            <?php foreach ($listaProveedor as $Proveedor) { ?>
            <tr class="row">
                <td class="idProv id">
                    <?php echo $Proveedor->getId_DocProv() ?>
                </td>
                <td class="nombreProv">
                    <?php echo $Proveedor->getNombProv1() . " " . $Proveedor->getNombProv2() . " " . $Proveedor->getApeProv1() . " " . $Proveedor->getApeProv2() ?>
                </td>
                <td class="empresa">
                    <?php echo $Proveedor->getEmpresa() ?>
                </td>
                <td class="direccion">
                    <?php echo $Proveedor->getDireccion1() . " " . $Proveedor->getDireccion2() ?>
                </td>
                <td class="numProv">
                    <?php echo $Proveedor->getNumTel1() ?>
                </td>
                <td class="email">
                    <?php echo $Proveedor->getEmail1() ?>
                </td>
                <td class="btnOpt">
                    <a class="delete btnOptDel" type="submit"
                        href="controller/ProveedorCtrl.php?id_DocProv=<?php echo $Proveedor->getId_DocProv(); ?>&accion=e">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <a class="update btnOptUpd" type="submit"
                        href="?u=accion&action=update&table=proveedor&id_DocProv=<?php echo $Proveedor->getId_DocProv() ?>&accion=a">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
} ?>