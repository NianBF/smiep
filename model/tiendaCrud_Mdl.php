<?php
// incluye la clase Db
require_once('../../bd/conexion1.php');
 
	class CrudTienda{
		
		public function __construct(){}
 
		
		public function insertar($Tienda){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO tienda  values(:id_ti,:nombreTienda,:direccionTi,:telTi,:emailTi)');
			$insert->bindValue('id_ti',$Tienda->getId_ti());
			$insert->bindValue('nombreTienda',$Tienda->getNombreTienda());
			$insert->bindValue('direccionTi',$Tienda->getDireccionTi());
			$insert->bindValue('telTi',$Tienda->getTelTi());
			$insert->bindValue('emailTi',$Tienda->getEmailTi());
			$insert->execute();
 
		}
 
		
		public function mostrar(){
			$db=Db::conectar();
			$listaTienda=[];
			$select=$db->query('SELECT * FROM tienda');
 
			foreach($select->fetchAll() as $Tienda){
				$myTienda= new Tienda();
				$myTienda->setId_ti	($Tienda['id_ti']);
				$myTienda->setNombreTienda	($Tienda['nombreTienda']);
				$myTienda->setDireccionTi($Tienda['direccionTi']);
				$myTienda->setTelTi($Tienda['telTi']);
				$myTienda->setEmailTi($Tienda['emailTi']);
				$listaTienda[]=$myTienda;
			}
			return $listaTienda;
		}
 
		public function eliminar($id_ti){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM tienda WHERE id_ti=:id_ti');
			$eliminar->bindValue('id_ti',$id_ti);
			$eliminar->execute();
		}
 
		public function obtenerTienda($id_ti){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM tienda WHERE id_ti=:id_ti');
			$select->bindValue('id_ti',$id_ti);
			$select->execute();
			$Tienda=$select->fetch();
			$myTienda= new Tienda();
			$myTienda->setId_ti($Tienda['id_ti']);
			$myTienda->setNombreTienda($Tienda['nombreTienda']);
			$myTienda->setDireccionTi($Tienda['direccionTi']);
			$myTienda->setTelTi($Tienda['telTi']);
			$myTienda->setEmailTi($Tienda['emailTi']);
	
			
			return $myTienda;
		}
 
		public function actualizar($Tienda){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE tienda 
			SET  id_ti=:id_ti,nombreTienda=:nombreTienda,direccionTi=:direccionTi,telTi=:telTi,emailTi=:emailTi 
			WHERE id_ti=:id_ti');
			$actualizar->bindValue('id_ti',$Tienda->getId_ti());
			$actualizar->bindValue('nombreTienda',$Tienda->getNombreTienda());
			$actualizar->bindValue('direccionTi',$Tienda->getDireccionTi());
			$actualizar->bindValue('telTi',$Tienda->getTelTi());
			$actualizar->bindValue('emailTi',$Tienda->getEmailTi());
			$actualizar->execute();
		}
	}
?>