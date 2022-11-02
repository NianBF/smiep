<?php
class PedidoCrud_Mdl{
    private $db;
    public function __construct(){
        require_once('conexion1.php');
        $this->db=Db::conectar();
    }
    public function verificacion($id_pedido){
        $consu=$this->db->prepare("SELECT id_pedido FROM pedido WHERE id_pedido=:id_pedido");
        $consu->bindValue('id_pedido',$id_pedido);
        $consu->execute();
        $validar=$consu->rowCount();
        return $validar;
    }

    public function insertar($pedido){
        $insert=$this->db->prepare('INSERT INTO pedido VALUES(:id_pedido,:totalPrice,:modificadoEn,:id_doc,:id_docProv,:creadoEn)');
        $insert->bindValue('id_pedido',$pedido->getId_pedido());
        $insert->bindValue('totalPrice',$pedido->getTotalPrice());
        $insert->bindValue('id_doc',$pedido->getId_doc());
        $insert->bindValue('id_docProv',$pedido->getId_docProv());
        $insert->bindValue('creadoEn',$pedido->getCreadoEn());
        $insert->bindValue('modificadoEn',$pedido->getModificadoEn());
        $insert->execute();
    }
    public function mostrar(){
		$listapedido = [];
		$select = $this->db->query('SELECT * FROM pedido');

		foreach ($select->fetchAll() as $pedido){
			$thpedido = new PedidoMdl;
			$thpedido->setId_pedido($pedido['id_pedido']);
			$thpedido->setId_doc($pedido['id_docUsu']);
			$thpedido->setId_docProv($pedido['id_docProv']);
			$thpedido->setTotalPrice($pedido['totalPrice']);
			$thpedido->setCreadoEn($pedido['creadoEn']);
			$thpedido->setModificadoEn($pedido['modificadoEn']);
			$listapedido[] = $thpedido;
		}
		return $listapedido;
	}
}