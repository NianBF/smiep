<?php
if (
    $_SESSION['email'] == null or $_SESSION["userName"] == null or
    $_SESSION["pass"] == null
) {
    header("location:../../");
} else {
    require_once('model/usuarioCrud_Mdl.php');
    require_once('model/usuarioMdl.php');
    $crud = new CrudUsuario();
    $Usuario = new Usuario();
    $listaUsuario = $crud->mostrar();
?>
<legend>Listado de Usuarios</legend>
<div class="btnMos">
    <a href='?u=accion&action=create&table=usuario' class="add"><span><i class="fa-solid fa-plus"></i></span>Agregar</a>
    <a href='?u=inicio' class="back"><span><i class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
</div>
<div class="searchNav">
    <div class="buscarOne">
        <input type="text" name="filtrar-tabla1" class="buscar1" id="buscar1" placeholder="ID Usuario" class="buscar1">
        <button type="button" class="searchBtn">
            <i class="ri-search-2-line"></i>
        </button>
    </div>
    <span class="labelsito">
        <label for="filtrar-tabla1">ID</label>
    </span>
    <div class="buscarTwo">
        <input type="text" name="filtrar-tabla2" class="buscar1" id="buscar2" placeholder="Usuario" class="buscar1">
        <button type="button" class="searchBtn">
            <i class="ri-search-2-line"></i>
        </button>
    </div>
    <span class="labelsito">
        <label for="filtrar-tabla2">Usuario</label>
    </span>
    <div class="buscarThree">
        <input type="text" name="filtrar-tabla3" class="buscar1" id="buscar3" placeholder="Rol Usuario" class="buscar1">
        <button type="button" class="searchBtn">
            <i class="ri-search-2-line"></i>
        </button>
    </div>
    <span class="labelsito">
        <label for="filtrar-tabla3">Rol</label>
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
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Rol</th>
                <th class="opcTitle">Opciones</th>
            </tr>
        </thead>
        <tbody class="contentTable">
            <?php foreach ($listaUsuario as $Usuario) { ?>
            <tr class="row">
                <td class="id" id="id_doc">
                    <?php echo $Usuario->getId_doc() ?>
                </td>
                <td class="colName">
                    <?php echo $Usuario->getNombre1() . " " . $Usuario->getNombre2() . " " . $Usuario->getApellido1() . " " . $Usuario->getapellido2() ?>
                </td>
                <td class="userName">
                    <?php echo $Usuario->getUserName() ?>
                </td>
                <td class="email">
                    <?php echo $Usuario->getEmail() ?>
                </td>
                <td class="rol">
                    <?php echo $Usuario->getRol() ?>
                </td>
                <td class="btnOpt">
                    <a class="delete btnOptDel" type="button" href="controller/usuarioCtrl.php?id_doc=<?php echo $Usuario->getId_doc() ?>&accion=e">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <a class="update btnOptUpd" type="submit" href="actualizar.php?id_doc=<?php echo $Usuario->getId_doc() ?>&accion=a">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
}
?>