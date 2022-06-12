<?php
 $isDarkModeOn = $_COOKIE["isDarkModeOn"] === "true";
 error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="any">
    <title>SMIEP</title>
    <link rel="stylesheet" type="text/css" href="public/css/stylesIndex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body id="body">
    <div class="contenedor">
        <span class="icon"><figure class=""><img src="img/favicon.png" alt="Logo SMIEP" width="230px"></figure></span>
        
        <header class="header">
            <section>
                <h3 class="nameEmp">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
            </section>
        </header>
        <div class="cup">
            <h2>¡BIENVENIDOS!</h2><br/><br/>
            <p>De clic sobre el botón que dice ingresar.</p><br/><br>
                <a class="ingBot" href="view/login/login.php"><strong>Ingresar</strong></a>
        </div>
        <footer class="footer">
            <h4>© S.M.I.E.P | 2022 <a href="view/about/about.html">Acerca de S.M.I.E.P</a></h4>
    </footer>
    </div>
    <a id="mod" class="mod" onclick="cambiarModo()"><span id="id-moon" class="btn-mode moon"><i class="fas fa-sun"></i></span>/<span  id="id-sun" class="btn-mode sun active"><i class="fas fa-moon"></i></span></a>
    <script type="text/javascript" src="public/js/darkMode/darkMode.js"></script>
</body>
</html>