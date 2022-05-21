<?php
// incluye la clase Db
require_once('conexion1.php');
 
	class CrudProveedor{
		
		public function __construct(){}
 
		public function insertar($Proveedor){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO proveedor (id_DocProv,empresa,imgEmpresa,nombProv1,
			nombProv2,apeProv1,apeProv2,direccion1,direccion2,numTel1,numTel2,email1,email2)
			values(:id_DocProv,:empresa,:imgEmpresa,:nombProv1,:nombProv2,:apeProv1,:apeProv2,
			:direccion1,:direccion2,:numTel1,:numTel2,:email1,:email2)');
			$insert->bindValue('id_DocProv',$Proveedor->getId_DocProv());
			$insert->bindValue('empresa',$Proveedor->getEmpresa());
			$insert->bindValue('imgEmpresa',$Proveedor->getImgEmpresa());
			$insert->bindValue('nombProv1',$Proveedor->getNombProv1());
			$insert->bindValue('nombProv2',$Proveedor->getNombProv2());
			$insert->bindValue('apeProv1',$Proveedor->getApeProv1());
			$insert->bindValue('apeProv2',$Proveedor->getApeProv2());
			$insert->bindValue('direccion1',$Proveedor->getDireccion1());
			$insert->bindValue('direccion2',$Proveedor->getDireccion2());
			$insert->bindValue('numTel1',$Proveedor->getNumTel1());
			$insert->bindValue('numTel2',$Proveedor->getNumTel2());
			$insert->bindValue('email1',$Proveedor->getEmail1());
			$insert->bindValue('email2',$Proveedor->getEmail2());
			//$insert->bindValue('creadoEn',$Proveedor->getCreadoEn());
			
			$insert->execute();
 
		}
 
		// método para mostrar todos los proveedores
		public function mostrar(){
			$db=Db::conectar();
			$listaProveedor=[];
			$select=$db->query('SELECT * FROM proveedor');
 
			foreach($select->fetchAll() as $Proveedor){
				$myProveedor= new Proveedor();
				$myProveedor->setId_DocProv($Proveedor['id_DocProv']);
				
				$myProveedor->setImgEmpresa($Proveedor['imgEmpresa']);
				$myProveedor->setNombProv1($Proveedor['nombProv1']);
				$myProveedor->setNombProv2($Proveedor['nombProv2']);
				$myProveedor->setApeProv1($Proveedor['apeProv1']);
				$myProveedor->setApeProv2($Proveedor['apeProv2']);
				$myProveedor->setEmpresa($Proveedor['empresa']);
				$myProveedor->setDireccion1($Proveedor['direccion1']);
				$myProveedor->setDireccion2($Proveedor['direccion2']);
				$myProveedor->setNumTel1($Proveedor['numTel1']);
				$myProveedor->setNumTel2($Proveedor['numTel2']);
				$myProveedor->setEmail1($Proveedor['email1']);
				$myProveedor->setEmail2($Proveedor['email2']);
				//$myProveedor->setCreadoEn($Proveedor['CreadoEn']);
								
				$listaProveedor[]=$myProveedor;
			}
			return $listaProveedor;
		}
 
	
		public function eliminar($id_DocProv){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM proveedor WHERE id_DocProv=:id_DocProv');
			$eliminar->bindValue('id_DocProv',$id_DocProv);
			$eliminar->execute();
		}
			
		public function obtenerProveedor($id_DocProv){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM proveedor WHERE id_DocProv=:id_DocProv');
			$select->bindValue('id_DocProv',$id_DocProv);
			$select->execute();
			$Proveedor=$select->fetch();
			$myProveedor= new Proveedor();

			$myProveedor->setId_DocProv($Proveedor['id_DocProv']);
			
			$myProveedor->setImgEmpresa($Proveedor['imgEmpresa']);
			$myProveedor->setNombProv1($Proveedor['nombProv1']);
			$myProveedor->setNombProv2($Proveedor['nombProv2']);
			$myProveedor->setApeProv1($Proveedor['apeProv1']);
			$myProveedor->setApeProv2($Proveedor['apeProv2']);
			$myProveedor->setEmpresa($Proveedor['empresa']);
			$myProveedor->setDireccion1($Proveedor['direccion1']);
			$myProveedor->setDireccion2($Proveedor['direccion2']);
			$myProveedor->setNumTel1($Proveedor['numTel1']);
			$myProveedor->setNumTel2($Proveedor['numTel2']);
			$myProveedor->setEmail1($Proveedor['email1']);
			$myProveedor->setEmail2($Proveedor['email2']);
			//$myProveedor->setCreadoEn($Proveedor['CreadoEn']);
			
			return $myProveedor;
		}
 
		public function actualizar($Proveedor){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE proveedor 
			SET  id_DocProv=:id_DocProv,empresa=:empresa, nombProv1=:nombProv1, nombProv2=:nombProv2,
			apeProv1=:apeProv1, apeProv2=:apeProv2, direccion1=:direccion1, direccion2=:direccion2,
			numTel1=:numTel1, numTel2=:numTel2, email1=:email1, email2=:email2
			WHERE id_DocProv=:id_DocProv' );
			$actualizar->bindValue('id_DocProv',$Proveedor->getId_DocProv());
			$actualizar->bindValue('empresa',$Proveedor->getEmpresa());
			$actualizar->bindValue('imgEmpresa',$Proveedor->getImgEmpresa());
			$actualizar->bindValue('nombProv1',$Proveedor->getNombProv1());
			$actualizar->bindValue('nombProv2',$Proveedor->getNombProv2());
			$actualizar->bindValue('apeProv1',$Proveedor->getApeProv1());
			$actualizar->bindValue('apeProv2',$Proveedor->getApeProv2());
			$actualizar->bindValue('direccion1',$Proveedor->getDireccion1());
			$actualizar->bindValue('direccion2',$Proveedor->getDireccion2());
			$actualizar->bindValue('numTel1',$Proveedor->getNumTel1());
			$actualizar->bindValue('numTel2',$Proveedor->getNumTel2());
			$actualizar->bindValue('email1',$Proveedor->getEmail1());
			$actualizar->bindValue('email2',$Proveedor->getEmail2());
			//$actualizar->bindValue('creadoEn',$Proveedor->getCreadoEn());
			$actualizar->execute();
		}
	}
?>