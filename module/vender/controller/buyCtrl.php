<?php
if (isset($_POST['cliente']) && isset($_POST['box']) && isset($_POST['id_v']) && isset($_POST['total'])) {
    if (!empty($_POST['box']) && !empty($_POST['id_v']) && !empty($_POST['total']) && !empty($id_prod = $_POST["id_prod"])) {
        if (empty($_POST["cliente"])) {
            $id_cliDoc = $_POST["cliente"] = 1234567890;
            $id_venta = $_POST["id_v"];
            $total = $_POST["total"];
            $user = $_POST["user"];
            $id_caja = $_POST["box"];
            $id_prod = $_POST["id_prod"];
            $cantidadDisp = $_POST["qtyOld"];
            $cantidadNew = $_POST["qty"];
            require_once("../model/finalBuyMdl.php");
            $venta = new Venta();
            $venta->venta($id_venta, $id_cliDoc, $total, $user, $id_caja, $cantidadDisp, $cantidadNew, $id_prod);
        } else {
            $id_venta = $_POST["id_v"];
            $total = $_POST["total"];
            $user = $_POST["user"];
            $id_cliDoc = $_POST["cliente"];
            $id_caja = $_POST["box"];
            $id_prod = $_POST["id_prod"];
            $cantidadDisp = $_POST["qtyOld"];
            $cantidadNew = $_POST["qty"];
            require_once("../model/finalBuyMdl.php");
            $venta = new Venta();
            $venta->venta($id_venta, $id_cliDoc, $total, $user, $id_caja, $cantidadDisp, $cantidadNew, $id_prod);
        }
    } else {
        header("Location: ../?u=v&action=buy");
    }
} else {
    header("Location:../?u=p&action=pay");
}