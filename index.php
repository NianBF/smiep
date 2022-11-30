<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="any">
    <title>SMIEP</title>
    <link rel="stylesheet" type="text/css" href="public/css/plantillas/btnModOsc.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<?php 
if (empty($_GET["u"])){
header("Location: ?u=smiep");
}
require_once("controller/mainCtrl.php");
?>
<script type="text/javascript" src="public/js/darkMode/darkMode.js"></script>
</html>