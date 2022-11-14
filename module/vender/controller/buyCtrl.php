<?php
if (isset($_POST['cliente']) && isset($_POST['box']) && isset($_POST['id_v']) && isset($_POST['total'])) {
    $id_venta = $_POST["id_v"];
    $id_cliDoc = $_POST["cliente"];
    $total = $_POST["total"];
    $user = $_POST["user"];
    $id_caja = $_POST["box"];
    $id_prod = $_POST["id_prod"];
    $cantidadDisp = $_POST["qtyOld"];
    $cantidadNew = $_POST["qty"];
    require_once("../model/finalBuyMdl.php");
    $venta = new Venta();
    $venta->venta($id_venta, $id_cliDoc, $total, $user, $id_caja, $cantidadDisp, $cantidadNew, $id_prod);
}else {
    // header("Location:../?u=p&action=pay");
}