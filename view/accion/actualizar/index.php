<?php
if (
    $_SESSION['email'] == null or $_SESSION["userName"] == null or
    $_SESSION["pass"] == null
) {
    header("location:../../");
} else {
?>
<section class="initForm">
    <?php
    switch ($_GET['table']) {
        case "usuario":
            include_once("view/accion/actualizar/usuario.php");
            break;
        case "cliente":
            include_once("view/accion/actualizar/cliente.php");
            break;
        case "proveedor":
            include_once("view/accion/actualizar/proveedor.php");
            break;
        case "producto":
            include_once("view/accion/actualizar/producto.php");
            break;
    }
    ?>  
</section>
<?php
} ?>