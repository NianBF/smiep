<?php
class Proveedor
{
	private $id_DocProv;
	private $empresa;
	private $imgEmpresa;
	private $nombProv1;
	private $nombProv2;
	private $apeProv1;
	private $apeProv2;
	private $direccion1;
	private $direccion2;
	private $numTel1;
	private $numTel2;
	private $email1;
	private $email2;
	private $creadoEn;


	function __construct()
	{
	}

	//id_DocPov;
	public function getId_DocProv()
	{
		return $this->id_DocProv;
	}

	public function setId_docProv($id_DocProv)
	{
		$this->id_DocProv = $id_DocProv;
	}
	//imgEmpresa;
	public function getImgEmpresa()
	{
		return $this->imgEmpresa;
	}

	public function setImgEmpresa($imgEmpresa)
	{
		$this->imgEmpresa = $imgEmpresa;
	}

	//empresa
	public function getEmpresa()
	{
		return $this->empresa;
	}

	public function setEmpresa($empresa)
	{
		$this->empresa = $empresa;
	}
	//nombProv1;
	public function getNombProv1()
	{
		return $this->nombProv1;
	}

	public function setNombProv1($nombProv1)
	{
		$this->nombProv1 = $nombProv1;
	}
	//nombProv2;
	public function getNombProv2()
	{
		return $this->nombProv2;
	}

	public function setNombProv2($nombProv2)
	{
		$this->nombProv2 = $nombProv2;
	}
	//apeProv1;
	public function getApeprov1()
	{
		return $this->apeProv1;
	}

	public function setApeProv1($apeProv1)
	{
		$this->apeProv1 = $apeProv1;
	}
	//apeProv2;
	public function getApeProv2()
	{
		return $this->apeProv2;
	}

	public function setApeProv2($apeProv2)
	{
		$this->apeProv2 = $apeProv2;
	}
	//direccion1;
	public function getDireccion1()
	{
		return $this->direccion1;
	}

	public function setDireccion1($direccion1)
	{
		$this->direccion1 = $direccion1;
	}
	//direccion2;
	public function getDireccion2()
	{
		return $this->direccion2;
	}

	public function setDireccion2($direccion2)
	{
		$this->direccion2 = $direccion2;
	}
	//tel1;
	public function getNumTel1()
	{
		return $this->numTel1;
	}

	public function setNumTel1($numTel1)
	{
		$this->numTel1 = $numTel1;
	}
	//tel2;
	public function getNumTel2()
	{
		return $this->numTel2;
	}

	public function setNumTel2($numTel2)
	{
		$this->numTel2 = $numTel2;
	}
	//email1;
	public function getEmail1()
	{
		return $this->email1;
	}

	public function setEmail1($email1)
	{
		$this->email1 = $email1;
	}
	//email2;
	public function getEmail2()
	{
		return $this->email2;
	}

	public function setEmail2($email2)
	{
		$this->email2 = $email2;
	}

	//creadoEn;

	public function getCreadoEn()
	{
		return $this->creadoEn;
	}
	public function setCreadoEn($creadoEn)
	{
		$this->creadoEn = $creadoEn;
	}
}
?>