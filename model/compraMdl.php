<?php 
class CompraMdl{
    //Creación de variables según campos en la BD
    private $id_compra;
    private $cantidadCP;
    private $descripcion;
    private $id_doc;
    private $id_docProv;
    private $creadoEn;
    public function __construct(){
    }
//Creación setters & getters de cada variable
    public function setId_compra($id_compra){
        $this->id_compra=$id_compra;
    }
    public function getId_compra(){
        return $this->id_compra;
    }

    public function setCantidadCP($cantidad){
        $this->cantidadCP=$cantidad;
    }
    public function getCantidadCP(){
        return $this->cantidadCP;
    }

    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    public function getDescripcion(){
        return $this->descripcion;
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
}