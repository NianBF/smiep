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
                session_start();
                if (
                    $_SESSION['email'] == null or $_SESSION["userName"] == null or
                    $_SESSION["pass"] == null
                ) {
                    header("location:../../index.php");
                } else {
                    include_once("view/animation/bannerPay.html");
                }
                break;
        }
        break;
}