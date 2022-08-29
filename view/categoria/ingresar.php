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
    <title>SMIEP</title>
    <link rel="stylesheet" href="../../public/css/plantillas/forms.css">
    <link rel="stylesheet" href="../../public/css/plantillas/header1.css">
    <link rel="stylesheet" href="../../public/css/fonts.css">
</head>

<body>
    <header>
        <?php include_once("../plantillas/header.html"); ?>
    </header>
    <section class="contact-wrapper animated bounceInUp">

        <div class="contForm">
            <form action='../../controller/categoriaCtrl.php' id="formulario" name="formulario" method='post'>
                <fieldset class="contact-form">
                    <legend>Agregar Categoria</legend>

                    <div class="userBox">
                        <input type='text' id="id_cat" name='id_cat' placeholder=" ">
                        <label for="id_cat">ID Categoria</label>
                    </div>

                    <div class="userBox">
                        <input type='text' id="nCategoria" name='nCategoria' placeholder=" ">
                        <label for="nCategoria">Categoria</label>
                    </div>

                    <input type='hidden' name='insertar' value='insertar'>

                    <p class='block'>
                        <button type='submit' id="btn" name="btn" value='Guardar'>
                            Guardar
                        </button>
                    </p>
                    <p class='block'>
                        <a href='mostrar.php'><button type="button">Volver</button></a>
                    </p>
                </fieldset>
            </form>
        </div>
    </section>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../public/js/categoria/ingresarCategoria.js"></script>
</body>

</html>
<?php
}?>