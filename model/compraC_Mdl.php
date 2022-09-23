<?php
class CompraC_Mdl{
    private $db;
    public function __construct(){
        require_once('conexion1.php');
        $this->db=Db::conectar();
    }
    public function verificacion($id_compra){
        $consu=$this->db->prepare("SELECT id_compra FROM compra WHERE id_compra=:id_compra");
        $consu->bindValue('id_compra',$id_compra);
        $consu->execute();
        $validar=$consu->rowCount();
        return $validar;
    }

    public function insertar($Compra){
        $insert=$this->db->prepare('INSERT INTO compra VALUES(:id_compra,:cantidad,:descripcion,:id_doc,:id_docProv,:creadoEn)');
        $insert->bindValue('id_compra',$Compra->getId_compra());
        $insert->bindValue('cantidad',$Compra->getCantidadCP());
        $insert->bindValue('descripcion',$Compra->getDescripcion());
        $insert->bindValue('id_doc',$Compra->getId_doc());
        $insert->bindValue('id_docProv',$Compra->getId_docProv());
        $insert->bindValue('creadoEn',$Compra->getCreadoEn());
        $insert->execute();
    }
}