<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="public/css/stylesIndex.css">
    <link rel="stylesheet" type="text/css" href="public/css/plantillas/header1.css">
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

            <a href="?u=login" class="ingBot"><strong>Ingresar</strong></a>
        </div>
    </main>

    <footer class="footer">
        <?php include_once("view/plantillas/btnModOsc.html") ?>
        <div id="footer_acerca">
            <?php include_once("view/plantillas/footer.html") ?>
            <a class="acercaDe" href="view/about/about.php">Acerca de S.M.I.E.P</a>
        </div>
    </footer>
</body>

</html>