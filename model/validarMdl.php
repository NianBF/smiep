<?php

require_once("conexion.php");

class Validar
{

    public function validarDatos()
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
            $resultado->execute(array(":USERNAME" => $_SESSION["userName"], ":EMAIL" => $_SESSION["email"], ":PASS" => $_SESSION["pass"]));

            $cantidad_resultado = $resultado->rowCount();

            if ($cantidad_resultado == 1)
            {
                if ($_SESSION["rol"] == "Administrador") {
                    header("location:view/inicio/menu.php");
                }elseif ($_SESSION["rol"] == "Empleado") {
                    header("location:module/vender");
                }

            }
            else
            {
                echo "<script>alert('Error val')</script>";
                header("location:controller/salirCtrl.php");
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
        }
    }

}