<?php
$isDarkModeOn = $_COOKIE["isDarkModeOn"] === "true";
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMIEP</title>
    <link rel="stylesheet" type="text/css" href="public/css/stylesIndex.css">
    <link rel="stylesheet" type="text/css" href="public/css/plantillas/header1.css">
    <link rel="stylesheet" type="text/css" href="public/css/plantillas/btnModOsc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <header>
        <div class="header_superior">

            <span class="logo">
                <img class="logo_imagen" src="img/favicon.png" alt="Logo SMIEP" title="Logo SMIEP">
            </span>

            <span class="contenedor">
                <section class="titulito">
                    <h1 class="title">S.M.I.E.P</h1>
                    <h3 class="nameEmp">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
                </section>
            </span>
        </div>
    </header>

    <main>  
        <div class="contenedor_principal">

            <p class="inf">¡BIENVENIDOS!</p>
            
            <a href="view/login/login.php" class="ingBot"><strong>Ingresar</strong></a>
        </div>         
    </main>

    <footer class="footer">
        <p>© S.M.I.E.P | 2022 <a class="acercaDe" href="view/about/about.php">Acerca de S.M.I.E.P</a></p>
        <?php include_once("plantillas/btnModOSc.html") ?>
    </footer>
    <script type="text/javascript" src="public/js/darkMode/darkMode.js"></script>
</body>
</html>