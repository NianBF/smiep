<?php
session_start();
if (isset($_SESSION["email"]) && isset($_SESSION["userName"]) && isset($_SESSION["pass"])) {
    require_once("model/validarMdl.php");
    $validar = new Validar();
    $validar->validarDatos();
    if (empty($_GET["u"])) {
        header("Location: ?u=inicio");
    }
    switch ($_GET["u"]) {
        case "inicio":
            include_once("view/inicio/menu.php");
            break;
    }
} else {

    if (isset($_SESSION["error"])) {

        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '¡Usuario, correo o contraseña incorrectos!'
          })</script>";
        unset($_SESSION["error"]);

    }
    switch ($_GET["u"]) {
        case "smiep":
            include_once("view/index.php");
            break;
        case "login":
            include_once("view/login/login.php");
            break;
    }
}