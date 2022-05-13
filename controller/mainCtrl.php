<?php

session_start();
if (isset($_SESSION["email"]) && isset($_SESSION["userName"]) && isset($_SESSION["pass"]))
{

    require_once("model/validarMdl.php");
    $validar = new Validar();
    $validar->validarDatos();

    include_once("view/inicio/menu.php");

}
else
{

    if (isset($_SESSION["error"]))
    {

        echo "<script>alert('Usuario, email o contraseña incorrecto')</script>";
        unset($_SESSION["error"]);

    }

    include_once("view/index.php");
}