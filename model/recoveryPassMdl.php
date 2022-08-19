<?php
require_once("conexion.php");

class PassRecovery
{
    public function validarDatos($id_doc, $userName, $email, $id_ti, $recoveryEmail)
    {

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
            header("location:../view/login/recoveryPass/recoveryPass.html");
        }

        // Consulta
        $sql = "SELECT id_doc, userName, email, rol, tienda.nombreTienda FROM usuario INNER JOIN tienda ON tienda.id_ti=usuario.id_ti WHERE id_doc = :USERDOC AND userName = :USERNAME AND email = :EMAIL AND tienda.id_ti = :TIENDA";

        $resultado = $con->prepare($sql);
        $resultado->execute(array(":USERDOC" => $id_doc, ":USERNAME" => $userName, ":EMAIL" => $email, ":TIENDA" => $id_ti));

        $cantidad_resultado = $resultado->rowCount();

        if ($cantidad_resultado == 0)
        {
            echo "<script>alert('Usuario no encontrado'); window.location='../view/login/recoveryPass/recoveryPass.php'</script>";
            
        }
        elseif($cantidad_resultado == 1)
        {
            $GLOBALS["id_doc"] = $id_doc;
            $GLOBALS["userName"] = $userName;
            $GLOBALS["email"] = $email;
            $GLOBALS["id_ti"] = $id_ti;
            $GLOBALS["recoveryEmail"] = $recoveryEmail;
            header("location:../view/login/recoveryPass/recoveryPassto.php?recoveryEmail=$recoveryEmail&id_doc=$id_doc&userName=$userName");
        }

    }
}