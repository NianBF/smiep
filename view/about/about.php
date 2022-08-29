<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#339999">
    <title>SMIEP</title>
    <link rel="stylesheet" href="../../public/css/plantillas/header1.css">
    <link rel="stylesheet" href="../../public/css/plantillas/footer.css">  
    <link rel="stylesheet" href="../../public/css/plantillas/smiep.css">
    <link rel="stylesheet" href="../../public/css/plantillas/about.css">
</head>
<body>
    <?php include_once("../plantillas/header.html"); ?>
    <article>
        <section>
            <section class="about">
                <h1>¿Quiénes<br/>somos?</h1>
            </section>
            <section class="contenido">
                <p><?php include_once("../plantillas/lorem.html"); ?></p>
            </section>
        </section>
        <section>
        <?php include_once("../plantillas/smiep.html"); ?>
        </section>
    </article>
    <?php include_once("../plantillas/footer.html"); ?>
</body>
</html>