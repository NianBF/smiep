<?php
if (isset($_POST["email"]) && isset($_POST["id_doc"]) && isset($_POST["res"])) {
    $NUM1 = $_POST["num1"];
    $NUM2 = $_POST["num2"];
    $res = $NUM1 + $NUM2;
    $resR = intval($_POST["res"]);
    
    if ($resR == $res) {
    require_once("../model/passDefaultMdl.php");
    $validar = new PassDefault();
    $validar->respawnPass($_POST["email"], $_POST["id_doc"]);
    }else
    {
        header("location:../view/login/recoveryPass/recoveryPassto.php");
    }
}
else
{
    header("location:../view/login/recoveryPass/recoveryPassto.php");
}