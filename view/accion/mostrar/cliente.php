<?php
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or $_SESSION["pass"] == null) {
    header("location:../../");
} else {
    require_once('model/clienteCrud_mdl.php');
    require_once('model/ClienteMdl.php');
    $crud = new CrudCliente();
    $Cliente = new Cliente();
    $listaCliente = $crud->mostrar();
?>
<legend>Listado de Clientes</legend>
<div class="btnMos">
    <a href='view/cliente/ingresar.php' class="add"><span><i class="fa-solid fa-plus"></i></span>Agregar</a>
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
                <th>Documento</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th class="opcTitle">Opciones</th>
            </tr>
        </thead>
        <tbody class="contentTable">
            <?php foreach ($listaCliente as $Cliente) { ?>
            <tr class="row">
                <td class="idCli id">
                    <?php echo $Cliente->getId_CliDoc(); ?>
                </td>
                <td class="nombCli">
                    <?php echo $Cliente->getNombreCli1() . " " . $Cliente->getNombreCli2() . " " . $Cliente->getApellidoCli1() . " " . $Cliente->getApellidoCli2(); ?>
                </td>
                <td class="numbCli">
                    <?php echo $Cliente->getTelCli(); ?>
                </td>
                <td class="emailCli">
                    <?php echo $Cliente->getEmailCli(); ?>
                </td>
                <td class="btnOpt">
                    <a class="delete btnOptDel" type="submit"
                        href="controller/clienteCtrl.php?id_cliDoc=<?php echo $Cliente->getId_CliDoc() ?>&accion=e">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>

                    <a class="update btnOptUpd" type="submit"
                        href="view/cliente/actualizar.php?id_cliDoc=<?php echo $Cliente->getId_cliDoc(); ?>&accion=a">
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