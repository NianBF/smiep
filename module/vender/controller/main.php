<?php
require_once("model/productMdl.php");
require_once("model/productoMdl.php");
$prod = new Product();
$getProduct = new ProductMdl();
$Product = $prod->getProducts();
switch ($_GET["u"]) {
    case "v":
        require_once("view/index.html");
        switch ($_GET["action"]) {
            case "buy":
                include_once("view/animation/banner.html");
                break;
            case "add":
                include_once("view/animation/bannerAdd.html");
                break;
        }
        break;
    case "p":
        include("view/pago/pago.html");
        switch ($_GET["action"]) {
            case "pay":
                include_once("view/animation/bannerPay.html");
                break;
        }
        break;
    case "e":
        include("view/animation/great.html");
        switch ($_GET["action"]) {
            case "great":
                include_once("view/animation/bannerGreat.html");
                if (!empty($_SESSION['carrito'])) {
                    unset($_SESSION['carrito']);
                }
                break;
        }
}