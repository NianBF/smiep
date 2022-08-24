<?php
use PhpParser\Node\Expr\FuncCall;
require_once("conexion.php");

class PassDefault {
    public function respawnPass($email, $id_doc, $newPass) {

        $con = null;
        $sql = null;
        $resultado = null;
        $cantidad_resultado = null;

        // Recuperamos la conexión
        $con = Conexion::getConection();

        // Validación de error
        if ($con == "ERROR")
        {
            echo "<script>alert('Error en BD')</script>";
            header("location:../view/login/recoveryPass/recoveryPassto.php");
        }

        // Consulta
        $sql = "UPDATE usuario SET password = MD5($newPass) WHERE id_doc = :USERDOC AND email = :EMAIL";

        $resultado = $con->prepare($sql);
        $resultado->execute(array(":USERDOC" => $id_doc, ":EMAIL" => $email));

        $cantidad_resultado = $resultado->rowCount();

        if ($cantidad_resultado == 0)
        {
            echo "<script>alert('Su contraseña NO se actualizó satisfactoriamente'); window.location='../view/login/recoveryPass/recoveryPassto.php'</script>";
            
        }
        elseif($cantidad_resultado == 1)
        {
            echo "<script>alert('Su contraseña se actualizó satisfactoriamente'); window.location='../view/login/login.php'</script>";
        }

    }
}