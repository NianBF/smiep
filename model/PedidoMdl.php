<?php 
class PedidoMdl{
    //Creación de variables según campos en la BD
    private $id_pedido;
    private $totalPrice;
    private $id_doc;
    private $id_docProv;
    private $creadoEn;
    private $modificadoEn;
    public function __construct(){
    }
//Creación setters & getters de cada variable
    public function setId_pedido($id_pedido){
        $this->id_pedido=$id_pedido;
    }
    public function getId_pedido(){
        return $this->id_pedido;
    }

    public function setTotalPrice($cantidad){
        $this->totalPrice=$cantidad;
    }
    public function getTotalPrice(){
        return $this->totalPrice;
    }
    
    public function setId_doc($id_doc){
        $this->id_doc=$id_doc;
    }
    public function getId_doc(){
        return $this->id_doc;
    }

    public function setId_docProv($id_docProv){
        $this->id_docProv=$id_docProv;
    }
    public function getId_docProv(){
        return $this->id_docProv;
    }

    public function setCreadoEn($creadoEn){
        $this->creadoEn=$creadoEn;
    }
    public function getCreadoEn(){
        return $this->creadoEn;
    }

    public function setModificadoEn($modificadoEn){
        $this->modificadoEn=$modificadoEn;
    }
    public function getModificadoEn(){
        return $this->modificadoEn;
    }
}