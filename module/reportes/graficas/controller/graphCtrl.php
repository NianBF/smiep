<?php
$graphType = $_GET["g"];
include_once("model/graphMdl.php");
switch ($graphType)
{
    case "p":
        $consultar = new GraphC1();
        $consultar->prodG("nombreProd", "cantidadDisp", "producto", "cantidadDisp");
        break;
}