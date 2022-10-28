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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <main class="contenedor">
        <div class="contenedor__principal">
            <span class="icon">
                <figure><img src="img/favicon.png" alt=""></figure>
            </span>
            <div class="title">
                <p class="nameEmp">Software de Manejo de Inventarios para Empresas Pequeñas</p>
            </div>
           
                <p class="inf">¡BIENVENIDOS!</p>
                <p>De clic sobre el botón que dice ingresar.</p>
                <a href="view/login/login.php" class="ingBot"><strong>Ingresar</strong></a>
           
        </div>
    </main>
    <footer class="footer">
        <p>© S.M.I.E.P | 2022 <a href="view/about/about.php">Acerca de S.M.I.E.P</a></p>
        <a id="mod" class="mod" onclick="cambiarModo()"><span id="id-moon" class="btn-mode moon"><i class="fas fa-sun"></i></span>/<span id="id-sun" class="btn-mode sun active"><i class="fas fa-moon"></i></span></a>
    </footer>
    <script type="text/javascript" src="public/js/darkMode/darkMode.js"></script>
</body>
</html>