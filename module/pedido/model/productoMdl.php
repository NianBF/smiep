<?php
class ProductMdl
{
	private $id_prod;
	private $imgProd;
	private $codBar;
	private $nombreProd;
	private $precio;
	private $cantidadDisp;
	private $creadoEn;
	private $id_docUsu;
	private $id_cat;
	private $id_estado;
	private $estado;
	private $nCategoria;


	function __construct()
	{
	}

	//id_prod=id producto
	public function getId_prod()
	{
		return $this->id_prod;
	}

	public function setId_prod($id_prod)
	{
		$this->id_prod = $id_prod;
	}

	//imgProd=  imagen producto
	public function getImgProd()
	{
		return $this->imgProd;
	}

	public function setImgProd($imgProd)
	{
		$this->imgProd = $imgProd;
	}

	//codBar= cosdigo de barras
	public function getCodBar()
	{
		return $this->codBar;
	}

	public function setCodBar($codBar)
	{
		$this->codBar = $codBar;
	}

	//nombreProd= nombre producto
	public function getNombreProd()
	{
		return $this->nombreProd;
	}

	public function setNombreProd($nombreProd)
	{
		$this->nombreProd = $nombreProd;
	}

	//precio
	public function getPrecio()
	{
		return $this->precio;
	}

	public function setPrecio($precio)
	{
		$this->precio = $precio;
	}

	//cantidadDisp = cantidad disponible
	public function getCantidadDisp()
	{
		return $this->cantidadDisp;
	}

	public function setCantidadDisp($cantidadDisp)
	{
		$this->cantidadDisp = $cantidadDisp;
	}

	//creadoEn =fecha de creacion Base de datos = modificadoEn
	public function getCreadoEn()
	{
		return $this->creadoEn;
	}

	public function setCreadoEn($creadoEn)
	{
		$this->creadoEn = $creadoEn;
	}

	//idDocUsu = id documento usuario
	public function getId_docUsu()
	{
		return $this->id_docUsu;
	}

	public function setId_docUsu($id_docUsu)
	{
		$this->id_docUsu = $id_docUsu;
	}

	//id_cat = id categoria
	public function getId_cat()
	{
		return $this->id_cat;
	}

	public function setId_cat($id_cat)
	{
		$this->id_cat = $id_cat;
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

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado=$estado;
	}
	
	public function getnCategoria(){
		return $this->nCategoria;
	}

	public function setnCategoria($nCategoria){
		$this->nCategoria=$nCategoria;
	}
}