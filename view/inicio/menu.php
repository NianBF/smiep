<?php
error_reporting(0);
session_start();
if (
    $_SESSION['email'] == null or $_SESSION["userName"] == null or
    $_SESSION["pass"] == null
) {
    header("location:../index.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMIEP</title>
        <link rel="icon" type="image/png" href="img/favicon.png" sizes="any">
        <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <!--SE LLAMAN ESTILOS-->
        <!--//Estilos para plantilla Header\\-->
        <link rel="stylesheet" type="text/css" href="public/css/plantillas/header1.css">
        <link rel="stylesheet" type="text/css" href="public/css/plantillas/footer.css">
        <!--//Estilos para plantilla navBar\\-->
        <link rel="stylesheet" href="public/css/plantillas/aside2.css">
        <!--//Estilos únicos del menú\\-->
        <link rel="stylesheet" type="text/css" href="public/css/menu.css">
        <link rel="stylesheet" type="text/css" href="public/css/variables.css">
        <!--//Estilos para preloader\\-->
        <link rel="stylesheet" href="public/css/plantillas/preloader.css">
        <link rel="stylesheet" href="public/css/plantillas/smiep.css">
        <link rel="stylesheet" href="public/css/plantillas/btnManUsu.css">
        <!--Trae estilos de plantilla SMIEP para preloader-->
        <!--//Estilos donde se declara fuentes para uso general\\-->
        <link rel="stylesheet" type="text/css" href="public/css/fonts.css">
        <script src="https://code.jquery.com/jquery-latest.js"></script>

    </head>

    <body>

        <section>
            
                <?php  include_once("view/plantillas/asideBar2.html") ?>
            
        </section>
        


        <section class="contentFirst">
            <header>
                <?php include_once("view/plantillas/header.html"); ?>
            </header>

            <main class="principal_graf">
                <article>
                    <div class="infCont">
                        <h2>Sistema Operativo: <span id="osType"></span><br />Navegador: <span id="browserType"></span></h2>
                    </div>
                    <?php include_once("view/plantillas/preloader.php"); ?>
                    <section>
                        <iframe src="module/reportes/graficas/g.php?g=p" frameborder="0"></iframe>
                    </section>
                </article>
                <div class="btnManUsu">
                    <?php include_once("view/plantillas/btnManUsu.html") ?>
                </div>
            </main>
            <footer>
                <?php include_once("view/plantillas/footer.html"); ?>
            </footer>
        </section>

        <script type="text/javascript" src="public/js/detectSoft/detetctSoft.js"></script>
        <script type="text/javascript" src="public/js/darkMode/darkMode.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="public/js/main.js"></script>
        <script src="public/js/salir.js"></script>
        <script src="public/js/plantillas/preloader.js"></script>
        <script src="public/js/asideBar.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

    </html>
<?php
} ?>