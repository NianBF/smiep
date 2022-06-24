<?php
class Tienda
{
	private $id_ti;
	private $nombreTienda;
	private $direccionTi;
	private $telTi;
	private $emailTi;



	function __construct()
	{
	}

	//id_tienda
	public function getId_ti()
	{
		return $this->id_ti;
	}

	public function setId_ti($id_ti)
	{
		$this->id_ti = $id_ti;
	}

	//nomTienda

	public function getNombreTienda()
	{
		return $this->nombreTienda;
	}

	public function setNombreTienda($nombreTienda)
	{
		$this->nombreTienda = $nombreTienda;
	}

	//direccionTi

	public function getDireccionTi()
	{
		return $this->direccionTi;
	}

	public function setDireccionTi($direccionTi)
	{
		$this->direccionTi = $direccionTi;
	}

	//telTienda

	public function getTelTi()
	{
		return $this->telTi;
	}

	public function setTelTi($telTi)
	{
		$this->telTi = $telTi;
	}
	//emailTi

	public function getEmailTi()
	{
		return $this->emailTi;
	}

	public function setEmailTi($emailTi)
	{
		$this->emailTi = $emailTi;
	}


}
?>