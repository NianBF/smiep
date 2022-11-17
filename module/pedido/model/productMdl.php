<?php
use FTP\Connection;

require_once("connection.php");
class Product
{
    private $db; //Variable para iniciar la conexión
    // constructor de la clase
    public function __construct()
    {
        $this->db = Conection::getConection(); //Inicia la conexión en todo el archivo
    }
    public function getProducts()
    {
        try {
            $Product = [];
            $sql = "SELECT * from producto";
            $query = $this->db->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);

            if ($query->rowCount() > 0) {

                // Usaremos el ciclo para mostrar resultados
                foreach ($result as $results) {
                    $myProducto = new ProductMdl();
                    $myProducto->setId_prod($results->id_prod);
                    $myProducto->setImgProd($results->imgProd);
                    $myProducto->setCodBar($results->codBar);
                    $myProducto->setNombreProd($results->nombreProd);
                    $myProducto->setPrecio($results->precio);
                    $myProducto->setCantidadDisp($results->cantidadDisp);

                    $Product[] = $myProducto;
                }
                return $Product;
            }
        } catch (PDOException $e) {
        }
    }
    public function obtenerProd($id_prod)
    {
        $query = $this->db->prepare("SELECT * FROM producto WHERE id_prod= :IDPROD");
        $query->bindValue('IDPROD',$id_prod);
        $query->execute();
        $result = $query->fetch();
        $myProducto = new ProductMdl();
        $myProducto->setId_prod($result['id_prod']);
        $myProducto->setCantidadDisp($result['cantidadDisp']);
        return $myProducto;
    }
    public function UpdateProd($cantDisp, $cantNew, $id_prod)
    {
        $query = $this->db->prepare("UPDATE producto SET cantidadDisp=:CANTNEW WHERE id_prod=:IDPROD");
        $total = $cantDisp + $cantNew;
        $query->execute(array(':CANTNEW' => $total, ':IDPROD' => $id_prod));
        return $query;
    }

    public function InstzProd($cantOld, $cantNew, $id_prod, $id_usu, $id_pedido){
        $total = $cantOld + $cantNew;
        $query= $this->db->prepare("INSERT INTO tzProd (cantidadDisp,cantidadNew,id_prod,id_docUsu,id_pedido,id_venta) VALUES (:CANTOLD,:CANTNEW,:IDPROD,:IDDOC,:IDPED,1)");
        $query->execute(array(':CANTOLD'=>$cantOld,':CANTNEW'=>$total, ':IDPROD'=>$id_prod,':IDDOC'=>$id_usu,':IDPED'=>$id_pedido));
        return $query;
    }
}