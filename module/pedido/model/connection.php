<?php
/**
 * Conexión a la DB del sistema.
 */
class Conection
{
    public static function getConection()
    {
        $mbd = null;
        try {
            // Conexión
            $mbd = new PDO('mysql:host=us-cdbr-east-05.cleardb.net; dbname=heroku_619553700a45b98', 'bcc4441154c3a9', 'b4a4c01d');
            // Errores
            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Caracteres utf8
            $mbd->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            $mbd = NULL;
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();

        } finally {
            return $mbd;
        }
    }

}