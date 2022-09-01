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
    <!--Color para navegador móvil-->
    <meta name="theme-color" content="#339999">
    <title>SMIEP</title>
    <link rel="stylesheet" href="../../public/css/plantillas/forms.css">
    <link rel="stylesheet" href="../../public/css/plantillas/header1.css">
    <link rel="stylesheet" href="../../public/css/fonts.css">
</head>

<body>
    <header>
        <?php include_once("../plantillas/header.html"); ?>
    </header>
    <section class="initForm">

        <div class="contForm">
            <form action='../../controller/categoriaCtrl.php' id="formulario" name="formulario" method='post'>
            <fieldset class="anuncio">
                    <legend>Advertencia</legend>
                    <div>
                        <article>
                            <p>Debes llenar los dos campos del formulario, cada campo es necesario y obligaotrio para el correcto manejo de este nuevo dato a agregar en la base de datos.</p></br>
                            <p><strong>ID Categoría:</strong> En este campo se va a ingresar un número que sea consecutivo a las categorías anteriores, debe ser diferente a los ya existentes.</p></br>
                            <p><strong>Categoría:</strong> Se debe ingresar el nombre de la nueva categoría, no debe ser igual a las ya existentes.</p>
                        </article>
                    </div>
                </fieldset>    
            <fieldset class="contact-form">
                    <legend>Agregar Categoría</legend>

                    <div class="userBox">
                        <input type='text' id="id_cat" name='id_cat' placeholder=" ">
                        <label for="id_cat">ID Categoría</label>
                    </div>

                    <div class="userBox">
                        <input type='text' id="nCategoria" name='nCategoria' placeholder=" ">
                        <label for="nCategoria">Categoría</label>
                    </div>

                    <input type='hidden' name='insertar' value='insertar'>

                    <div class="btn">
                        <span><input type="button" value="Guardar"></span>
                        <span><a href='mostrarCat.php'><input type="button" value="Volver"></a></span>
                    </div>
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