<?php
use FTP\Connection;

require_once("model/connection.php");
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
			Product::UpdState();
			Product::UpdStateU();
            $sql = "SELECT * from producto WHERE id_estado = 1";
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
                    /*$myProducto->setCreadoEn($results->modificadoEn);
                     $myProducto->setId_docUSu($results->id_docUsu);
                     $myProducto->setId_cat($results->id_cat);
                     $myProducto->setId_estado($results->id_estado);
                     $myProducto->setEstado($results->tEstado);*/

                    $Product[] = $myProducto;
                }
                return $Product;
            }
        } catch (PDOException $e){}
    }
    public function UpdState(){
        $select = $this->db->query('UPDATE producto SET id_estado=2 WHERE cantidadDisp<=0');
    }

    public function UpdStateU(){
        $select = $this->db->query('UPDATE producto SET id_estado=1 WHERE cantidadDisp>=1');
    }
}