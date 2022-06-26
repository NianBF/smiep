<?php
class Producto
{
	private $id_prod;
	private $imgProd;
	private $codBar;
	private $nombreProd;
	private $descripcion;
	private $precio;
	private $cantidadMin;
	private $cantidadDisp;
	private $tipoPresentacion;
	private $creadoEn;
	private $id_docUsu;
	private $id_cat;
	private $id_estado;


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

	//descripcion
	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function setDescripcion($descripcion)
	{
		$this->descripcion = $descripcion;
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

	//cantidadMin = cintidad minima
	public function getCantidadMin()
	{
		return $this->cantidadMin;
	}

	public function setCantidadMin($cantidadMin)
	{
		$this->cantidadMin = $cantidadMin;
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

	//tipoPresentacion
	public function getTipoPresentacion()
	{
		return $this->tipoPresentacion;
	}

	public function setTipoPresentacion($tipoPresentacion)
	{
		$this->tipoPresentacion = $tipoPresentacion;
	}

	//creadoEn =fecha de creacion
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
}