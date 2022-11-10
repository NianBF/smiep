<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or$_SESSION["pass"] == null) {
	header("location: ../index.php");
}else{ // incluye la clase Db	
	require_once('conexion1.php');
	class CrudProducto
	{
		private $db; //Variable para iniciar la conexión
		// constructor de la clase
		public function __construct()
		{
			$this->db = Db::conectar(); //Inicia la conexión en todo el archivo
		}

		public function insertar($Producto)
		{
			$insert = $this->db->prepare('INSERT INTO producto VALUES(:id_prod, :imgProd, :codBar, :nombreProd, :precio,:cantidadDisp, :id_cat, :id_estado);');
			$insert->bindValue('id_prod', $Producto->getId_Prod());
			$insert->bindValue('imgProd', $Producto->getImgProd());
			$insert->bindValue('codBar', $Producto->getCodBar());
			$insert->bindValue('nombreProd', $Producto->getNombreProd());
			$insert->bindValue('precio', $Producto->getPrecio());
			$insert->bindValue('cantidadDisp', $Producto->getCantidadDisp());
			$insert->bindValue('id_cat', $Producto->getId_cat());
			$insert->bindValue('id_estado', $Producto->getId_estado());
			$insert->execute();

		}

		// método para mostrar todos los productos
		public function mostrar()
		{
			$listaProducto = [];
			CrudProducto::UpdState();
			CrudProducto::UpdStateU();
			$select = $this->db->query('SELECT *,tEstado FROM producto INNER JOIN estado ON estado.id_estado=producto.id_estado ORDER BY tEstado ASC');

			foreach ($select->fetchAll() as $Producto) {
				$myProducto = new Producto();
				$myProducto->setId_prod($Producto['id_prod']);
				$myProducto->setImgProd($Producto['imgProd']);
				$myProducto->setCodBar($Producto['codBar']);
				$myProducto->setNombreProd($Producto['nombreProd']);
				$myProducto->setPrecio($Producto['precio']);
				$myProducto->setCantidadDisp($Producto['cantidadDisp']);/* 
				$myProducto->setCreadoEn($Producto['modificadoEn']);
				$myProducto->setId_docUSu($Producto['id_docUsu']); */
				$myProducto->setId_cat($Producto['id_cat']);
				$myProducto->setId_estado($Producto['id_estado']);
				$myProducto->setEstado($Producto['tEstado']);

				$listaProducto[] = $myProducto;
			}
			return $listaProducto;
			
		}

		public function UpdState(){
			$select = $this->db->query('UPDATE producto SET id_estado=2 WHERE cantidadDisp<=1');
		}

		public function UpdStateU(){
			$select = $this->db->query('UPDATE producto SET id_estado=1 WHERE cantidadDisp>=2');
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
			CrudProducto::UpdState();
			CrudProducto::UpdStateU();
			$select = $this->db->prepare('SELECT producto.*, categoria.nCategoria FROM producto INNER JOIN categoria ON producto.id_cat=categoria.id_cat WHERE id_prod=:id_prod ');
			$select->bindValue('id_prod', $id_prod);
			$select->execute();
			$Producto = $select->fetch();
			$myProducto = new Producto();
			$myProducto->setId_prod($Producto['id_prod']);
			$myProducto->setImgProd($Producto['imgProd']);
			$myProducto->setCodBar($Producto['codBar']);
			$myProducto->setNombreProd($Producto['nombreProd']);
			$myProducto->setPrecio($Producto['precio']);
			$myProducto->setCantidadDisp($Producto['cantidadDisp']);
			$myProducto->setId_cat($Producto['id_cat']);
			$myProducto->setId_Estado($Producto['id_estado']);
/* 			$myProducto->setEstado($Producto['tEstado']);
 */			$myProducto->setnCategoria($Producto['nCategoria']);


			return $myProducto;
		}

		// método para actualizar un producto, recibe como parámetro el producto
		public function actualizar($producto)
		{
			$actualizar = $this->db->prepare('UPDATE producto 
			SET imgProd=:imgProd, nombreProd=:nombreProd,precio=:precio, cantidadDisp=:cantidadDisp, codBar=:codBar, id_cat=:id_cat/* , id_docUsu=:id_docUsu */ WHERE id_prod=:id_prod ');
			$actualizar->bindValue('id_prod', $producto->getId_prod());
			$actualizar->bindValue('imgProd', $producto->getImgProd());
			$actualizar->bindValue('codBar', $producto->getCodBar());
			$actualizar->bindValue('nombreProd', $producto->getNombreProd());
			$actualizar->bindValue('precio', $producto->getPrecio());
			$actualizar->bindValue('cantidadDisp', $producto->getCantidadDisp());
/* 			$actualizar->bindValue('id_docUsu', $producto->getId_docUsu());
 */			$actualizar->bindValue('id_cat', $producto->getId_cat());

			$actualizar->execute();
		}
	}
}
?>