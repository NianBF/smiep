<?php
// incluye la clase Db
require_once('conexion1.php');

class CrudCliente
{

	public function __construct()
	{
	}

	//metodo para ingresar  los clientes
	public function insertar($Cliente)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO cliente 
			values(:id_cliDoc,:nombreCli1,:nombreCli2,:apellidoCli1,:apellidoCli2,
			:direccionCli,:telCli,:emailCli,:fechaNac)');
		$insert->bindValue('id_cliDoc', $Cliente->getId_cliDoc());
		$insert->bindValue('nombreCli1', $Cliente->getNombreCli1());
		$insert->bindValue('nombreCli2', $Cliente->getNombreCli2());
		$insert->bindValue('apellidoCli1', $Cliente->getApellidoCli1());
		$insert->bindValue('apellidoCli2', $Cliente->getApellidoCli2());
		$insert->bindValue('direccionCli', $Cliente->getDireccionCli());
		$insert->bindValue('telCli', $Cliente->getTelCli());
		$insert->bindValue('emailCli', $Cliente->getEmailCli());
		$insert->bindValue('fechaNac', $Cliente->getFechaNac());
		$insert->execute();

	}

	// método para mostrar todos los clientes
	public function mostrar()
	{
		$db = Db::conectar();
		$listaCliente = [];
		$select = $db->query('SELECT * FROM cliente');

		foreach ($select->fetchAll() as $Cliente)
		{
			$myCliente = new Cliente();
			$myCliente->setId_cliDoc($Cliente['id_cliDoc']);
			$myCliente->setNombreCli1($Cliente['nombreCli1']);
			$myCliente->setNombreCli2($Cliente['nombreCli2']);
			$myCliente->setApellidoCli1($Cliente['apellidoCli1']);
			$myCliente->setApellidoCli2($Cliente['apellidoCli2']);
			$myCliente->setDireccionCli($Cliente['direccionCli']);
			$myCliente->setTelCli($Cliente['telCli']);
			$myCliente->setEmailCli($Cliente['emailCli']);
			$myCliente->setFechaNac($Cliente['fechaNac']);
			$listaCliente[] = $myCliente;
		}
		return $listaCliente;
	}

	// método para eliminar el cliente
	public function eliminar($id_cliDoc)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM cliente WHERE id_cliDoc=:id_cliDoc');
		$eliminar->bindValue('id_cliDoc', $id_cliDoc);
		$eliminar->execute();
	}

	// método para buscar el cliente
	public function obtenerCliente($id_cliDoc)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM cliente WHERE id_cliDoc=:id_cliDoc');
		$select->bindValue('id_cliDoc', $id_cliDoc);
		$select->execute();
		$Cliente = $select->fetch();
		$myCliente = new Cliente();
		$myCliente->setId_cliDoc($Cliente['id_cliDoc']);
		$myCliente->setNombreCli1($Cliente['nombreCli1']);
		$myCliente->setNombreCli2($Cliente['nombreCli2']);
		$myCliente->setApellidoCli1($Cliente['apellidoCli1']);
		$myCliente->setApellidoCli2($Cliente['apellidoCli2']);
		$myCliente->setDireccionCli($Cliente['direccionCli']);
		$myCliente->setTelCli($Cliente['telCli']);
		$myCliente->setEmailCli($Cliente['emailCli']);
		$myCliente->setFechaNac($Cliente['fechaNac']);


		return $myCliente;
	}

	// método para actualizar un cliente, recibe como parámetro el cliente
	public function actualizar($Cliente)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE cliente
			 SET  id_cliDoc=:id_cliDoc,nombreCli1=:nombreCli1,nombreCli2=:nombreCli2,
			 apellidoCli1=:apellidoCli1,apellidoCli2=:apellidoCli2,direccionCli=:direccionCli,
			 telCli=:telCli,emailCli=:emailCli,fechaNac=:fechaNac 
			  WHERE id_cliDoc=:id_cliDoc');
		$actualizar->bindValue('id_cliDoc', $Cliente->getId_cliDoc());
		$actualizar->bindValue('nombreCli1', $Cliente->getNombreCli1());
		$actualizar->bindValue('nombreCli2', $Cliente->getNombreCli2());
		$actualizar->bindValue('apellidoCli1', $Cliente->getApellidoCli1());
		$actualizar->bindValue('apellidoCli2', $Cliente->getApellidoCli2());
		$actualizar->bindValue('direccionCli', $Cliente->getDireccionCli());
		$actualizar->bindValue('telCli', $Cliente->getTelCli());
		$actualizar->bindValue('emailCli', $Cliente->getEmailCli());
		$actualizar->bindValue('fechaNac', $Cliente->getFechaNac());
		$actualizar->execute();
	}
}
?>