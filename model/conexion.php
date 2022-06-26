<?php
class Conexion
{

    public static function getConection()
    {

        $con = null;

        try
        {

            // Conexión
            $con = new PDO('mysql:host=us-cdbr-east-05.cleardb.net; dbname=heroku_619553700a45b98', 'bcc4441154c3a9', 'b4a4c01d');

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