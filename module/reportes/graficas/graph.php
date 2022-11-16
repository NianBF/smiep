<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../../img/favicon.png" sizes="any">
    <title>SMIEP</title>
    <link rel="stylesheet" href="../../../public/css/mostarAll.css">
    <!-- Librerias para Plotly -->
    <script src="src/jquery-3.3.1.min.js"></script>
    <script src="src/plotly-latest.min.js"></script>
</head>

<body>
    <?php include_once("view/plantillas/header.html"); ?>
    <section>
        <?php 
        include_once("controller/mainCtrl.php")
        ?>
    </section>
    <?php include_once("view/plantillas/footer.html"); ?>
</body>

</html>