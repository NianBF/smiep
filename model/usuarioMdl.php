<?php
class Usuario
{
	private $id_doc;
	private $nombre1;
	private $nombre2;
	private $apellido1;
	private $apellido2;
	private $userName;
	private $email;
	private $pass;
	private $rol;
	private $creadoEn;
	private $id_estado;
	private $id_ti;


	function __construct()
	{
	}

	//id_doc
	public function getId_doc()
	{
		return $this->id_doc;
	}

	public function setId_doc($id_doc)
	{
		$this->id_doc = $id_doc;
	}
	//nombre1
	public function getNombre1()
	{
		return $this->nombre1;
	}

	public function setNombre1($nombre1)
	{
		$this->nombre1 = $nombre1;
	}
	//nombre2
	public function getNombre2()
	{
		return $this->nombre2;
	}

	public function setNombre2($nombre2)
	{
		$this->nombre2 = $nombre2;
	}
	//apellido1
	public function getApellido1()
	{
		return $this->apellido1;
	}

	public function setApellido1($apellido1)
	{
		$this->apellido1 = $apellido1;
	}
	//apellido2
	public function getApellido2()
	{
		return $this->apellido2;
	}

	public function setApellido2($apellido2)
	{
		$this->apellido2 = $apellido2;
	}
	//userName
	public function getUserName()
	{
		return $this->userName;
	}

	public function setUserName($userName)
	{
		$this->userName = $userName;
	}
	//email
	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}
	//password
	public function getPass()
	{
		return $this->pass;
	}

	public function setPass($pass)
	{
		$this->pass = $pass;
	}
	//rol
	public function getRol()
	{
		return $this->rol;
	}

	public function setRol($rol)
	{
		$this->rol = $rol;
	}
	//creadoEn
	public function getCreadoEn()
	{
		return $this->creadoEn;
	}

	public function setCreadoEn($creadoEn)
	{
		$this->creadoEn = $creadoEn;
	}
	//id_estado
	public function getId_estado()
	{
		return $this->id_estado;
	}

	public function setId_estado($id_estado)
	{
		$this->id_estado = $id_estado;
	}
	//id_ti	
	public function getId_ti()
	{
		return $this->id_ti;
	}

	public function setId_ti($id_ti)
	{
		$this->id_ti = $id_ti;
	}

}
?>