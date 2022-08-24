<?php
if (isset($_POST["email"]) && isset($_POST["id_doc"]) && isset($_POST["confNewPass"])) {
  
    require_once("../model/passDefaultMdl.php");
    $validar = new PassDefault();
    $validar->respawnPass($_POST["email"], $_POST["id_doc"], $_POST["confNewPass"]);

}
else
{
    header("location:../view/login/recoveryPass/recoveryPassto.php");
}