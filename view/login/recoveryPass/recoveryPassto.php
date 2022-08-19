<?php
$recoveryEmail = $_GET["recoveryEmail"];
$userName = $_GET["userName"];
$id_doc = $_GET["id_doc"];
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
        <p>Se enviara un correo donde se te indicará cómo recuperar tu contraseña, no olvides revisar en SPAM.</p>
        <div>
            <form action="sendEmail.php" method="post">
                <fieldset>
                    <legend>Usted es:</legend>
                    <div>
                        <input type="number" name="id_doc" id="id_doc" placeholder="<?php echo("$id_doc"); ?>" readonly>
                        <label for="id_doc">Número de documento</label>
                    </div>
                    <div>
                        <input type="text" name="userName" id="userName" placeholder="<?php echo("$userName"); ?>" readonly>
                        <label for="userName">Usuario</label>
                    </div>
                    <div>
                        <input type="email" name="recoveryEmail" id="recoveryEmail" placeholder="<?php echo("$recoveryEmail"); ?>" readonly>
                        <label for="recoveryEmail">Email para recuperación</label>
                    </div>
                    <input type="submit" value="Enviar">
                </fieldset>
            </form>
        </div>
    </section>
</body>
</html>