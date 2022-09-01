<?php

require_once("conexion.php");

class Login
{

    public function validarDatos($email, $userName, $password)
    {

        try
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
                header("location:salirCtrl.php");
            }

            // Consulta
            $sql = "SELECT * FROM usuario WHERE userName = :USERNAME AND email = :EMAIL AND password = :PASS";

            $resultado = $con->prepare($sql);
            $resultado->execute(array(":USERNAME" => $userName, ":EMAIL" => $email, ":PASS" => $password));

            foreach($resultado->fetchAll() as $usuario){
                $rol= $usuario["rol"];
                $doc= $usuario["id_doc"];
            }
/*             $rol = $resultado->fetchColumn(8);
            $doc = $resultado->fetchColumn(1); */

            $cantidad_resultado = $resultado->rowCount();

            session_start();

            if ($cantidad_resultado === 1)
            {
                $_SESSION["rol"] = $rol;
                $_SESSION["email"] = $email;
                $_SESSION["userName"] = $userName;
                $_SESSION["pass"] = $password;
                $_SESSION["docUsu"] = $doc;

            }
            else
            {
                $_SESSION["error"] = "ERROR";

            }


        }
        catch (Exception $e)
        {


        }
        finally
        {

            $con = null;
            $sql = null;
            $resultado = null;
            $cantidad_resultado = null;
            header("location:../index.php");

        }

    }

}