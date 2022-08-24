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
        <p>Hola <strong><?php echo $userName; ?></strong>, no dudamos que seas tú, sin embargo necesitamos validar nuevamente tu número de documento</p>
        <div>
            <form action="../../../controller/passDefaultCtrl.php" method="post">
                <fieldset>
                    <legend>Usted es:</legend>
                    <p><b><?php echo("$userName"); ?> --- <?php echo("$rol"); ?></b></p>
                    <div>
                        <input type="email" name="email" id="email" value="<?php echo("$email"); ?>" readonly>
                        <label for="email">Email</label>
                    </div>
                    
                    <div>
                        <input type="number" name="id_doc" id="id_doc" value="<?php echo("$id_doc"); ?>" readonly>
                        <label for="id_doc">Documento</label>
                    </div>
                    <div>
                        <input type="password" name="newPass" id="newPass">
                        <label for="newPass">Nueva Contraseña</label>
                    </div>
                    <div>
                        <input type="password" name="confNewPass" id="confNewPass">
                        <label for="confNewPass">Repita la contraseña</label>
                    </div>
                    <input type="submit" value="Enviar">
                </fieldset>
            </form>
        </div>
    </section>
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