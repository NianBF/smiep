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
    public function venta($id_venta, $id_cliDoc, $total, $user, $id_caja, $cantidadDisp, $cantidadNew, $id_prod)
    {
        try {
            $sql = null;
            $cantidad_resultado = null;

            $sql = "SELECT id_venta FROM venta WHERE id_venta = :VENTA;";
            $query = $this->db->prepare($sql);
            $query->execute(array(":VENTA" => $id_venta));
            $cantidad_resultado = $query->rowCount();
            switch ($cantidad_resultado) {
                case 0:
                    $sql = "INSERT INTO venta (id_venta, id_cliDoc, total, id_doc, id_caja) VALUES (:VENTA, :CLIENTE, :TOTAL, :USUARIO, :CAJA);";
                    $query = $this->db->prepare($sql);
                    $query->execute(array(":VENTA" => $id_venta, ":CLIENTE" => $id_cliDoc, ":TOTAL" => $total, ":USUARIO" => $user, ":CAJA" => $id_caja));
                    $cantidad_resultado1 = $query->rowCount();
                    switch ($cantidad_resultado1) {
                        case 1:
                            $prod = count($id_prod);
                            for ($i = 0; $i <= $prod - 1; $i++) {
                                foreach ($id_prod as $key => $id_prod) {
                                    Venta::tzProdV($cantidadDisp[$key], $cantidadNew[$key], $id_prod, $user, $id_venta);
                                    Venta::updateProd($cantidadDisp[$key], $cantidadNew[$key], $id_prod, $id_venta);
                                }
                            }
                    }
                    break;
                case 1:
                    $dn = mt_rand(2001, 4000);
                    $sql = "INSERT INTO venta (id_venta, id_cliDoc, total, id_doc, id_caja) VALUES (:VENTA, :CLIENTE, :TOTAL, :USUARIO, :CAJA);";
                    $query = $this->db->prepare($sql);
                    $query->execute(array(":VENTA" => $dn, ":CLIENTE" => $id_cliDoc, ":TOTAL" => $total, ":USUARIO" => $user, ":CAJA" => $id_caja));
                    $cantidad_resultado1 = $query->rowCount();
                    switch ($cantidad_resultado1) {
                        case 1:
                            $prod = count($id_prod);
                            for ($i = 0; $i <= $prod - 1; $i++) {
                                foreach ($id_prod as $key => $id_prod) {
                                    Venta::tzProdV($cantidadDisp[$key], $cantidadNew[$key], $id_prod, $user, $dn);
                                    Venta::updateProd($cantidadDisp[$key], $cantidadNew[$key], $id_prod, $id_venta);
                                }
                            }
                    }
                    break;
            }
        } catch (PDOException $e) {
            echo $e;
        }
    }
    public function tzProdV($qtyOld, $qtyNew, $id_prod, $id_docUsu, $id_venta)
    {
        try {
            $sql = null;
            $cantidad_resultado = null;
            $sql = "INSERT INTO tzprod (cantidadDisp, cantidadNew, id_prod, id_docUsu, id_venta) VALUES (:QTYOLD, :QTYNEW, :PRODUCTO, :USUARIO, :VENTA)";
            $query = $this->db->prepare($sql);
            $query->execute(array(":QTYOLD" => $qtyOld, ":QTYNEW" => $qtyNew, ":PRODUCTO" => $id_prod, ":USUARIO" => $id_docUsu, ":VENTA" => $id_venta));
            $cantidad_resultado = $query->rowCount();
        } catch (PDOException $e) {
            echo $e;
        }

    }
    public function updateProd($qtyOld, $qtyNew, $id_prod, $id_venta)
    {
        try {
            $qtyDisp = $qtyOld - $qtyNew;
            $sql = null;
            $cantidad_resultado = null;
            $sql = "UPDATE producto SET cantidadDisp = :QTYDISP WHERE id_prod = :PRODUCTO";
            $query = $this->db->prepare($sql);
            $query->execute(array(":QTYDISP" => $qtyDisp, ":PRODUCTO" => $id_prod));
            $cantidad_resultado = $query->rowCount();
            switch ($cantidad_resultado) {
                case 1:
                    header("Location: ../?u=e&action=great&id=$id_venta");
                    break;
            }
        } catch (PDOException $e) {
            echo $e;
        }
    }
}