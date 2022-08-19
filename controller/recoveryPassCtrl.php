<?php
if (isset($_POST["id_doc"]) && isset($_POST["userName"]) && isset($_POST["email"]) && isset($_POST["id_ti"]) && isset($_POST["recoveryEmail"]))
{

    require_once("../model/recoveryPassMdl.php");
    $validar = new PassRecovery();
    $validar->validarDatos($_POST["id_doc"], $_POST["userName"], $_POST["email"], $_POST["id_ti"], $_POST["recoveryEmail"]);

}
else
{
    header("location:../view/login/passRecovery/recoveryPass.php");
}