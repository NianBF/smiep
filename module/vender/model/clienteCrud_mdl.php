<?php
// incluye la clase Db
require_once("connection.php");
class CrudCliente
{
    private $db; //Variable para iniciar la conexión
    // constructor de la clase
    public function __construct()
    {
        $this->db = Conection::getConection(); //Inicia la conexión en todo el archivo
    }

	//metodo para ingresar  los clientes
	public function insertar($Cliente)
	{
		$insert = $this->db->prepare('INSERT INTO cliente 
			values(:id_cliDoc,:nombreCli1,:nombreCli2,:apellidoCli1,:apellidoCli2,
			:direccionCli,:telCli,:emailCli)');
		$insert->bindValue('id_cliDoc', $Cliente->getId_cliDoc());
		$insert->bindValue('nombreCli1', $Cliente->getNombreCli1());
		$insert->bindValue('nombreCli2', $Cliente->getNombreCli2());
		$insert->bindValue('apellidoCli1', $Cliente->getApellidoCli1());
		$insert->bindValue('apellidoCli2', $Cliente->getApellidoCli2());
		$insert->bindValue('direccionCli', $Cliente->getDireccionCli());
		$insert->bindValue('telCli', $Cliente->getTelCli());
		$insert->bindValue('emailCli', $Cliente->getEmailCli());
		$insert->execute();

	}
	public function obtenerCliente($id_cliDoc)
	{
		$select = $this->db->prepare('SELECT * FROM cliente WHERE id_cliDoc=:id_cliDoc');
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
		return $myCliente;
	}
}
?>