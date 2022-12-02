<?php

$email = NULL;
$userName = NULL;
$id_doc = NULL;
$rol = NULL;

if ($userName = $_GET["userName"] == null or $id_doc = $_GET["id_doc"] == null or $email = $_GET["email"] == null) {
    header("location:recoveryPass.php");
}elseif ($rol = $_GET["rol"] == "Administrador") {
    $rol = $_GET["rol"];
    $userName = $_GET["userName"];
    $id_doc = $_GET["id_doc"];
    $email = $_GET["email"];
    $numero_aleatorio = mt_rand(0,20);
    $numero_aleatorio1 = mt_rand(0,20);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#339999">
    <link rel="icon" type="image/png" href="../public/img/favicon.png" sizes="any">
    <link rel="stylesheet" href="../../../public/css/plantillas/header1.css">
    <link rel="stylesheet" href="../../../public/css/formularios.css">
    <link rel="stylesheet" href="../../../public/css/recoverypasss.css">
    <title>SMIEP</title>
</head>
<body>
    <header>
        <?php include_once("../../plantillas/header.html"); ?>
    </header>

    <main class="main">
        <fieldset class="fieldsetAdvertencia">
            <legend>¿Perdiste tu contraseña?</legend>
            <p>Hola <?php echo $userName; ?>, no dudamos que seas tú, sin embargo necesitamos validar nuevamente tu número de documento</p>
        </fieldset>
        <form action="../../../controller/passDefaultCtrl.php?num1=$numero_aleatorio&num2=$numero_aleatorio1" method="post">
            <fieldset class="fieldsetFromulario">
                <legend>Usted es:</legend>
                <p><b><?php echo("$userName"); ?> --- <?php echo("$rol"); ?></b></p>
                <div class="grupoInputs">
                    <div class="userBox">
                        <input type="email" name="email" id="email" value="<?php echo("$email"); ?>" readonly>
                        <label for="email">Email</label>
                    </div> 
                    <div class="userBox">
                        <input type="number" name="id_doc" id="id_doc" value="<?php echo("$id_doc"); ?>" readonly>
                        <label for="id_doc">Documento</label>
                    </div>
                </div>
                <div class="grupoInputs2">
                    <div class="userBox">
                        <!-- <h5>Cuál es el resultado de la suma entre</h5> -->
                        <input type="number" name="num1" id="num1" value="<?php echo("$numero_aleatorio"); ?>">
                    </div>
                    <div class="userBox">
                        <input type="number" name="num2" id="num2" value="<?php echo("$numero_aleatorio1"); ?>">
                    </div>
                </div>
                <div class="grupoInputs3">
                    <div class="userBox">
                        <input type="number" name="res" id="res">
                        <label for="res">resultado</label>
                    </div>
                </div>
                    <input type="submit" value="Enviar">
            </fieldset>
        </form>
    </main>
    <footer class="footer">
        <p>© S.M.I.E.P | 2022</p>
    </footer>

</body>
</html>
<?php 
}elseif ($rol = $_GET["rol"] == "Empleado") {
    $userName = $_GET["userName"];
    $id_doc = $_GET["id_doc"];
    $email = $_GET["email"];
    $rol = $_GET["rol"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#339999">
    <link rel="icon" type="image/png" href="../public/img/favicon.png" sizes="any">
    <title>SMIEP</title>
</head>
<body>
<section>
        <h1>¿Perdiste tu contraseña?</h1>
        <p>Hola <strong><?php echo $userName; ?></strong>, debes pedir autorización a un Administrador para realizar esta acción.</p>
<?php
}
?>