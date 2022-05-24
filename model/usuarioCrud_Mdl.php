<?php
// incluye la clase Db
require_once('conexion1.php');
 
	class CrudUsuario{
		
		public function __construct(){}
 
		public function insertar($Usuario){
			$db=Db::conectar();
			
			$insert=$db->prepare('INSERT INTO usuario (id_doc,nombre1,nombre2,apellido1,
			apellido2,userName,email,password,rol,id_estado,id_ti) 
			values(:id_doc,:nombre1,:nombre2,:apellido1,:apellido2,:userName,:email
			,md5(:password),:rol,:id_estado,:id_ti)');
			$insert->bindValue('id_doc',$Usuario->getId_doc());
			$insert->bindValue('nombre1',$Usuario->getNombre1());
			$insert->bindValue('nombre2',$Usuario->getNombre2());
			$insert->bindValue('apellido1',$Usuario->getApellido1());
			$insert->bindValue('apellido2',$Usuario->getApellido2());
			$insert->bindValue('userName',$Usuario->getUserName());
			$insert->bindValue('email',$Usuario->getEmail());
			$insert->bindValue('password',$Usuario->getPass());
			$insert->bindValue('rol',$Usuario->getRol());
			$insert->bindValue('id_estado',$Usuario->getId_estado());
			$insert->bindValue('id_ti',$Usuario->getId_ti());
			
			$insert->execute();
 
		}

	
 
		
		public function mostrar(){
			$db=Db::conectar();
			$listaUsuario=[];
			$select=$db->query('SELECT * FROM usuario');
 
			foreach($select->fetchAll() as $Usuario){
				$myUsuario = new Usuario();
				
				$myUsuario->setId_doc($Usuario['id_doc']);
				$myUsuario->setNombre1($Usuario['nombre1']);
				$myUsuario->setNombre2($Usuario['nombre2']);
				$myUsuario->setApellido1($Usuario['apellido1']);
				$myUsuario->setApellido2($Usuario['apellido2']);
				$myUsuario->setUserName($Usuario['userName']);
				$myUsuario->setEmail($Usuario['email']);
				$myUsuario->setPass($Usuario['password']);
				$myUsuario->setRol($Usuario['rol']);
				$myUsuario->setId_estado($Usuario['id_estado']);
				$myUsuario->setId_ti($Usuario['id_ti']);
				$listaUsuario[]=$myUsuario;
			}
			return $listaUsuario;
		}
 
		public function eliminar($id_doc){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM usuario WHERE id_doc=:id_doc');
			$eliminar->bindValue('id_doc',$id_doc);
			$eliminar->execute();
		}

 
		public function obtenerUsuario($id_doc){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM usuario WHERE id_doc=:id_doc');
			$select->bindValue('id_doc',$id_doc);
			$select->execute();
			$Usuario=$select->fetch();
			$myUsuario= new Usuario();

			$myUsuario->setId_doc($Usuario['id_doc']);
			$myUsuario->setNombre1($Usuario['nombre1']);
			$myUsuario->setNombre2($Usuario['nombre2']);
			$myUsuario->setApellido1($Usuario['apellido1']);
			$myUsuario->setApellido2($Usuario['apellido2']);
			$myUsuario->setUserName($Usuario['userName']);
			$myUsuario->setEmail($Usuario['email']);
			$myUsuario->setPass($Usuario['password']);
			$myUsuario->setRol($Usuario['rol']);
			$myUsuario->setId_estado($Usuario['id_estado']);
			$myUsuario->setId_ti($Usuario['id_ti']);	
			
			return $myUsuario;
		}
 
		public function actualizar($Usuario){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE usuario
			SET  nombre1=:nombre1, nombre2=:nombre2, apellido1=:apellido1, apellido2=:apellido2,
			userName=:userName, email=:email, password=MD5(:password),rol=:rol,
			id_estado=:id_estado, id_ti=:id_ti  WHERE id_doc=:id_doc' );
			
			$actualizar->bindValue('id_doc',$Usuario->getId_doc());
			$actualizar->bindValue('nombre1',$Usuario->getNombre1());
			$actualizar->bindValue('nombre2',$Usuario->getNombre2());
			$actualizar->bindValue('apellido1',$Usuario->getApellido1());
			$actualizar->bindValue('apellido2',$Usuario->getApellido2());
			$actualizar->bindValue('userName',$Usuario->getUserName());
			$actualizar->bindValue('email',$Usuario->getEmail());
			$actualizar->bindValue('password',$Usuario->getPass());
			$actualizar->bindValue('rol',$Usuario->getRol());
			$actualizar->bindValue('id_estado',$Usuario->getId_estado());
			$actualizar->bindValue('id_ti',$Usuario->getId_ti());
			$actualizar->execute();
		}
	}
?>