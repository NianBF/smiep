<?php
if (isset($_POST["email"]) && isset($_POST["userName"]) && isset($_POST["pass"]))
{

    require_once("../model/loginMdl.php");
    $validar = new Login();
    $validar->validarDatos($_POST["email"], $_POST["userName"], MD5($_POST["pass"]));

}
else
{
    header("location:../?u=smiep");
}