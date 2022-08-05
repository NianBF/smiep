<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
    header("location:../../index.php");
}
else
{
    $isDarkModeOn = $_COOKIE["isDarkModeOn"] === "true";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMIEP</title>
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../../public/css/menu.css"> -->
    <link rel="stylesheet" type="text/css" href="../../public/css/fonts.css">
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <script src="https://code.jquery.com/jquery-latest.js"></script>

</head>

<body>

    <header>
        <?php include_once("../plantillas/header.html"); ?>
    </header>
    <main>
        <?php include_once("../plantillas/navBar.html"); ?>
        <article>
            <div class="infCont">
                <h2>Sistema Operativo: <span id="osType"></span><br/>Navegador: <span id="browserType"></span></h2>
            </div>
            <h2>Smiep</h2>
            <h4>Prueba PyScript<br><!--Software de Manejo de Inventarios para Empresas Pequeñas</h4>
            <p>En este lugar se puede observar que, el poco control que se intenta llevar acerca del inventario de los
                productos, se hace en unos cuadernos y estos no permiten realizar un análisis profundo de los productos
                que se tienen y se deben pedir, situación que ha dado paso a pérdidas económicas, pues productos que
                exceden la fecha de caducidad no son contados y cambiados oportunamente. De igual forma, se observa que
                a falta de un buen sistema, ellos se han visto en la necesidad de hacer las cosas más esenciales a
                instinto y sin ninguna herramienta plausible para la tarea.--> <?php include_once("../plantillas/pyscript/grafico/test.html"); ?></p>
        </article>
    </main>
    <?php include_once("../plantillas/footer.html"); ?>

    <script type="text/javascript" src="../../public/js/detectSoft/detetctSoft.js"></script>
    <script type="text/javascript" src="../../public/js/darkMode/darkMode.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../public/js/main.js"></script>
    <script src="../../public/js/salir.js"></script>
</body>

</html>
<?php
}?>