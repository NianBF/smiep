<?php
require_once("model/productMdl.php");
require_once("model/productoMdl.php");
$prod = new Product();
$getProduct = new ProductMdl();
$Product = $prod->getProducts();
require_once("view/index.html");
if (empty($_GET["action"])) {
    include_once("view/animation/banner.html");
}