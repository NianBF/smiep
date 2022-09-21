<?php
require_once("model/conexion.php");
class GraphC1
{
    private $con = NULL;
    private $sql = NULL;
    public function __construct()
    {
        $this->con = conexion();
    }
    public function prodG($column1, $column2, $table, $orderBy)
    {
        $select = $this->sql = "SELECT $column1,$column2 from $table order by $orderBy"; //Query para BD
        $result = mysqli_query($this->con, $select); //Consulta
        $valoresY = array(); //cantidad de producto
        $valoresX = array(); //nombre de producto

        while ($ver=mysqli_fetch_row($result)) {
            $valoresY[]=$ver[1];
            $valoresX[]=$ver[0];
        }
    
        $datosX=json_encode($valoresX);
        $datosY=json_encode($valoresY);
        include_once("view/index.php");
    }
}