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
    <link rel="stylesheet" href="../../public/css/plantillas/stepsForm.css">
    <link rel="stylesheet" href="../../public/css/plantillas/btns.css">
    <link rel="stylesheet" href="../../public/css/plantillas/forms.css">
    <link rel="stylesheet" href="../../public/css/plantillas/header1.css">
    <link rel="stylesheet" href="../../public/css/tablas.css">
    <link rel="stylesheet" href="../../public/css/fonts.css">
    <link rel="stylesheet" href="../../public/css/variables.css">
    <link rel="stylesheet" href="../../public/css/plantillas/footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body>
    <header>
        <?php include_once("../plantillas/header.html"); ?>
    </header>
    <section class="initForm">

        <div class="btnMos">
            <a href='../usuario/mostrarUsu.php' class="back"><span><i
                        class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
        </div>

        <div class="contForm">


            <form action='../../controller/usuarioCtrl.php' id="formulario" name="formulario" method='post'>

                <fieldset class="anuncio movAds">
                    <div class="closer"><i class="fa-sharp fa-solid fa-xmark ex"></i></div>

                    <legend>Advertencia</legend>
                    <div>
                        <article>
                            <p>Debes llenar los dos campos del formulario, cada campo es necesario y obligaotrio para el
                                correcto manejo de este nuevo dato a agregar en la base de datos.</p></br>
                            <p><strong>ID Categoría:</strong> En este campo se va a ingresar un número que sea
                                consecutivo a las categorías anteriores, debe ser diferente a los ya existentes.</p>
                            </br>
                            <p><strong>Categoría:</strong> Se debe ingresar el nombre de la nueva categoría, no debe ser
                                igual a las ya existentes.</p>
                        </article>
                    </div>
                </fieldset>

                <fieldset class="contact-form">
                    <legend>Agregar Usuario</legend>

                    <section>
                        <div class="progress-bar">
                            <div class="step">
                                <p>Paso 1</p>
                                <div class="bullet">
                                    <span>1</span>
                                </div>
                                <div class="check fas fa-check"></div>
                            </div>
                            <div class="step">
                                <p>Paso 2</p>
                                <div class="bullet">
                                    <span>2</span>
                                </div>
                                <div class="check fas fa-check"></div>
                            </div>
                            <div class="step">
                                <p>Paso 3</p>
                                <div class="bullet">
                                    <span>3</span>
                                </div>
                                <div class="check fas fa-check"></div>
                            </div>
                            <div class="step">
                                <p>Fin</p>
                                <div class="bullet">
                                    <span>4</span>
                                </div>
                                <div class="check fas fa-check"></div>
                            </div>
                        </div>
                    </section>

                    <section class="formularios">
                        <div class="slide-page formPage">
                            <h4 class="titleSect">Documento de Identidad</h4>
                            <div class="userBox">
                                <input type='text' id="id_doc" name='id_doc' placeholder=" " required>
                                <label for="id_doc">ID Usuario</label>
                            </div>
                            <div class="btn">
                                <button class="firstNext next">Siguiente</button>
                            </div>
                        </div>
                        <div class="page formPage">
                            <h4 class="titleSect">Nombres y Apellidos</h4>
                            <div class="userBox">
                                <input type='text' id="nombre1" name='nombre1' placeholder=" " required>
                                <label for="nombre1">Primer Nombre</label>
                            </div>
                            <div class="userBox">
                                <input type='text' id="nombre2" name='nombre2' placeholder=" ">
                                <label for="nombre2">Segundo Nombre</label>
                            </div>

                            <div class="userBox">
                                <input type='text' id="apellido1" name='apellido1' placeholder=" " required>
                                <label for="apellido1">Primer Apellido</label>
                            </div>

                            <div class="userBox">
                                <input type='text' id="apellido2" name='apellido2' placeholder=" ">
                                <label for="apellido2">Segundo Apellido</label>
                            </div>
                            <div class="btn">
                                <button class="prev-1 prev">Atrás</button>
                                <button class="next-1 next">Siguiente</button>
                            </div>
                        </div>
                        <div class="page page1 formPage">
                            <h4 class="titleSect">Información de Usuario</h4>
                            <div class="userBox">
                                <input type='text' id="useName" name='userName' placeholder=" " required>
                                <label for="useName">Nombre de Usuario</label>
                            </div>

                            <div class="userBox">
                                <input type='text' id="email" name='email' placeholder=" " required>
                                <label for="email">Correo</label>
                            </div>

                            <div class="userBox">
                                <input type='text' id="pass" name='pass' placeholder=" " required>
                                <label for="pass">Contraseña</label>
                            </div>
                            <div class="btn">
                                <button class="prev-2 prev">Atrás</button>
                                <button class="next-2 next">Siguiente</button>
                            </div>
                        </div>
                        <div class="page infTi">
                            <h4 class="titleSect">Información de Tienda</h4>
                            <div class="userBox">
                                <!-- <input type='text' id="nCategoria" name='nCategoria' placeholder=" "> -->
                                <label for="rol" class="lSel">Rol</label><br>
                                <select name="rol" required>
                                    <optgroup label="Rol">
                                        <option selected>Elige una opción</option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Empleado">Empleado</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="userBox">
                                <!-- <input type='text' id="nCategoria" name='nCategoria' placeholder=" "> -->
                                <label for="id_estado" class="lSel">Estado</label><br>
                                <select name="id_estado" required>
                                    <optgroup label="Estado">
                                        <option selected>Elige una opción</option>
                                        <option value="2">Disponible</option>
                                        <option value="3">No Disponible</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="userBox">
                                <!-- <input type='text' id="nCategoria" name='nCategoria' placeholder=" "> -->
                                <label for="id_ti" class="lSel">Tienda</label><br>
                                <select name="id_ti" required>
                                    <optgroup label="Tienda">
                                        <option selected>Elige una opción</option>
                                        <option value="1">Tienda Express</option>
                                    </optgroup>
                                </select>
                            </div>

                            <input type='hidden' name='insertar' value='insertar'>

                            <div class="btn">
                                <button class="prev-3 prev">Atrás</button>
                                <button class="submit">Enviar</button>
                            </div>
                        </div>
                        <figure class="info add"><i class="fa-duotone fa-question"></i></figure>

                    </section>
                </fieldset>
            </form>
        </div>

    </section>
    <footer>

        <?php include_once("../plantillas/footer.html"); ?>
    </footer>
    <script src="../../public/js/stepsForm.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../public/js/categoria/ingresarCategoria.js"></script>
</body>

</html>
<?php
}?>