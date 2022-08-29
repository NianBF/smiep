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
    
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="any">
    <title>SMIEP</title>
    
    <link rel="stylesheet" href="../public/css/StyleIndex2.css">
    <link rel="stylesheet" href="../public/css/plantillas/header1.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <header>
        <?php include_once "plantillas/header.html"?>
    </header>
    <main>
        <div class="cup_priciapal">
            <h2 class="cup">¡BIENVENIDOS!</h2>
            <p class="cup">De clic sobre el botón que dice ingresar.</p>
            <a class="cup ingBot" href="view/login/login.php">Ingresar</a>
        </div>
    </main>
    <footer> 
        <a id="mod" class="mod" onclick="cambiarModo()">
        <span id="id-moon" class="btn-mode moon">
            <i class="fas fa-sun"></i>
        </span>
        /
        <span id="id-sun" class="btn-mode sun active">
            <i class="fas fa-moon"></i>
        </span></a>
        <script type="text/javascript" src="../public/js/darkMode/darkMode.js"></script>
        
        <h4>© S.M.I.E.P | 2022 <a href="view/about/about.php">Acerca de S.M.I.E.P</a></h4>
    </footer>
    
</body>
</html>