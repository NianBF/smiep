<?php
// incluye la clase Db
require_once('conexion1.php');

class CrudCategoria
{

	public function __construct()
	{
	}


	public function insertar($Categoria)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO categoria (id_cat, nCategoria) values(:id_cat,:nCategoria)');
		$insert->bindValue('id_cat', $Categoria->getid_cat());
		$insert->bindValue('nCategoria', $Categoria->getnCategoria());
		$insert->execute();

	}


	public function mostrar()
	{
		$db = Db::conectar();
		$listaCategoria = [];
		$select = $db->query('SELECT * FROM categoria');

		foreach ($select->fetchAll() as $Categoria)
		{
			$myCategoria = new Categoria();

			$myCategoria->setid_cat($Categoria['id_cat']);
			$myCategoria->setnCategoria($Categoria['nCategoria']);
			$listaCategoria[] = $myCategoria;
		}
		return $listaCategoria;
	}


	public function eliminar($id_Cat)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM categoria WHERE id_Cat=:id_Cat');
		$eliminar->bindValue('id_Cat', $id_Cat);
		$eliminar->execute();
	}


	public function obtenerCategoria($id_Cat)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM categoria WHERE id_Cat=:id_Cat');
		$select->bindValue('id_Cat', $id_Cat);
		$select->execute();
		$Categoria = $select->fetch();
		$myCategoria = new Categoria();

		$myCategoria->setid_cat($Categoria['id_cat']);
		$myCategoria->setnCategoria($Categoria['nCategoria']);


		return $myCategoria;
	}
}
?>