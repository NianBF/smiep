<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
    header("location:../../index.php");
}
else
{
?>


<!DOCTYPE html>
<html lang="es">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
<!--Color para navegador móvil-->
<meta name="theme-color" content="#339999">
<title>SMIEP</title>
<!-- <link rel="stylesheet" href="../../public/css/mostarAll.css"> -->

<link rel="stylesheet" href="../../public/css/reportes.css">
<link rel="stylesheet" href="../../public/css/plantillas/header1.css">
<link rel="stylesheet" href="../../public/css/fonts.css">

<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<!--Fuente de iconos-->
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="../../public/css/plantillas/targetReports.css">


</head>
<header>
    <?php include_once("../plantillas/header.html"); ?>
</header>
<section class="contentList">
    <fieldset>

        <legend>Listado de Reportes</legend>
        <div class="btnMos">
            <a href='../../' class="back"><span><i
                        class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
        </div>
        
     

            <div class="reportCont">
                <div class="target">
                    <div class="imgReport">
                        <img src="../../img/other/pdf.png" alt="PDF_icon">
                    </div>
                    <div class="goTo">
                        <img src="../../img/other/pdf.png" alt="PDF_icon">
                        <h3>Reportes PDF</h3>
                        <p>Generar reportes en PDF</p>
                        <a href="mostrarPDF.php" class="goRep">Generar PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</section>
<footer>
    <?php 
    include_once("../plantillas/btnModOsc.html");
    include_once("../plantillas/footer.html"); ?>
</footer>
    <script src="../../public/js/darkMode/darkMode.js"></script>
</body>

</html>
<?php
}?>