<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null){
	header("location: ../index.php");
}else{
// incluye la clase Db
require_once('conexion1.php');

class CrudProducto
{
	private $db;//Variable para iniciar la conexión
	// constructor de la clase
	public function __construct()
	{
		$this->db=Db::conectar();//Inicia la conexión en todo el archivo
	}

	public function insertar($Producto)
	{
		$insert = $this->db->prepare('INSERT INTO producto VALUES(:id_prod, :imgProd, :codBar, :nombreProd, :descripcion, :precio,:cantidadDisp, :tipoPresentacion, :creadoEn, :id_docUsu, :id_cat, :id_estado, :priceArrive);');
		$insert->bindValue('id_prod', $Producto->getId_Prod());
		$insert->bindValue('imgProd', $Producto->getImgProd());
		$insert->bindValue('codBar', $Producto->getCodBar());
		$insert->bindValue('nombreProd', $Producto->getNombreProd());
		$insert->bindValue('descripcion', $Producto->getDescripcion());
		$insert->bindValue('precio', $Producto->getPrecio());
		$insert->bindValue('cantidadDisp', $Producto->getCantidadDisp());
		$insert->bindValue('tipoPresentacion', $Producto->getTipoPresentacion());
		$insert->bindValue('creadoEn', $Producto->getCreadoEn());
		$insert->bindValue('id_docUsu', $Producto->getId_docUsu());
		$insert->bindValue('id_cat', $Producto->getId_cat());
		$insert->bindValue('id_estado', $Producto->getId_estado());
		$insert->bindValue('priceArrive',$Producto->getPriceArrive());
		$insert->execute();

	}

	// método para mostrar todos los productos
	public function mostrar()
	{
		$listaProducto = [];
		$select = $this->db->query('SELECT *,tEstado FROM producto INNER JOIN estado ON estado.id_estado=producto.id_estado');

		foreach ($select->fetchAll() as $Producto)
		{
			$myProducto = new Producto();
			$myProducto->setId_prod($Producto['id_prod']);
			$myProducto->setImgProd($Producto['imgProd']);
			$myProducto->setCodBar($Producto['codBar']);
			$myProducto->setNombreProd($Producto['nombreProd']);
			$myProducto->setDescripcion($Producto['descripcion']);
			$myProducto->setPrecio($Producto['precio']);
			$myProducto->setCantidadDisp($Producto['cantidadDisp']);
			$myProducto->setTipoPresentacion($Producto['tipoPresentacion']);
			$myProducto->setCreadoEn($Producto['modificadoEn']);
			$myProducto->setId_docUSu($Producto['id_docUsu']);
			$myProducto->setId_cat($Producto['id_cat']);
			$myProducto->setId_estado($Producto['id_estado']);
			$myProducto->setPriceArrive($Producto['priceArrive']);
			$myProducto->setEstado($Producto['tEstado']);

			$listaProducto[] = $myProducto;
		}
		return $listaProducto;
	}

	// método para eliminar un producto, recibe como parámetro el id del producto
	public function eliminar($id_prod)
	{
		$eliminar = $this->db->prepare('DELETE FROM producto WHERE id_prod=:id_prod');
		$eliminar->bindValue('id_prod', $id_prod);
		$eliminar->execute();
	}

	// método para buscar un producto, recibe como parámetro el id del producto
	public function obtenerProducto($id_prod)
	{
		$select = $this->db->prepare('SELECT * FROM producto WHERE id_prod=:id_prod');
		$select->bindValue('id_prod', $id_prod);
		$select->execute();
		$Producto = $select->fetch();
		$myProducto = new Producto();
		$myProducto->setId_prod($Producto['id_prod']);
		$myProducto->setImgProd($Producto['imgProd']);
		$myProducto->setCodBar($Producto['codBar']);
		$myProducto->setNombreProd($Producto['nombreProd']);
		$myProducto->setDescripcion($Producto['descripcion']);
		$myProducto->setPrecio($Producto['precio']);
		$myProducto->setCantidadDisp($Producto['cantidadDisp']);
		$myProducto->setTipoPresentacion($Producto['tipoPresentacion']);
		$myProducto->setCreadoEn($Producto['creadoEn']);
		$myProducto->setId_docUSu($Producto['id_docUsu']);
		$myProducto->setId_cat($Producto['id_cat']);
		$myProducto->setId_Estado($Producto['id_estado']);
		$myProducto->setPriceArrive($Producto['priceArrive']);
		$myProducto->setEstado($Producto['tEstado']);


		return $myProducto;
	}

	// método para actualizar un producto, recibe como parámetro el producto
	public function actualizar($producto)
	{
		$actualizar = $this->db->prepare('UPDATE producto 
			SET imgProd=:imgProd, nombreProd=:nombreProd, descripcion=:descripcion,
			precio=:precio, cantidadDisp=:cantidadDisp, codBar=:codBar,
			tipoPresentacion=:tipoPresentacion, id_cat=:id_cat, id_estado=:id_estado, priceArrive=:priceArrive, modificadoEn=:modificadoEn, id_docUsu=:id_docUsu
			WHERE id_prod=:id_prod ');
		$actualizar->bindValue('id_prod', $producto->getId_prod());
		$actualizar->bindValue('imgProd', $producto->getImgProd());
		$actualizar->bindValue('codBar', $producto->getCodBar());
		$actualizar->bindValue('nombreProd', $producto->getNombreProd());
		$actualizar->bindValue('descripcion', $producto->getDescripcion());
		$actualizar->bindValue('precio', $producto->getPrecio());
		$actualizar->bindValue('cantidadDisp', $producto->getCantidadDisp());
		$actualizar->bindValue('tipoPresentacion', $producto->getTipoPresentacion());
		$actualizar->bindValue('id_docUsu',$producto->getId_docUsu());
		$actualizar->bindValue('id_cat', $producto->getId_cat());
		$actualizar->bindValue('id_estado', $producto->getId_estado());
		$actualizar->bindValue('priceArrive',$producto->getPriceArrive());
		$actualizar->bindValue('modificadoEn',$producto->getCreadoEn());

		$actualizar->execute();
	}
}
}
?>