<?php
class Conexion
{

    public static function getConection()
    {

        $con = null;

        try
        {

            // Conexión
            $con = new PDO('mysql:host=localhost; dbname=smiep', 'root', '');

            // Errores
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Caracteres utf8
            $con->exec("SET CHARACTER SET utf8");

        }
        catch (Exception $e)
        {

            $con = "ERROR";

        }
        finally
        {

            return $con;

        }
    }

}