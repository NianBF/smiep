<?php
// incluye la clase Db
require_once('conexion1.php');

class CrudCategoria
{
	private $db;//Variable para iniciar la conexión

	public function __construct()
	{
		//Inicia la base de datos para todo el documento
		$this->db=Db::conectar();
	}


	public function insertar($Categoria)
	{
		$insert = $this->db->prepare('INSERT INTO categoria (id_cat, nCategoria) values(:id_cat,:nCategoria)');
		$insert->bindValue('id_cat', $Categoria->getid_cat());
		$insert->bindValue('nCategoria', $Categoria->getnCategoria());
		$insert->execute();

	}


	public function mostrar()
	{
		$listaCategoria = [];
		$select = $this->db->query('SELECT * FROM categoria ORDER BY nCategoria ASC');

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
		$eliminar = $this->db->prepare('DELETE FROM categoria WHERE id_cat=:id_Cat');
		$eliminar->bindValue('id_Cat', $id_Cat);
		$eliminar->execute();
	}


	public function obtenerCategoria($id_Cat)
	{
		$select = $this->db->prepare('SELECT * FROM categoria WHERE id_cat=:id_Cat');
		$select->bindValue('id_Cat', $id_Cat);
		$select->execute();
		//$Categoria = $select->fetch();
		$myCategoria = new Categoria();

		$myCategoria->setid_cat($Categoria['id_cat']);
		$myCategoria->setnCategoria($Categoria['nCategoria']);


		return $myCategoria;
	}
}
?>