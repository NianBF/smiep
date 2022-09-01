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
//Almacenamiento de la consulta para crear sesiones
            foreach($resultado->fetchAll() as $usuario){
                $rol= $usuario["rol"];
                $doc= $usuario["id_doc"];
            }
            $cantidad_resultado = $resultado->rowCount();

            session_start();

            if ($cantidad_resultado === 1)
            {
                $_SESSION["email"] = $email;
                $_SESSION["userName"] = $userName;
                $_SESSION["pass"] = $password;
                $_SESSION["rol"] = $rol;
//La sesión de docUsu será usada para el registro en la base de datos
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