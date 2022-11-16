<?php
if(isset($_POST['insertar'])){
    require_once('../model/productMdl.php');
    require_once('../model/productoMdl.php');
    $id_prod= $_POST['id_prod'];
    $cantNew=$_POST['cantidad'];
    $Producto= new Product();
    $obtener= new ProductMdl();
    $obtener=$Producto->obtenerProd($id_prod);
    $Producto->UpdateProd($obtener->getCantidadDisp(),$cantNew,$obtener->getId_prod());

}