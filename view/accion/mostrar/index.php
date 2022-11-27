<?php
if (
    $_SESSION['email'] == null or $_SESSION["userName"] == null or
    $_SESSION["pass"] == null
) {
    header("location:../../");
} else {
    switch ($_GET['table']) {
        case "usuario":
            include_once("view/accion/mostrar/usuario.php");
            break;
        case "cliente":
            include_once("view/accion/mostrar/cliente.php");
            break;
        case "proveedor":
            include_once("view/accion/mostrar/proveedor.php");
            break;
    }
}