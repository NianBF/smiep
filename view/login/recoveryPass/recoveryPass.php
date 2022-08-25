<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#339999">
    <link rel="icon" type="image/png" href="../public/img/favicon.png" sizes="any">
    <title>SMIEP</title>
    <link rel="stylesheet" href="../../../public/css/recoveryPass/recoveryPass.css">
    <link rel="stylesheet" href="../../../public/css/plantillas/header1.css">
</head>
<body>
    <header>
        <?php include_once("../../plantillas/header.html"); ?>
    </header>
    <section>
        <h1>¿Perdiste tu contraseña?</h1>
        <div>
            <form action="../../../controller/recoveryPassCtrl.php" method="post">
                <fieldset>
                    <legend>Identificate</legend>
                    <div>
                        <input type="number" name="id_doc" id="id_doc">
                        <label for="id_doc">Número de documento</label>
                    </div>
                    <div>
                        <input type="text" name="userName" id="userName">
                        <label for="userName">Usuario</label>
                    </div>
                    <div>
                        <input type="text" name="email" id="email">
                        <label for="email">Email</label>
                    </div>
                    <div>
                        <input type="number" name="id_ti" id="id_ti">
                        <label for="id_ti">Tienda</label>
                    </div>
                    <input type="submit" value="Enviar">
                </fieldset>
            </form>
        </div>
    </section>
</body>
</html>