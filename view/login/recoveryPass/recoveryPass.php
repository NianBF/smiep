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
    <link rel="stylesheet" href="../../../public/css/plantillas/forms.css">
</head>
<body>
    <header>
        <?php include_once("../../plantillas/header.html"); ?>
    </header>
    <section class="losePass">
        <h1 title="¿Perdiste tu contraseña?">¿Perdiste tu contraseña?</h1></br>
        <article>
            <p>Por favor, llene los siguientes datos con la información exacta con la que está registrado en <strong>S.M.I.E.P</strong>, así podremos validar que sea parte de nuestra base de datos y recuperar de forma correcta su acceso al sistema.</p></br>
        </article>
        <div class="contForm">
            <form action="../../../controller/recoveryPassCtrl.php" method="post">
                <fieldset class="anuncio">
                    <legend>Advertencia</legend>
                    <div>
                        <article>
                            <p>Este proceso solo puede ser realizado por usuarios con permisos especiales. <strong>S.M.I.E.P</strong> no se hace responsable de la filtración, fuga o perdida de datos que pueda provocar usted al hacer uso de este apartado.</p></br>
                            <p><strong>S.M.I.E.P</strong> obtiene sus datos mediante información brindada por su empresa, recuerde que todos estos datos son confidenciales entre usted, la empresa y <strong>S.M.I.E.P</strong>, por lo que puede incurrir en una violación grave al compartir información confidencial con personas externas. Además, su información se encuentra protegida y solo puede ser manipulada por personas con un vínculo con la empresa para la que trabaja.</p>
                        </article>
                    </div>
                </fieldset>
                <fieldset class="identify">
                    <legend>Identifícate</legend>
                    <div class=userBox>
                        <input type="number" name="id_doc" id="id_doc" placeholder=" ">
                        <label for="id_doc">Número de documento</label>
                    </div>
                    <div class=userBox>
                        <input type="text" name="userName" id="userName" placeholder=" ">
                        <label for="userName">Usuario</label>
                    </div>
                    <div class=userBox>
                        <input type="text" name="email" id="email" placeholder=" ">
                        <label for="email">Email</label>
                    </div>
                    <div class=userBox>
                        <input type="number" name="id_ti" id="id_ti" placeholder=" ">
                        <label for="id_ti">ID Tienda</label>
                    </div>
                    <input type="submit" value="Enviar">
                </fieldset>
                
            </form>
        </div>
    </section>
</body>
</html>