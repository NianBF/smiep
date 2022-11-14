<?php
require_once("connection.php");
class Venta
{
    private $db; //Variable para iniciar la conexión
    // constructor de la clase
    public function __construct()
    {
        $this->db = Conection::getConection(); //Inicia la conexión en todo el archivo
    }
    public function venta($id_venta, $id_cliDoc, $total, $user, $id_caja)
    {
        try {
            $sql = "INSERT INTO venta (id_venta, id_cliDoc, total, id_doc, id_caja) VALUES (:VENTA, :CLIENTE, :TOTAL, :USUARIO, :CAJA);";
            $query = $this->db->prepare($sql);
            $query->execute(array(":VENTA" => $id_venta, ":CLIENTE" => $id_cliDoc, ":TOTAL" => $total, ":USUARIO" => $user, ":CAJA" => $id_caja));
            $cantidad_resultado = $query->rowCount();

            if ($cantidad_resultado == 1) {
                header("Location: ../?u=v&action=buy");
            }else{
                header("Location: ../?u=p&action=pay");
            }
        } catch (PDOException $e){
            echo $e;
        }
    }
}