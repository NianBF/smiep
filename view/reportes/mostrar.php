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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <title>Reportes</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/reportes.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/targetReports.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<header>
    <?php include_once("../plantillas/header.html"); ?>
</header>
<br>
<hr>
<br>
<main id="main-container">
    <div class="titleSec">
        <h2>Listado de Reportes</h2>
        <a colspan="2" class="bot1" href='../inicio/menu.php'>
            <button type="button" id="volver">
                <i class="fa-solid fa-arrow-rotate-left"></i> Volver</button></a>
    </div>
    <div class="contTarget">
        <div class="reportCont">
            <div class="target">
                <div class="imgReport">
                    <img src="../../img/other/grphVect.png" alt="Gráfico_icon">
                </div>
                <div class="goTo">
                    <img src="../../img/other/grphVect.png" alt="Gráfico_icon">
                    <h3>Reportes gráficos</h3>
                    <p>Generar reportes con gráficos</p>
                    <a href="pyscript/grafico/test.html" class="goRep">Generar Gráfico</a>
                </div>
            </div>
        </div>

        <div class="reportCont">
            <div class="target">
                <div class="imgReport">
                    <img src="../../img/other/pdf.png" alt="PDF_icon">
                </div>
                <div class="goTo">
                    <img src="../../img/other/pdf.png" alt="PDF_icon">
                    <h3>Reportes PDF</h3>
                    <p>Generar reportes en documentos PDF</p>
                    <a href="mostrarPDF.php" class="goRep">Generar PDF</a>
                </div>
            </div>
        </div>
    </div>
</main>

</table>
<footer class="footer">
    <p>© S.M.I.E.P | 2022</p>
</footer>
</body>

</html>
<?php
}?>