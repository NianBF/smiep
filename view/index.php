<?php
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
</head>
<body>
    <div class="contenedor">
        <span class="icon"><figure class=""><img src="img/favicon.png" alt="Logo SMIEP" width="230px"></figure></span>
        
        <header class="header">
            <section>
                <h1 class="title">S.M.I.E.P</h1>
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
    <a id="mod" class="mod" onclick="cambiarModo()">ON/OFF</a>
    <script type="text/javascript"> 
      function cambiarModo() { 
        let cuerpoweb = document.body;
        const linksito = document.getElementById('mod');
        cuerpoweb.classList.toggle("oscuro"); 
        linksito.classList.toggle("modi");
      }
    </script>
</body>
</html>