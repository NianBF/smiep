<?php
class Cliente
{
	private $id_cliDoc;
	private $nombreCli1;
	private $nombreCli2;
	private $apellidoCli1;
	private $apellidoCli2;
	private $direccionCli;
	private $telCli;
	private $emailCli;
	private $fechaNac;

	function __construct()
	{
	}

	// id cliente documento
	public function getId_cliDoc()
	{
		return $this->id_cliDoc;
	}

	public function setId_cliDoc($id_cliDoc)
	{
		$this->id_cliDoc = $id_cliDoc;
	}

	//primer nombre
	public function getNombreCli1()
	{
		return $this->nombreCli1;
	}

	public function setNombreCli1($nombreCli1)
	{
		$this->nombreCli1 = $nombreCli1;
	}

	//segundo nombre
	public function getNombreCli2()
	{
		return $this->nombreCli2;
	}

	public function setNombreCli2($nombreCli2)
	{
		$this->nombreCli2 = $nombreCli2;
	}


	//primer apellido
	public function getApellidoCli1()
	{
		return $this->apellidoCli1;
	}

	public function setApellidoCli1($apellidoCli1)
	{
		$this->apellidoCli1 = $apellidoCli1;
	}

	//segundo apellido
	public function getApellidoCli2()
	{
		return $this->apellidoCli2;
	}

	public function setApellidoCli2($apellidoCli2)
	{
		$this->apellidoCli2 = $apellidoCli2;
	}

	//direccion cliente
	public function getDireccionCli()
	{
		return $this->direccionCli;
	}

	public function setDireccionCli($direccionCli)
	{
		$this->direccionCli = $direccionCli;
	}

	//telefono Cliente
	public function getTelCli()
	{
		return $this->telCli;
	}

	public function setTelCli($telCli)
	{
		$this->telCli = $telCli;
	}
	//correo cliente
	public function getEmailCli()
	{
		return $this->emailCli;
	}

	public function setEmailCli($emailCli)
	{
		$this->emailCli = $emailCli;
	}
	//fechaNac
	public function getFechaNac()
	{
		return $this->fechaNac;
	}

	public function setFechaNac($fechaNac)
	{
		$this->fechaNac = $fechaNac;
	}
}
?>